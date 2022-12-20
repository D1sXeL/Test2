@extends('layouts.app')
@section('content')
@parent

    <section>
        <div class="container">
            <div class="">
                <div class="my-5">
                    <form method="post">
                        {{ csrf_field() }}
                        <span>Сортировать по:</span>
                        @if(isset($sort))
                            @if($sort=="products.name")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">Дате</option>
                                <option value="name" selected>Наименованию</option>
                                <option value="publisher">Категории</option>
                                <option value="price">Цене</option>
                            </select>
                            @elseif($sort=="products.price")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">Дате</option>
                                <option value="name">Наименованию</option>
                                <option value="publisher">Категории</option>
                                <option value="price" selected>Цене</option>
                            </select>
                            @elseif($sort=="categories.name")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">Дате</option>
                                <option value="name">Наименованию</option>
                                <option value="publisher" selected>Категории</option>
                                <option value="price">Цене</option>
                            </select>
                            @else
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date" selected>Дате</option>
                                <option value="name">Наименованию</option>
                                <option value="publisher">Категории</option>
                                <option value="price">Цене</option>
                            </select>
                            @endif
                        @else
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date" selected>Дате</option>
                                <option value="name">Наименованию</option>
                                <option value="publisher">Категории</option>
                                <option value="price">Цене</option>
                            </select>
                        @endif
                        @if(isset($optionSorted))
                            @if($optionSorted=="asc")
                            <select name="optionSorted" onchange="this.form.submit()">
                                <option value="asc" selected>По возрастанию</option>
                                <option value="desc">По убыванию</option>
                            </select>
                            @else
                            <select name="optionSorted" onchange="this.form.submit()">
                                <option value="asc">По возрастанию</option>
                                <option value="desc" selected>По убыванию</option>
                            </select>
                            @endif
                        @else
                        <select name="optionSorted" onchange="this.form.submit()">
                            <option value="asc" selected>По возрастанию</option>
                            <option value="desc">По убыванию</option>
                        </select>
                        @endif

                        <div class="sort-category col-lg-1 d-flex flex-column align-items-center py-3 mt-3">
                        <p>По категории:</p>
                            {{ csrf_field() }}
                            <select name="categorySorted" onchange="this.form.submit()">
                                <option value="Все">Все</option>
                            @foreach($dataCategories as $key=>$value)
                                @if(isset($sortCategory))
                                    @if($sortCategory == $value['name'])
                                        <option value="{{ $value['name'] }}" selected>{{ $value['name'] }}</option>
                                    @else
                                        <option value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                                    @endif
                                @else
                                    <option value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                                @endif
                            @endforeach

                            </select>
                    </div>

                <div class="d-flex flex-wrap justify-content-center">
                @foreach($data as $key=>$value)
                    <div class="mx-3 col-lg-3 d-flex flex-column justify-content-center align-items-center my-5">
                        <img src="{{ $value['img_path'] }}" alt="" class="img-fluid max-size">
                        <h4>{{ $value['name'] }}</h4>
                        <span>Издатель: {{ $value['categoryName'] }}</span>
                        <span>Цена: {{ $value['price'] }} рублей</span>
                        <span>Дата добавления: {{ $value['created_at'] }}</span>
                        <span>Количество: {{ $value['quantity'] }}</span>
                        <span><a href="/catalog/{{ $value['id'] }}">Подробнее</a></span>
                        @auth
                            <span><a href="/catalog?basket_id={{ $value['id'] }}">В корзину</a></span>
                        @else
                            <span>Авторизуйтесь чтобы добавить в корзину</span>
                        @endauth
                    </div>
                @endforeach
                </div>
                </form>
    </section>
@endsection
