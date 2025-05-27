
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    <h1>Зарегистрироваться</h1>
                        <form class='form' method="POST" action="{{ route('register') }}">
                            @csrf
    
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ФИО') }}</label>
    
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
    
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Логин') }}</label>
    
                                    <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
    
                                    @error('login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Телефон') }}</label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Адрес электронной почты') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
    
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>
    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Повторите пароль') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Зарегистрироваться') }}
                                    </button>
                        </form>
    @endsection

