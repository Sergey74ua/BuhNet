@extends('layouts.cab')

@section('content')

<form action="{{ route('operation_post') }}" method="post">
    @csrf
    <fieldset class="card border-primary">

        <!-- card-header -->
        <div class="card-header bg-primary text-white">Новая операция</div>

        <!-- card-body -->
        <div class="card-body">
            <!-- 01 -->
            <div class="form-group form-inline">
                <!-- type_id -->
                <div class="input-group col-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="type_id">Операция:</label>
                    </div>
                    <select class="custom-select" name="type_id" id="type_id">
                        <option value="1" selected>Поступление денег на счет</option>
                        <option value="2">Торговая выручка</option>
                        <option value="3">Приход товаров</option>
                        <option value="4">Отгрузка товаров</option>
                        <option value="5">Перечисление налога</option>
                        <option value="6">... другое</option>
                    </select>
                </div>
                <!-- partner_id -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">Партнер:</span></div>
                    <input class="form-control" type="text" name="partner_id" placeholder="ООО 'Поставка'">
                </div>
                <!-- sum -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">Сумма:</span></div>
                    <input class="form-control" type="number" name="sum" placeholder="0.00">
                </div>
                <!-- date -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">Учтено:</span></div>
                    <input class="form-control" type="date" name="date">
                </div>
                <!-- target -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">Назначение:</span></div>
                    <input class="form-control" type="text" name="target" placeholder="доход">
                </div>
            </div>

            <!-- 02 -->
            <div class="form-group form-inline">
                <!-- document -->
                <div class="input-group col-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="document">Документ:</label>
                    </div>
                    <select class="custom-select" name="document" id="document">
                        <option value="1" selected>Банковская выписка</option>
                        <option value="2">Отчет по кассе</option>
                        <option value="3">Приходная накладная</option>
                        <option value="4">Расходная накладная</option>
                        <option value="5">Платежное поручение</option>
                        <option value="6">... другое</option>
                    </select>
                </div>
                <!-- number -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">Номер:</span></div>
                    <input class="form-control" type="text" name="number" placeholder="1234/5">
                </div>
                <!-- dating -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">Дата:</span></div>
                    <input class="form-control" type="date" name="dating">
                </div>
                <!-- purpose -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">Основание:</span></div>
                    <input class="form-control" type="text" name="purpose" placeholder="Оплата за отгруженный товар">
                </div>
                <!-- verification -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">Подтверждение:</span></div>
                    <input class="form-control" type="text" name="verification" placeholder="сверено">
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
