@extends('layouts.app')

@section('menu')
@parent
    <!-- <link rel="stylesheet" href="css/style.css">
    <ul class="d-flex justify-content-around col-lg-6 align-items-center">
        <li><a>О нас<a></li>
        <li><a href="catalog">Каталог<a></li>
        <li><a href="geolocation">Где нас найти?<a></li>
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
<div class="container">
    <form method="post" class="d-flex flex-column text-center justify-content-center align-items-center">
    @csrf
    <span>Причина отмены</span>
    <input type="text" name="reason">
    <input type="submit" value="Отменить">
</form>
</div>

@endsection
