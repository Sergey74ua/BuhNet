@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Профиль пользователя') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <hr>

                        <!-- Rank -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Должность</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="rank">
                            </div>
                        </div>

                        <!-- Tariff -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Тариф</label>
                            <div class="col-md-6">
                                <select class="custom-select" name="tariff" id="tariff">
                                    <option value="1" selected>Пробный</option>
                                    <option value="2">Эконом</option>
                                    <option value="3">Средний</option>
                                    <option value="4">Высокий</option>
                                    <option value="5">Полный</option>
                                </select>
                            </div>
                        </div>

                        <!-- Avatar -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Аваторка</label>
                            <div class="col-md-6">
                                <img class="img-thumbnail" alt="Аваторка пользователя" src="img/favicon.png"/>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">Загрузить</button>
                                </div>
                                <div class="input-group-prepend custom-file">
                                    <input class="custom-file-input" type="file" name="avatar" accept="image/*" alt="Аваторка" id="avatar">
                                    <label class="custom-file-label" for="avatar">avatar.jpg</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">Сохранить</button>
                                <a class="btn btn-primary" href="/home" role="button">Отмена</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
