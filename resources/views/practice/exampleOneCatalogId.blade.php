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
        <div class="pt-5 d-flex justify-content-center flex-column align-items-center">
            <img src="{{ $data[$id-1]['img_path'] }}" class="w-25 h-25" alt="">
            <span>Название: {{$data[$id-1]['name']}}</span>
            <span>Издатель: {{$data[$id-1]['publisher']}}</span>
            <span>Дата добавления: {{$data[$id-1]['created_at']}}</span>
            <span>Антагонист: {{$data[$id-1]['antagonists']}}</span>
            <span>Цена: {{$data[$id-1]['price']}} рублей</span>
        </div>
    </div>
</section>  
@endsection
