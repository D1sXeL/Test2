@extends('layouts.app')
@section('content')
@parent

<div class="container">
    

   
            <div>
                <form action="admin/add">
                    <input type="submit" value="Добавить товар">
                </form>
            </div>
        <div class="d-flex justify-content-center">
        <table>
            <tr>
                <td class="px-2">№</td>
                <td class="px-2">Дата</td>
                <td class="px-2">ФИО</td>
                <td class="px-2">Количество заказанных товаров</td>
                <td class="px-2">Статус</td>
                <td class="px-2">Подтвердить</td>
                <td class="px-2">Отменить</td>
            </tr>
            @foreach($data as $key=>$value)
                <tr>
                    <td class="text-center">{{ $value['id'] }}</td>
                    <td class="text-center">{{ $value['date'] }}</td>
                    <td class="text-center">{{ $value['FIO'] }}</td>
                    <td class="text-center">{{ $value['quantity'] }}</td>
                    <td class="text-center">{{ $value['status'] }}</td>
                    <td class="text-center"><a href="?id_confirm={{ $value['id'] }}">Подтвердить</a></td>
                    <td class="text-center"><a href="?id_cancel={{ $value['id'] }}">Отменить</a></td>
                </tr>
            @endforeach
        </table>
        </div>

    </div>

@endsection
