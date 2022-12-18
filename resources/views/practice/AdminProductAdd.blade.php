@extends('layouts.app')
@section('content')
@parent
    @if(isset($data))
        <p class="d-flex justify-content-center">{{ print_r($data) }}</p>
    @endif
    <div class="container">
        <div class="d-flex justify-content-center">
            <form method="post" class="d-flex flex-column col-lg-4">
                @csrf
                <span class="ms-3">Название</span>
                <input type="text" name="name" required>
                <span class="ms-3">Путь к картинке</span>
                <input type="text" name="img_path" required>
                <span class="ms-3">Антагонист</span>
                <input type="text" name="antagonists" required>
                <span class="ms-3">Id категории</span>
                <input type="text" name="id_category" required>
                <span class="ms-3">Цена</span>
                <input type="text" name="price" required>
                <span class="ms-3">Количество</span>
                <input type="text" name="quantity" required>
                <input type="submit" value="Добавить" class="mt-2">
            </form>
        </div>
    </div>

@endsection
