<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
       <a href="/" style='border:none'> <p >МОЙ НЕ САМ</p></a>
        <div>
            @guest
            <a href="{{route('register')}}">зарегистрироваться</a>
            <a href="{{route('login')}}">войти</a>
            @endguest
            @auth
            <a href="/">мои заявки</a>
            @if(Auth::user()->role == 'admin')
            <a href="/admin">панель администратора</a>
            @endif
            <form action="logout" method='POST'>
            @csrf
            <a ><button type="submit">выйти</button></a>
            </form>
  
            @endauth
        </div>
    </header>
    <div class="content">
    @yield('content')

    </div>

