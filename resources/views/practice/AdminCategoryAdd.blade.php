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
                <input type="submit" value="Добавить" class="mt-2">
            </form>
        </div>
    </div>

@endsection
