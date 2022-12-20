@extends('layouts.app')
@section('content')
@parent
    <div class="container d-flex align-items-center justify-content-center">
        <form method="post" class="d-flex flex-column col-lg-4">
                @csrf
                <input type="text" name="id_category" value="{{ $data_categories[0]['id'] }}" hidden required>
                <span class="ms-3">Название</span>
                <input type="text" name="name_category" value="{{ $data_categories[0]['name'] }}" required>
                <input type="submit" value="Изменить" class="mt-2">
            </form>
@endsection
