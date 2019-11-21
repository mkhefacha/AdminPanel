@extends('layouts.app')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('admin.home') }}">
            <!-- {{ trans('panel.site_title') }}-->
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">
                {{ trans('global.login') }}
            </p>

            @if(session('message'))
                <p class="alert alert-info">
                    {{ session('message') }}
                </p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" name="email" class="form-control" required autocomplete="email"
                           autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" class="form-control" required
                           placeholder="{{ trans('global.login_password') }}">

                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>



                <div class="form-group  {{ $errors->has('captcha') ? ' has-error' : '' }}">

                    <div class="captcha ">
                        <div class="col-md-4
                     col-form-label text-md-right">{!! captcha_img('math') !!}</div>
                    <div class="col-md-6">
                        <a href="{{ url('/refreshcaptcha') }}">
                            <span class="glyphicon glyphicon-refresh"></span>
                        </a>
                        </div>
                    </div>
                        <input id="captcha" type="text" class="form-control"
                               name="captcha"    required  placeholder="captcha">
                    @if($errors->has('captcha'))
                        <p class="help-block">
                            {{ $errors->first('captcha') }}
                        </p>
                    @endif
                    </div>




                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label><input type="checkbox" name="remember"> {{ trans('global.remember_me') }}</label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.login') }}
                        </button>
                    </div>
                </div>
            </form>

            @if(Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ trans('global.forgot_password') }}
                </a><br>
            @endif


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
@endsection