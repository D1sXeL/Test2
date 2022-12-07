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
                        @if($sort=="name")
                        <select name="sorted" onchange="this.form.submit()">
                            <option value="date">По дате</option>
                            <option value="name" selected>По наименованию</option>
                            <option value="publisher">По категории</option>
                            <option value="price">По цене</option>
                        </select>
                        @elseif($sort=="price")
                        <select name="sorted" onchange="this.form.submit()">
                            <option value="date">По дате</option>
                            <option value="name">По наименованию</option>
                            <option value="publisher">По категории</option>
                            <option value="price" selected>По цене</option>
                        </select>
                        @elseif($sort=="publisher")
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
                        </select>
                        @endif
                    @else
                        <select name="sorted" onchange="this.form.submit()">
                            <option value="date" selected>По дате</option>
                            <option value="name">По наименованию</option>
                            <option value="publisher">По категории</option>
                            <option value="price">По цене</option>
                        </select>
                    @endif
                    @if(isset($optionSorted))
                        @if($optionSorted=="asc")
                        <select name="optionSorted" onchange="this.form.submit()">
                            <option value="desc">По возрастанию</option>
                            <option value="asc" selected>По убыванию</option>
                        </select>
                        @else
                        <select name="optionSorted" onchange="this.form.submit()">
                            <option value="desc" selected>По возрастанию</option>
                            <option value="asc">По убыванию</option>
                        </select>
                        @endif
                    @else
                    <select name="optionSorted" onchange="this.form.submit()">
                        <option value="desc" selected>По возрастанию</option>
                        <option value="asc">По убыванию</option>
                    </select>
                    @endif
                </form>
                </div>
                
                <div class="d-flex flex-wrap">
                @foreach($data as $key=>$value)
                    <div class="mx-3 col-lg-2 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ $value['img_path'] }}" alt="" class="img-fluid max-size">
                        <h4>{{ $value['name'] }}</h4>
                        <span>Издатель: {{$value['publisher']}}</span>
                        <span>Цена: {{ $value['price'] }} рублей</span>
                        <span>Дата добавления: {{ $value['created_at'] }}</span>
                        <span>Количество: {{ $value['quantity'] }}</span>
                        <span><a href="/catalog/{{ $value['id'] }}">Подробнее</a></span>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    
    </section>
@endsection
