@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="kontak" class="col-md-4 col-form-label text-md-right">{{ __('Kontak') }}</label>

                            <div class="col-md-6">
                                <input id="kontak" type="telp" class="form-control{{ $errors->has('kontak') ? ' is-invalid' : '' }}" name="kontak" value="{{ old('kontak') }}" required autofocus>

                                @if ($errors->has('kontak'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kontak') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="captcha" class="col-md-4 col-form-label text-md-right">{{ __('Captcha') }}</label>

                            <div class="col-md-6">
                                <div class="captcha">
                                    <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" id="captchaCode" alt="" class="captcha">
                   
                                    <a rel="nofollow" href="javascript:;" onclick="document.getElementById('captchaCode').src='captcha/flat?'+Math.random()" class="refresh">
                                        <button type="button" class="btn btn-success btn-refresh">Refresh</button>
                                    </a>
                                </div>
                                <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required placeholder="Masukkan Captcha">

                                @if ($errors->has('captcha'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
