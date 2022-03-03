@extends('layouts.app')

@section('title')
    Настройки
@endsection

@section('content')
    <div class="container">
        <br>
        <div class="setting">
            <div class="setting-heder"> Настройки</div>
            <form action = "{{route('saveSetting')}}" method="post" >
                @csrf
                <div class="input-group mb-3">
                    <p class="radio">
                        Отопление в теплице <br>
                        <input type="radio" name="set_mode" {{$data->set_mode == "P"?'checked':''}} value="P" >&nbsp;Включено<br>
                        <input type="radio" name="set_mode" {{$data->set_mode == "Z"?'checked':''}} value="Z" >&nbsp;Зимний вариант<br>
                        <input type="radio" name="set_mode" {{$data->set_mode == "O"?'checked':''}} value="O" >&nbsp;Отключено<br>
                    </p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Расчетная темрература в теплице</span>
                        <input type="float" name="set_teplica" value="{{$data->set_teplica}}" placeholder="{{$data->set_teplica}}" id="set1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Температура включения вентиляции в теплице </span>
                        <input type="float" name="set_fan" value="{{$data->set_fan}}" placeholder="{{$data->set_fan}}" id="set1">
                    </div>
                    <div class="input-goup-append">
                        <button type="submit" class="btn btn-cucces">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </form>

@endsection
