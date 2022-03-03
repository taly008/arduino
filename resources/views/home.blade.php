@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{'Сегодня '. strftime('%A, %e %B %Y')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        {{ __('Вы вошли в систему') }}
                     <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                        </div>

                    @endif
                       <div class="myflex">
                        @include('components.home_items')
                       </div>
                </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="contaier">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header"> По Gismeteo</div>--}}
{{--                <div class="card-body">--}}
{{--                    <div id="gisDataWrapper"></div>--}}
{{--                    <script src="/js/gisWeather.js"></script>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

    @endsection
