@extends('Pub::layouts.layout')


@section('content')


    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Fox</b>Gallery</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <!-- Login form -->
                <form method="POST" class="login-form" action="{{ route('login.post') }}">
                    @csrf
                    <div class="form-group input-group mb-3">
                        <input id="email" name="email" type="email"
                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               placeholder="{{ __('Email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group input-group mb-3">
                        <input id="password" name="password" type="password"
                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               placeholder="{{ __('Password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}<i class="icon-circle-right2 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection
