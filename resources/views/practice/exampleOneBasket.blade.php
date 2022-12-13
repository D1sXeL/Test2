@extends('layouts.app')
@section('content')
@parent


    <div class="container">
        <div>
            @foreach($data as $key=>$value)
                @foreach($data_basket as $key2=>$value2)
                    @if($value['id'] == $key2)
                        <div class="d-flex justify-content-around py-4 align-items-center w-75">
                            <img src="{{ $value['img_path'] }}" alt="{{ $value['name'] }}" class="basket-img-size">
                            <span>{{ $value['name'] }}</span>
                            <span>{{ $value['price'] }}</span>
                            <span>{{ $value2 }}</span>
                            <form method="post">
                                @csrf
                                <input type="text" name="delId" value="{{ $value['id'] }}" hidden>
                                <input type="submit" name="delProduct" value="Удалить">
                            </form>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>

@endsection
