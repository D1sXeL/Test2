@extends('layouts.app')

@section('menu')
@parent
<<<<<<< HEAD
    <!-- <link rel="stylesheet" href="css/style.css">
    <ul class="d-flex justify-content-around col-lg-6 align-items-center">
        <li><a>О нас<a></li>
        <li><a href="catalog">Каталог<a></li>
        <li><a>Где нас найти?<a></li>
    </ul>

    <ul class="d-flex justify-content-around col-lg-3 align-items-center">
        <li><a>Авторизоваться<a></li>
        <li><a>Регистрация<a></li>
    </ul>

    <div>
     -->
=======
>>>>>>> 048d722 (added README.md)
@endsection


@section('content')
@parent
<<<<<<< HEAD
    <form method="post">
        @csrf
        <span>Введите пароль</span>
        <input type="password" name="password">
        <input type="submit" value="Подтвердить">
    </form>
=======
<div class="container d-flex justify-content-center flex-column align-items-center my-5">
    <form method="post" class="d-flex flex-column">
        @csrf
        <span class="my-2">Введите пароль</span>
        <input type="password" class="my-2" name="password">
        <input type="submit" class="my-2" value="Подтвердить">
    </form>
</div>
>>>>>>> 048d722 (added README.md)
@endsection
