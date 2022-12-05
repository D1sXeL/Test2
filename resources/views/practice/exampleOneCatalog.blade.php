@extends('layouts.app')
@section('content')
@parent
    <section>
        <div class="container d-flex flex-wrap">
        @foreach($data as $key=>$value)
            <div class="mx-3 col-lg-2 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ $value['img_path'] }}" alt="" class="img-fluid max-size">
                <h4>{{ $value['name'] }}</h4>
                <span>Цена: {{ $value['price'] }} рублей</span>
                <span>Дата добавления: {{ $value['created_at'] }}</span>
                <span>Издатель: {{ $value['publisher'] }}</span>
                <span>Антоганист: {{ $value['antagonists'] }}</span>
                <span>Количество: {{ $value['quantity'] }}</span>
            </div>
        @endforeach
        </div>
    </section>
@endsection
