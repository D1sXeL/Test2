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
<section>
    <div class="container">
        <div class="my-5 d-flex align-items-center">
            <div>
                <h2>Адрес</h2>
                <p>Наш магазин находится по адресу:</p>
                <p>Улица Килинина, дом 6</p>
                <p>Без перерывов и выходных с 12:00 до 20:00</p>
            </div>
            <div class="ms-5">
                <img src="img/map.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>  
@endsection
