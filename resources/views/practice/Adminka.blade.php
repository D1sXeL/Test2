@extends('layouts.app')
@section('content')
@parent

<div class="container">
    <div class="d-flex justify-content-around">
        <form action="admin/product/add">
            <input type="submit" value="Добавить товар">
        </form>
        <form action="admin/category/add">
            <input type="submit" value="Добавить категорию">
        </form>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-center my-5">
        <div>
            <h2>Продукты</h2>
        </div>
        <table>
            <tr class="text-center">
                <th class="px-4">Id</th>
                <th class="px-5">Дата</th>
                <th class="px-5">Картинка</th>
                <th class="px-4">Название</th>
                <th class="px-4">Категория</th>
                <th class="px-4">Антагонист</th>
                <th class="px-4">Цена</th>
                <th class="px-4">Количество</th>
                <th class="px-4">Удалить</th>
                <th class="px-4">Редактировать</th>
            </tr>
            @foreach($data_products as $key=>$value)
                <tr>
                    <td class="text-center">{{ $value['id'] }}</td>
                    <td class="text-center">{{ $value['updated_at'] }}</td>
                    <td class="text-center"><img src="{{ $value['img_path'] }}" style="max-height: 200px"></td>
                    <td class="text-center">{{ $value['name'] }}</td>
                    <td class="text-center">{{ $value['id_category'] }}</td>
                    <td class="text-center">{{ $value['antagonists'] }}</td>
                    <td class="text-center">{{ $value['price'] }}</td>
                    <td class="text-center">{{ $value['quantity'] }}</td>
                    <td class="text-center"><a href="?id_delete_product={{ $value['id'] }}">тык</a></td>
                    <td class="text-center"><a href="?id_edit_product={{ $value['id'] }}">тык</a></td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center my-5">
        <div>
            <h2>Категории</h2>
        </div>
        <table>
            <tr class="text-center">
                <th class="px-4">Id</th>
                <th class="px-5">Название</th>
                <th class="px-4">Удалить</th>
                <th class="px-4">Редактировать</th>
            </tr>
            @foreach($data_categories as $key=>$value)
                <tr>
                    <td class="text-center">{{ $value['id'] }}</td>
                    <td class="text-center">{{ $value['name'] }}</td>
                    <td class="text-center"><a href="?id_delete_category={{ $value['id'] }}">тык</a></td>
                    <td class="text-center"><a href="?id_edit_category={{ $value['id'] }}">тык</a></td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center my-5">
        <div>
            <h2>Заказы</h2>
        </div>
        <table>
            <tr>
                <th class="px-2">№</th>
                <th class="px-2">Дата</th>
                <th class="px-2">Id продукта</th>
                <th class="px-2">Количество заказанных товаров</th>
                <th class="px-2">Статус</th>
                <th class="px-2">Подтвердить</th>
                <th class="px-2">Отменить</th>
            </tr>
            <form method="post">
                @csrf
                @foreach($data_orders as $key=>$value)
                    <tr>
                        <td class="text-center">{{ $value['id'] }}</td>
                        <td class="text-center">{{ $value['updated_at'] }}</td>
                        <td class="text-center">{{ $value['id_product'] }}</td>
                        <td class="text-center">{{ $value['quantity'] }}</td>
                        <td class="text-center">{{ $value['status'] }}</td>
                        <td class="text-center">
                            <a href="/confirm/{{ $value['id'] }}">тык</a>
                        <td class="text-center">
                            <a href="/cancel/{{ $value['id'] }}">тык</a>
                        <td class="text-center">
                        </td>
                    </tr>
                @endforeach
            </form>
        </table>
    </div>

</div>  

@endsection
