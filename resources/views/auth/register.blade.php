@extends('main')

@section('content')
<h1 class="name_form nn">Регистрация</h1>
<form method="POST" action="{{ route('register') }}" class='register' >
                        @csrf
                            <label for="full_name" class="col-md-4 col-form-label text-md-end">ФИО</label>
                                <input  type="text"  name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="login" class="col-md-4 col-form-label text-md-end">Логин</label>
                            <input  type="text"  name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Номер телефона</label>
                            <input  type="phone"  name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email">Электронная почта</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                                <input id="password" type="password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Повторите пароль</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                <button type="submit" class="btn btn-primary">
                                    зарегистрироваться
                                </button>
                    </form>
@endsection
