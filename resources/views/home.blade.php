@extends('layouts.app')

@section('content')
    <!--<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">-->
                    @if (session('status'))
                        {{ __('Вы вошли в систему') }}
                       <!-- <div class="alert alert-success" role="alert">

                        </div> -->
                        {{ session('status') }}
                    @endif


    <!--          </div>
            </div>
        </div>
    </div>
</div>-->

@endsection
