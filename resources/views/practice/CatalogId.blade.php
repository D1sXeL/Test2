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
<<<<<<< HEAD
    <div class="container">    
=======
    <div class="container">  
>>>>>>> 048d722 (added README.md)
        <div class="pt-5 d-flex justify-content-center flex-column align-items-center">
            <img src="{{ $data[0]['img_path'] }}" class="w-25 h-25" alt="">
            <span>Название: {{$data[0]['name']}}</span>
            <span>Издатель: {{$data[0]['categoryName']}}</span>
            <span>Дата добавления: {{$data[0]['updated_at']}}</span>
            <span>Антагонист: {{$data[0]['antagonists']}}</span>
<<<<<<< HEAD
            <span>Цена: {{$data[0]['price']}} рублей</span>
            @auth
                <a href="?basket_id={{ $data[0]['id'] }}">Добавить в корзину</a>
=======
            <span>Количество: {{ $data[0]['quantity'] }}</span>
            <span>Цена: {{$data[0]['price']}} рублей</span>
            @auth
                <a href="?basket_id={{ $data[0]['id'] }}">Добавить в корзину</a>
            @else
                <span>Авторизуйтесь чтобы добавить в корзину</span>
>>>>>>> 048d722 (added README.md)
            @endauth
        </div>
    </div>
</section>  
@endsection
