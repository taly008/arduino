@extends('layouts.app')

@section('title')
    Страница контактов
@endsection

@section('content')
    <h1>Страница контактов</h1>

    <form action="/contact/submit" method="post" >
        <div class="form-group"
            <label for="name">Введите имя</label>
            <input type="text" name="name" blaceholder="Введите имя" id="name" class="form-contr">
        </div>
        <div class="form-group"
        <label for="name">Введите имя</label>
        <input type="text" name="name" blaceholder="Введите имя" id="name" class="form-contr">
        </div>
    </form>

@endsection
