@extends('layouts.app')

@section('menu')
@parent
    <link rel="stylesheet" href="css/style.css">
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
    
@endsection


@section('content')
@parent
<section>
    <div class="container">
        <div class="d-flex justify-content-center flex-column align-items-center w-100 pt-5">
        <h2>Последние добавленные комиксы</h2>
                <div id="carouselExampleControls" class="carousel slider w-25 h-25" data-bs-ride="carousel">
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
                </div>
        </div>
        
        <div class="d-flex text-center flex-column">
            <h2 class="pt-5">О нас</h2>

            <p>Наш магазин существует с 2009 года и является старейшим специализированным магазином комиксов России.</p>
            <p>Мы привыкли думать, что наш магазин выгодно отличается на фоне других книжных и комиксных магазинов именно благодаря нашему подходу к делу, оформлению, ассортименту, рекламе и общению с покупателями. Мы ценим наших клиентов и стараемся посвящать интересующихся в необъятный, но такой интересный и разнообразный мир комиксов. Каждый из наших сотрудников с удовольствием поможет подобрать вам что-то по вкусу, даже если вы не знаете, что именно вы ищите или с чего начать знакомство с комиксами.</p>
            
            <h1>Адрес</h1>
            <p>Наш магазин находится по адресу:</p>
            <p>Улица Боровая, дом 52</p>
            <p>Без перерывов и выходных с 12:00 до 20:00</p>
            <p>По вопросам заказа и работы магазинов:</p>
            <p>+7(812)565-82-28, или почта 28oishop@gmail.com</p>
            <p>Наши реквизиты</p>
            <p>ИП Шпаковский Алексей Андреевич</p>
            <p>ОГРНИП: 319784700362336</p>
            <p>Адрес фактический:</p>
            <p>192007, Санкт-Петербург, улица Боровая дом 52.</p>
            <p>ИНН: 471907300003</p>
            <p>Филиал Точка Публичного акционерного общества Банка «Финансовая Корпорация Открытие»</p>
            <p>БИК 044525999</p>
            <p>Р/с 40802810103500028029</p>
            <p>Кор/счет 30101810845250000999</p>
        </div>
    
        
    </div>
</section>  
@endsection
