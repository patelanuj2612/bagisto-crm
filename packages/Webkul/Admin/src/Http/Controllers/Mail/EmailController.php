<?php

namespace Webkul\Admin\Http\Controllers\Mail;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Webkul\Email\Mails\Email;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Email\Repositories\EmailRepository;
use Webkul\Email\Repositories\AttachmentRepository;

class EmailController extends Controller
{
    /**
     * EmailRepository object
     *
     * @var \Webkul\Email\Repositories\EmailRepository
     */
    protected $emailRepository;

    /**
     * AttachmentRepository object
     *
     * @var \Webkul\Email\Repositories\AttachmentRepository
     */
    protected $attachmentRepository;

    /**
     * Create a new controller instance.
     *
     * @param \Webkul\Email\Repositories\EmailRepository  $emailRepository
     * @param \Webkul\Email\Repositories\AttachmentRepository  $attachmentRepository
     *
     * @return void
     */
    public function __construct(
        EmailRepository $emailRepository,
        AttachmentRepository $attachmentRepository
    )
    {
        $this->emailRepository = $emailRepository;

        $this->attachmentRepository = $attachmentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        switch (request('route')) {
            case 'compose':
                return view('admin::mail.compose');
            
            default:
                return view('admin::mail.index');
        }
    }

    /**
     * Display a resource.
     *
     * @return \Illuminate\View\View
     */
    public function view()
    {
        $email = $this->emailRepository->with(['emails', 'attachments'])->findOrFail(request('id'));

        if (request('route') == 'draft') {
            return view('admin::mail.compose', compact('email'));
        } else {
            return view('admin::mail.view', compact('email'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'reply_to' => 'required|array|min:1',
            'reply'    => 'required',
        ]);

        Event::dispatch('email.create.before');

        $uniqueId = time() . '@' . config('mail.domain');

        $referenceIds = [];

        if ($parentId = request('parent_id')) {
            $parent = $this->emailRepository->findOrFail($parentId);

            $referenceIds = $parent->reference_ids ?? [];
        }

        $email = $this->emailRepository->create(array_merge(request()->all(), [
            'source'        => 'web',
            'from'          => 'admin@example.com',
            'user_type'     => 'admin',
            'folders'       => request('is_draft') ? ['draft'] : ['outbox'],
            'name'          => auth()->guard('user')->user()->name,
            'unique_id'     => $uniqueId,
            'message_id'    => $uniqueId,
            'reference_ids' => array_merge($referenceIds, [$uniqueId]),
            'user_id'       => auth()->guard('user')->user()->id,
        ]));

        if (! request('is_draft')) {
            try {
                Mail::send(new Email($email));

                $this->emailRepository->update([
                    'folders' => ['inbox', 'sent']
                ], $email->id);
            } catch (\Exception $e) {}
        }

        Event::dispatch('email.create.after', $email);

        if (request('is_draft')) {
            session()->flash('success', trans('admin::app.mail.saved-to-draft'));

            return redirect()->route('admin.mail.index', ['route' => 'draft']);
        }

        session()->flash('success', trans('admin::app.mail.create-success'));

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Event::dispatch('email.update.before');

        $data = request()->all();

        if (! is_null(request('is_draft'))) {
            $data['folders'] = request('is_draft') ? ['draft'] : ['outbox'];
        }

        $email = $this->emailRepository->update($data, request('id') ?? $id);

        Event::dispatch('email.update.after', $email);

        if (! is_null(request('is_draft')) && ! request('is_draft')) {
            try {
                Mail::send(new Email($email));

                $this->emailRepository->update([
                    'folders' => ['inbox', 'sent']
                ], $email->id);
            } catch (\Exception $e) {}
        }

        if (! is_null(request('is_draft'))) {
            if (request('is_draft')) {
                session()->flash('success', trans('admin::app.mail.saved-to-draft'));
    
                return redirect()->route('admin.mail.index', ['route' => 'draft']);
            } else {
                session()->flash('success', trans('admin::app.mail.create-success'));

                return redirect()->route('admin.mail.index', ['route' => 'inbox']);
            }
        }

        session()->flash('success', trans('admin::app.mail.update-success'));

        return redirect()->back();
    }

    /**
     * Run process inbound parse email
     *
     * @return \Illuminate\Http\Response
     */
    public function inboundParse()
    {
        $emailContent = file_get_contents(base_path('email.txt'));

        $this->emailRepository->processInboundParseMail($emailContent);

        return response()->json([], 200);
    }

    /**
     * Download file from storage
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function download($id)
    {
        $attachment = $this->attachmentRepository->findOrFail($id);

        return Storage::download($attachment->path);
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = $this->emailRepository->findOrFail($id);

        try {
            Event::dispatch('email.delete.before', $id);

            $parentId = $email->parent_id;

            $this->emailRepository->delete($id);

            Event::dispatch('email.delete.after', $id);

            if (request()->ajax()) {
                return response()->json([
                    'status'    => true,
                    'message'   => trans('admin::app.mail.delete-success'),
                ], 200);
            } else {
                session()->flash('success', trans('admin::app.mail.delete-failed'));

                if ($parentId) {
                    return redirect()->route('admin.mail.index', ['route' => 'inbox']);
                } else {
                    return redirect()->back();
                }
            }
        } catch(\Exception $exception) {
            if (request()->ajax()) {
                return response()->json([
                    'status'  => false,
                    'message' => trans('admin::app.mail.delete-failed'),
                ], 400);
            } else {
                session()->flash('error', trans('admin::app.mail.delete-failed'));

                return redirect()->back();
            }
        }
    }

    /**
     * Mass Delete the specified resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function massDestroy()
    {
        foreach (request('rows') as $emailId) {
            Event::dispatch('email.delete.before', $emailId);

            $email = $this->emailRepository->find($emailId);

            if ($email) {
                $this->emailRepository->delete($email);

                Event::dispatch('email.delete.after', $email);
            }
        }

        return response()->json([
            'status'  => true,
            'message' => trans('admin::app.mail.destroy-success'),
        ]);
    }
}