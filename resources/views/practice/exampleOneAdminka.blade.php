@extends('layouts.app')
@section('content')
@parent

    @if(!isset($status))

        <div class="container">
            <div class="d-flex justify-content-center">
                <form method="post" class="d-flex flex-column col-lg-4 align-items-start">
                    @csrf
                    <span class="ms-3">Логин</span>
                    <input type="text" name="login" class="w-100 my-2">
                    <span class="ms-3">Пароль</span>
                    <input type="text" name="password" class="w-100 my-2">
                    <div class="w-100 d-flex justify-content-center">
                        <input type="submit" value="Авторизоваться" class="w-50 my-2">
                    </div>
                </form>
            </div>
        </div>
    @else
        @if($status == 'error')
        <div class="container">
                <div class="d-flex justify-content-center">
                    <form method="post" class="d-flex flex-column col-lg-4 align-items-start">
                        @csrf
                        <span class="ms-3">Логин</span>
                        <input type="text" name="login" class="w-100 my-2">
                        <span class="ms-3">Пароль</span>
                        <input type="text" name="password" class="w-100 my-2">
                        <div class="w-100 d-flex justify-content-center">
                            <input type="submit" value="Авторизоваться" class="w-50 my-2">
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="containter">
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
        @endif
    @endif
@endsection
