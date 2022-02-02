@extends('layouts.app')

@section('title')
    Температура
@endsection

@push('scripts')
    <script src="/js/main.js"></script>
@endpush

@section('content')
    <h1>Домашняя страница</h1>
    @include('components.temper_table')
@endsection
