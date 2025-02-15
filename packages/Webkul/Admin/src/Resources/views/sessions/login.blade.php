@extends('admin::layouts.anonymous-master')

@section('page_title')
    {{ __('admin::app.sessions.login.title') }}
@stop

@section('content')

    <div class="panel">
        <div class="panel-body">

            <div class="form-container">
                <h1>{{ __('admin::app.sessions.login.welcome') }}</h1>

                <form method="POST" action="{{ route('admin.session.store') }}" @submit.prevent="onSubmit">
                    @csrf

                    <div class="form-group" :class="[errors.has('email') ? 'has-error' : '']">
                        <label for="email">{{ __('admin::app.sessions.login.email') }}</label>
                        <input type="text" v-validate="'required|email'" class="control" id="email" name="email" data-vv-as="&quot;{{ __('admin::app.sessions.login.email') }}&quot;"/>
                        <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                    </div>

                    <div class="form-group" :class="[errors.has('password') ? 'has-error' : '']">
                        <label for="password">{{ __('admin::app.sessions.login.password') }}</label>
                        <input type="password" v-validate="'required|min:6'" class="control" id="password" name="password" data-vv-as="&quot;{{ __('admin::app.sessions.login.password') }}&quot;" value=""/>
                        <span class="control-error" v-if="errors.has('password')">@{{ errors.first('password') }}</span>
                    </div>

                    <a href="{{ route('admin.forgot_password.create') }}">{{ __('admin::app.sessions.login.forgot-password') }}</a>

                    <div class="button-group">
                        <button class="btn btn-xl btn-primary">{{ __('admin::app.sessions.login.login') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@stop