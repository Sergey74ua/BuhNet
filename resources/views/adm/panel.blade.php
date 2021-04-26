@extends('layouts.adm')

@section('content')

<div style="border: 1px solid black;">
    Панель управления админки.

    <section class="mb-2">
        <ul class="navbar-nav mr-auto">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Buh.net.ru') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </ul>
    </section>

    <section class="mb-2">
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </section>

    <section class="mb-2">
        <form class="d-flex"> <!-- КРИВАЯ ФОРМЫ ПОИСКА -->
            <input class="form-control me-2" type="text" placeholder="поиск ..." aria-label="поиск ...">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
    </section>

    <section class="mb-2">
        <!-- Authorization block -->
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Личный кабинет</a>
                @else
                    <a href="{{ route('login') }}">Авторизация</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Регистрация</a>
                    @endif
                @endauth
            @endif
        </div>
    </section>

    <section class="mb-2">
        <h3>Компании / пользователи</h3>
        @foreach ($data as $element)
            <p>{{ $element }}</p>
        @endforeach
    </section>
</div>

@endsection
