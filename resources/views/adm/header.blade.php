@section('header')

<header class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <!-- Hamburger menu -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Project logo -->
    <a class="navbar-brand" href="/">BuhNet</a>
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="cabinet">Кабинет</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Пользователи</a>
            </li>
        </ul>
    </div>
    <!-- Theme color switcher -->
    <div class="btn-group btn-group-sm btn-group-toggle ml-auto shadow" data-toggle="buttons" aria-label="Цветовая тема">
        <label class="btn btn-secondary">
            <input type="radio" name="options" id="option_light" autocomplete="off">свет
        </label>
        <label class="btn btn-secondary active">
            <input type="radio" name="options" id="option_dark" autocomplete="off" checked>тьма
        </label>
    </div>
    <div>
        <ul class="navbar-nav">
            <!-- Authorization -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Логин') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile">Профиль</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Выход') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    <!-- Profile - mb_substr((Auth::user()->name), 0, 1) - вызывает ошибку при отсутствии авторизации -->
    <h2><span class="badge badge-secondary shadow">N</span></h2>
</header>
