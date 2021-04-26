@extends('layouts.app')

@section('content')

    @include('blocks.hero')

    @include('blocks.cabinet')

    @include('blocks.blog')

    @include('blocks.tariff')

    @include('blocks.catalog')

    @include('blocks.reviews')

    @include('blocks.help')

@endsection

@section('inc.sb-left') <!-- перестало работать -->

    @parent
    <p>ТЕСТ PARENT</p>
    <img src="img/favicon.png" alt="buh.net.ru">

@endsection
