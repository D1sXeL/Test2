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
            <!-- <div id="carouselExampleControls" class="carousel slider w-25 h-25" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active animation">
                        <img src="img/1.jpg" class="d-block w-100 img-size" alt="...">
                    </div>
                    <div class="carousel-item animation">
                        <img src="img/2.jpg" class="d-block w-100 img-size" alt="...">
                    </div>
                    <div class="carousel-item animation">
                        <img src="img/4.jpg" class="d-block w-100 img-size" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div> -->

            <div id="carouselExampleControls" class="carousel slide w-25 h-25 py-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($data as $key=>$value)
                        @if($loop->first)
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-size" src="{{ $value['img_path'] }}" alt="Первый слайд">
                        </div>
                        @else
                        <div class="carousel-item">
                            <img class="d-block w-100 img-size" src="{{ $value['img_path'] }}" alt="Второй слайд">
                        </div>
                        @endif
                    @endforeach
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        
        
    
        
    </div>
</section>  
@endsection
