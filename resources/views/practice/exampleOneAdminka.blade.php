@extends('layouts.app')
@section('content')
@parent

    @if(!isset($data))
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
    {{ dd($data)}}
    @endif
@endsection
