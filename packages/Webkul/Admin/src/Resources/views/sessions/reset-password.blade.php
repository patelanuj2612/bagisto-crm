@extends('admin::layouts.anonymous-master')

@section('page_title')
    {{ __('admin::app.sessions.reset-password.title') }}
@stop

@section('content')

    <div class="panel">
        <div class="panel-body">

            <div class="form-container">
                <h1>{{ __('admin::app.sessions.reset-password.title') }}</h1>

                <form method="POST" action="{{ route('admin.reset_password.store') }}" @submit.prevent="onSubmit">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group" :class="[errors.has('email') ? 'has-error' : '']">
                        <label for="email">{{ __('admin::app.sessions.reset-password.email') }}</label>
                        <input type="text" v-validate="'required|email'" class="control" id="email" name="email" data-vv-as="&quot;{{ __('admin::app.sessions.reset-password.email') }}&quot;" value="{{ old('email') }}"/>
                        <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                    </div>

                    <div class="form-group" :class="[errors.has('password') ? 'has-error' : '']">
                        <label for="password">{{ __('admin::app.sessions.reset-password.password') }}</label>
                        <input type="password" v-validate="'required|min:6'" class="control" id="password" name="password" ref="password" data-vv-as="&quot;{{ __('admin::app.sessions.reset-password.password') }}&quot;"/>
                        <span class="control-error" v-if="errors.has('password')">@{{ errors.first('password') }}</span>
                    </div>

                    <div class="form-group" :class="[errors.has('password_confirmation') ? 'has-error' : '']">
                        <label for="password_confirmation">{{ __('admin::app.sessions.reset-password.confirm-password') }}</label>
                        <input type="password" v-validate="'required|min:6|confirmed:password'" class="control" id="password_confirmation" name="password_confirmation" data-vv-as="&quot;{{ __('admin::app.sessions.reset-password.confirm-password') }}&quot;" data-vv-as="password"/>
                        <span class="control-error" v-if="errors.has('password_confirmation')">@{{ errors.first('password_confirmation') }}</span>
                    </div>
                    
                    <div class="button-group">
                        <button type="submit" class="btn btn-xl btn-primary">{{ __('admin::app.sessions.reset-password.reset-password') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@stop