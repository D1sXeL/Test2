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
<<<<<<< HEAD
                                <option value="date">По дате</option>
                                <option value="name" selected>По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price">По цене</option>
                            </select>
                            @elseif($sort=="products.price")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price" selected>По цене</option>
                            </select>
                            @elseif($sort=="categories.name")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher" selected>По категории</option>
                                <option value="price">По цене</option>
                            </select>
                            @else
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date" selected>По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price">По цене</option>
=======
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
>>>>>>> 048d722 (added README.md)
                            </select>
                            @endif
                        @else
                            <select name="sorted" onchange="this.form.submit()">
<<<<<<< HEAD
                                <option value="date" selected>По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price">По цене</option>
=======
                                <option value="date" selected>Дате</option>
                                <option value="name">Наименованию</option>
                                <option value="publisher">Категории</option>
                                <option value="price">Цене</option>
>>>>>>> 048d722 (added README.md)
                            </select>
                        @endif
                        @if(isset($optionSorted))
                            @if($optionSorted=="asc")
                            <select name="optionSorted" onchange="this.form.submit()">
<<<<<<< HEAD
                                <option value="desc">По возрастанию</option>
                                <option value="asc" selected>По убыванию</option>
                            </select>
                            @else
                            <select name="optionSorted" onchange="this.form.submit()">
                                <option value="desc" selected>По возрастанию</option>
                                <option value="asc">По убыванию</option>
=======
                                <option value="asc" selected>По возрастанию</option>
                                <option value="desc">По убыванию</option>
                            </select>
                            @else
                            <select name="optionSorted" onchange="this.form.submit()">
                                <option value="asc">По возрастанию</option>
                                <option value="desc" selected>По убыванию</option>
>>>>>>> 048d722 (added README.md)
                            </select>
                            @endif
                        @else
                        <select name="optionSorted" onchange="this.form.submit()">
<<<<<<< HEAD
                            <option value="desc" selected>По возрастанию</option>
                            <option value="asc">По убыванию</option>
=======
                            <option value="asc" selected>По возрастанию</option>
                            <option value="desc">По убыванию</option>
>>>>>>> 048d722 (added README.md)
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

<<<<<<< HEAD
                <div class="d-flex flex-wrap">
=======
                <div class="d-flex flex-wrap justify-content-center">
>>>>>>> 048d722 (added README.md)
                @foreach($data as $key=>$value)
                    <div class="mx-3 col-lg-3 d-flex flex-column justify-content-center align-items-center my-5">
                        <img src="{{ $value['img_path'] }}" alt="" class="img-fluid max-size">
                        <h4>{{ $value['name'] }}</h4>
                        <span>Издатель: {{ $value['categoryName'] }}</span>
                        <span>Цена: {{ $value['price'] }} рублей</span>
<<<<<<< HEAD
                        <span>Дата добавления: {{ $value['updated_at'] }}</span>
=======
                        <span>Дата добавления: {{ $value['created_at'] }}</span>
>>>>>>> 048d722 (added README.md)
                        <span>Количество: {{ $value['quantity'] }}</span>
                        <span><a href="/catalog/{{ $value['id'] }}">Подробнее</a></span>
                        @auth
                            <span><a href="/catalog?basket_id={{ $value['id'] }}">В корзину</a></span>
<<<<<<< HEAD
=======
                        @else
                            <span>Авторизуйтесь чтобы добавить в корзину</span>
>>>>>>> 048d722 (added README.md)
                        @endauth
                    </div>
                @endforeach
                </div>
                </form>
    </section>
@endsection
