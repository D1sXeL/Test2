@extends('layouts.app')
@section('content')
@parent


    <div class="container">
        <div>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Картинка</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Удаление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$value)
                        @foreach($data_basket as $key2=>$value2)
                            @if($value['id'] == $key2)
                            <tr class="text-center">
                                <td><img src="{{ $value['img_path'] }}" alt="{{ $value['name'] }}" style="height: 150px;"></td>
                                <td><span>{{ $value['name'] }}</span></td>
                                <td><span>{{ $value['price'] }}</span></td>
                                <td><span>{{ $value2 }}</span></td>
                                <td>
                                    <form method="post">
                                        @csrf
                                        <input type="text" name="delId" value="{{ $value['id'] }}" hidden>
                                        <input type="submit" name="delProduct" value="Удалить">
                                    </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>

            <form action="/check/" method="post" class="d-flex justify-content-center my-5">
                @csrf
                <input type="submit" name="basketButton" value="Оформить заказ">
            </form>

        </div>
    </div>
@endsection
