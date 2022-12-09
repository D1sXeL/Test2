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
<section>
    <div class="container">
        <div class="d-flex justify-content-center flex-column align-items-center w-100 pt-5">
            <div class="d-flex text-center flex-column pb-5">
                <h2 class="py-2">Девиз</h2>
                <p>Комиксы. Качество выше, чем цена</p>
                <img src="img/logo.png" alt="">
            </div>
        
            <h2>Последние добавленные комиксы</h2>
            <div id="carouselExampleControls" class="carousel slide w-25 h-25 py-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($data as $key=>$value)
                        @if($loop->first)
                        <div class="carousel-item active text-center">
                            <img class="d-block w-100 img-size" src="{{ $value['img_path'] }}" alt="Первый слайд">
                            <p>Название: {{ $value['name'] }}</p>
                            <p>Цена: {{ $value['price'] }}</p>
                            <p><a href="/catalog/{{ $value['id'] }}">Подробнее</a></p>
                        </div>
                        @else
                        <div class="carousel-item text-center">
                            <img class="d-block w-100 img-size" src="{{ $value['img_path'] }}" alt="Второй слайд">
                            <p>Название: {{ $value['name'] }}</p>
                            <p>Цена: {{ $value['price'] }}</p>
                            <p><a href="/catalog/{{ $value['id'] }}">Подробнее</a></p>
                        </div>
                        @endif
                    @endforeach
                    <button class="carousel-control-prev pb-5 mb-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next pb-5 mb-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        
        
    
        
    </div>
</section>  
@endsection
