@extends('layouts.app')
@section('content')
@parent

    <div class="container">
        <div class="d-flex justify-content-center">
            <form method="post" class="d-flex flex-column col-lg-4">
                <span class="ms-3">Название</span>
                <input type="text" name="name">
                <span class="ms-3">Путь к картинке</span>
                <input type="text" name="img_path">
                <span class="ms-3">Антагонист</span>
                <input type="text" name="antagonists">
                <span class="ms-3">Категория</span>
                <input type="text" name="category">
                <span class="ms-3">Цена</span>
                <input type="text" name="price">
                <span class="ms-3">Количество</span>
                <input type="text" name="quantity">
                <input type="submit" value="Добавить" class="mt-2">
            </form>
        </div>
    </div>

@endsection
