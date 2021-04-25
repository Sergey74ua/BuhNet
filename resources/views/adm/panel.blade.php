@extends('layouts.adm')

@section('content')

<div style="border: 1px solid black;">
    Панель управления админки.
    <section class="mb-2">
        <p>Компании / пользователи</p>
        @foreach($data as $element)
            <p>{{ $element }}</p>
        @endforeach
    </section>
</div>

@endsection
