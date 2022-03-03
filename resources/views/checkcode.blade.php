@extends('layouts.app')

@section('title')
    Проверка кода
@endsection

@section('content')
    <div class="container">
        <br>
        <div class="check-code">
            <h1>Проверка кода</h1>
            <form action="{{route('check')}}" method="post" >
            <div class="input-group mb-3">

    {{--            <input type="file" onchange="console.log(this.value)">--}}
    {{--                {{$NamFile}}--}}
    {{--            <label for="name">Введите код</label>--}}
                <input type="file" name="nameFile" placeholder="Выберите файл" id="nameFle" >
{{--                {{$nf}}--}}
                <div class="input-goup-append">
                     <button type="submit" class="btn btn-cucces">Send</button>
                 </div>
    {{--       {{ search_line('robot.txt','Disallow:1')}}--}}
            </div>
            </form>
        </div>
    </div>
    </form>

@endsection
