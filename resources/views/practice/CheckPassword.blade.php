@extends('layouts.app')

@section('menu')
@parent
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
@endsection


@section('content')
@parent
    <form method="post">
        @csrf
        <span>Введите пароль</span>
        <input type="password" name="password">
        <input type="submit" value="Подтвердить">
    </form>
@endsection
