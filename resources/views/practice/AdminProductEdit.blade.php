@extends('layouts.app')
@section('content')
@parent
    <div class="container d-flex align-items-center justify-content-center">
        <form method="post" class="d-flex flex-column col-lg-4">
                @csrf
                <input type="text" name="id_product" value="{{ $data_products[0]['id'] }}" hidden required>
                <span class="ms-3">Название</span>
                <input type="text" name="name_product" value="{{ $data_products[0]['name'] }}" required>
                <span class="ms-3">Путь к картинке</span>
                <input type="text" name="img_path_product" value="{{ $data_products[0]['img_path'] }}" required>
                <span class="ms-3">Антагонист</span>
                <input type="text" name="antagonists_product" value="{{ $data_products[0]['antagonists'] }}" required>
                <span class="ms-3">Id категория</span>
                <input type="text" name="id_category_product" value="{{ $data_products[0]['id_category'] }}" required>
                <span class="ms-3">Дата</span>
                <input type="text" name="updated_at_product" value="{{ $data_products[0]['updated_at'] }}" required>
                <span class="ms-3">Цена</span>
                <input type="text" name="price_product" value="{{ $data_products[0]['price'] }}" required>
                <span class="ms-3">Количество</span>
                <input type="text" name="quantity_product" value="{{ $data_products[0]['quantity'] }}" required>
                <input type="submit" value="Изменить" class="mt-2">
            </form>
@endsection
