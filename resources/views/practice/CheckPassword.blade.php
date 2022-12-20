@extends('layouts.app')

@section('menu')
@parent
@endsection


@section('content')
@parent
<div class="container d-flex justify-content-center flex-column align-items-center my-5">
    <form method="post" class="d-flex flex-column">
        @csrf
        <span class="my-2">Введите пароль</span>
        <input type="password" class="my-2" name="password">
        <input type="submit" class="my-2" value="Подтвердить">
    </form>
</div>
@endsection
