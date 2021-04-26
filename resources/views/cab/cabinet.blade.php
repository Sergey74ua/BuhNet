@extends('layouts.cab')

@section('content')

<form action="{{ route('company_post') }}" method="post">
    @csrf
    <fieldset class="card border-primary">

        <!-- card-header -->
        <div class="card-header bg-primary text-white">Новая операция</div>

        <!-- card-body -->
        /*************************************************************************************************************************************************************/
        <div>
            <label for="country" class="col-4">Выберите операцию</label>
            <select class="form-control custom-select col-7" id="country">
                <option selected>Приход</option>
                <option>Расход</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="date" class="col-4">Дата операции</label>
            <input type="date" name="date" placeholder="05.04.2021" id="date" class="form-control col-7">
        </div>
        <div class="form-group row">
            <label for="sum" class="col-4">Сумма</label>
            <input type="number" name="sum" placeholder="0.00" id="sum" class="form-control col-7">
        </div>
        /*************************************************************************************************************************************************************/
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Имя и фамилия</span>
            </div>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Имя и фамилия</span>
            </div>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Имя и фамилия</span>
            </div>
        </div>
        <div class="input-group">
        <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
        </div>
        /*************************************************************************************************************************************************************/
        <div class="card-body">
            <div class="form-group form-inline">
                <!-- taxation - 4 -> ОСН -->
                <div class="input-group col-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="taxation">Налоги:</label>
                    </div>
                    <select class="custom-select" name="taxation" id="taxation">
                        <option value="1" selected>ОСН</option>
                        <option value="2">НПД</option>
                        <option value="3">УСНД</option>
                        <option value="4">УСНП</option>
                        <option value="5">ЕСХН</option>
                    </select>
                </div>
                <!-- IFNS - 4 -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">ИФНС:</span></div>
                    <input class="form-control" type="text" name="IFNS" maxlength="4" pattern="[0-9]{4}" placeholder="12 34">
                </div>
                <!-- OKVED - 6 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКВЕД:</span></div>
                    <input class="form-control" type="text" name="OKVED" maxlength="6" pattern="[0-9]{6}" placeholder="12 34 56">
                </div>
                <!-- email -->
                <div class="input-group col-5">
                    <div class="input-group-prepend"><span class="input-group-text">email:</span></div>
                    <input class="form-control" type="email" name="email" placeholder="example@gmail.com">
                </div>
            </div>
        </div>

        <!-- card-footer -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Сохранить</button>
            <a class="btn btn-primary" href="/home" role="button">Отмена</a>
        </div>
        
    </fieldset>

    <!-- Outputting input errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <!-- Outputting input results -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</form>

@include('cab.mode-three')

@endsection
