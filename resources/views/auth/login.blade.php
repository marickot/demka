@extends('main')

@section('content')
<h1 class='name_form nn'>Вход</h1>
<form method="POST" action="{{ route('login') }}" class='register'>
                        @csrf

                            <label for="login" class="col-md-4 col-form-label text-md-end">Логин</label>

                                <input id="login" type="text" class="form-control @error('email') is-invalid @enderror" name="login" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password') <span class="invalid-feedback" role="alert">< strong>{{ $message }}</strong> </span>@enderror
                                <button type="submit" class="btn btn-primary">
                                    войти
                                </button>

                    </form>
@endsection
