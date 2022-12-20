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

                        <div class="row mb-3">
<<<<<<< HEAD
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Login') }}</label>
=======
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Логин') }}</label>
>>>>>>> 048d722 (added README.md)

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login">

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>
>>>>>>> 048d722 (added README.md)

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
<<<<<<< HEAD
                                        {{ __('Remember Me') }}
=======
                                        {{ __('Запомнить') }}
>>>>>>> 048d722 (added README.md)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('Login') }}
=======
                                    {{ __('Авторизоваться') }}
>>>>>>> 048d722 (added README.md)
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
<<<<<<< HEAD
                                        {{ __('Forgot Your Password?') }}
=======
                                        {{ __('Забыли пароль?') }}
>>>>>>> 048d722 (added README.md)
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
