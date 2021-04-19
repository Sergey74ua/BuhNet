@extends('layouts.cabinet')

@section('content')

<form action="{{ route('forms') }}" method="post"> <!-- ??? role="form" -->
    @csrf
    <fieldset class="card border-primary">

        <!-- card-header -->
        <div class="card-header bg-primary text-white">Новая компания</div>

        <!-- card-body -->
        <div class="card-body">

            <!-- 1 -->
            <div class="form-group form-inline">
                <div  class="col-9">
                    <div class="form-inline">
                        <!-- name (index) -->
                        <label for="name" class="col-3">Наименование предприятия</label>
                        <input class="form-control col-9" type="text" name="name" placeholder="ПАО «НК «Роснефть»" id="name">
                    </div>
                    <div class="form-inline">
                        <!-- fullname -->
                        <label for="fullname" class="col-3">Полное наименование предприятия</label>
                        <textarea class="form-control col-9" type="text" name="fullname" rows="2" placeholder="Публичное акционерное общество «Нефтяная компания «Роснефть»" id="fullname"></textarea>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-3">
                    <label for="logo">Эмблема</label>
                    <img class="img-thumbnail" alt="Логотип компании" src="img/favicon.png" />
                    <input class="form-control-file" type="file" name="logo" placeholder="...эмблема" id="logo">
                    <p class="help-block">Выберите файл логотипа компании.</p>
                </div>
            </div>

            <!-- 2 -->
            <div class="form-group form-inline">
                <!-- INN - 12 (index) -->
                <label for="INN" class="col-1">ИНН:</label>
                <input class="form-control col-2" type="text" name="INN" placeholder="000 111 222 333" id="INN">
                <!-- KPP - 9 -->
                <label for="KPP" class="col-1">КПП:</label>
                <input class="form-control col-2" type="text" name="KPP" placeholder="000 111 222" id="KPP">
                <!-- OGRN - 15 -->
                <label for="OGRN" class="col-1">ОГРН:</label>
                <input class="form-control col-3" type="text" name="OGRN" placeholder="000 111 222 333 444" id="OGRN">
                <!-- OKFS - 2 -->
                <label for="OKFS" class="col-1">ОКФС:</label>
                <input class="form-control col-1" type="text" name="OKFS" placeholder="00" id="OKFS">
            </div>

            <!-- 3 -->
            <div class="form-group form-inline">
                <!-- taxation - 4 -> ОСН -->
                <label for="taxation" class="col-1">Налоги:</label>
                <select  class="form-control col-1" type="text" name="taxation" id="taxation">
                    <option value="1" selected>ОСН</option>
                    <option value="2">УСНД</option>
                    <option value="3">УСНП</option>
                    <option value="4">ЕСХН</option>
                </select>
                <!-- IFNS - 4 -->
                <label for="IFNS" class="col-1">ИФНС:</label>
                <input class="form-control col-1" type="text" name="IFNS" placeholder="00 11" id="IFNS">
                <!-- OKVED - 6 -->
                <label for="OKVED" class="col-1">ОКВЕД:</label>
                <input class="form-control col-2" type="text" name="OKVED" placeholder="00 11 22" id="OKVED">
                <!-- email -->
                <label for="email" class="col-1">email:</label>
                <input class="form-control col-4" type="email" name="email" placeholder="example@gmail.com" id="email">
            </div>
            
            <!-- 4 -->
            <div class="form-group form-inline">
                <!-- address -->
                <label for="address" class="col-1">Адрес:</label>
                <input class="form-control col-7" type="text" name="address" placeholder="296500; Крым, г. Саки, ул. Уличная, 11/22" id="address">
                <!-- phone - 15 -->
                <label for="phone" class="col-1">Телефон:</label>
                <input class="form-control col-3" type="text" name="phone" placeholder="0 111 222 33 44 55" id="phone">
            </div>

            <!-- 5 -->
            <div class="form-group form-inline">
                <!-- account - 20 -->
                <label for="account" class="col-2">Рассчетный счет:</label>
                <input class="form-control col-3" type="text" name="account" placeholder="0000 1111 2222 3333 4444" id="account">
                <!-- bank - 9 -->
                <label for="bank" class="col-1">БИК:</label>
                <input class="form-control col-2" type="text" name="bank" placeholder="000 111 222" id="bank">
                <!-- *bank name* -->
                <label for="bankname" class="col-1">Банк:</label>
                <input class="form-control col-3" type="text" name="bankname" placeholder='"ОАО "РНКБ"' id="bankname">
            </div>

            <!-- 6 -->
            <div class="form-group form-inline">
                <!-- founder -->
                <label for="founder" class="col-1">Форма:</label>
                <input class="form-control col-2" type="text" name="founder" placeholder="ПАО КП" id="founder">
                <!-- OKOGU - 7 -->
                <label for="OKOGU" class="col-1">ОКОГУ:</label>
                <input class="form-control col-2" type="text" name="OKOGU" placeholder="000 1111" id="OKOGU">
                <!-- OKTMO - 11 -->
                <label for="OKTMO" class="col-1">ОКТМО:</label>
                <input class="form-control col-2" type="text" name="OKTMO" placeholder="00 111 222" id="OKTMO">
                <!-- OKATO - 11 -->
                <label for="OKATO" class="col-1">ОКАТО:</label>
                <input class="form-control col-2" type="text" name="OKATO" placeholder="00 111 222" id="OKATO">
            </div>

            <!-- 7 -->
            <div class="form-group form-inline">
                <!-- OKPO - 10 -->
                <label for="OKPO" class="col-1">ОКПО:</label>
                <input class="form-control col-2" type="text" name="OKPO" placeholder="000 111 2222" id="OKPO">
                <!-- OKOPF - 5 -->
                <label for="OKOPF" class="col-1">ОКОПФ:</label>
                <input class="form-control col-2" type="text" name="OKOPF" placeholder="0 11 22" id="OKOPF">
                <!-- PFR - 12 -->
                <label for="PFR" class="col-1">ПФР:</label>
                <input class="form-control col-2" type="text" name="PFR" placeholder="000 111 222 333" id="PFR">
                <!-- FSS - 10 -->
                <label for="FSS" class="col-1">ФСС:</label>
                <input class="form-control col-2" type="text" name="FSS" placeholder="000 111 2222" id="FSS">
            </div>

            <!-- 8 -->
            <div class="form-group form-inline">
                <!-- registrar -->
                <label for="registrar" class="col-2">Госрегистрация:</label>
                <input class="form-control col-5" type="text" name="registrar" placeholder="Государственная администрация г. Саки" id="registrar">
                <!-- opening -->
                <label for="opening" class="col-2">Дата регистрации:</label>
                <input class="form-control col-3" type="date" name="opening" placeholder="01 01 2021" id="opening">
            </div>

            <!-- 9 -->
            <div class="form-group form-inline">
                <!-- rank -> Руководитель -->
                <label for="rank" class="col-2">Должность руковолдителя:</label>
                <input class="form-control col-2" type="text" name="rank" value="Директор" id="rank">
                <!-- director -->
                <label for="director" class="col-2">Фамилия Имя Отчество:</label>
                <input class="form-control col-2" type="text" name="director" placeholder="Иванов Иван Иванович" id="director">
                <!-- certificate -->
                <label for="certificate" class="col-1">Основание:</label>
                <input class="form-control col-3" type="text" name="certificate" placeholder="Доверенность № 123 от 01.01.2021 г." id="certificate">
            </div>

            <!-- 10 -->
            <div class="form-group form-inline">
                <!-- description -->
                <label for="description" class="col-2">Деятельность предприятия:</label>
                <textarea class="form-control col-6" type="text" name="description" rows="3" placeholder="Добыча и переработка нефтепродуктов." id="description"></textarea>
                <!-- photo -->
                <div class="col-4">
                    <label for="photo">Фото:</label>
                    <img class="img-thumbnail" alt="Фотография компании" src="img/favicon.png" />
                    <input class="form-control-file" type="file" name="photo" placeholder="..фото" id="photo">
                    <p class="help-block">Выберите файл с фотографией для рекламы.</p>
                </div>
            </div>
        </div>

        <!-- card-footer -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Сохранить</button>
            <a class="btn btn-primary" href="/home" role="button">Отмена</a>
        </div>
        
    </fieldset>
</form>

@endsection
