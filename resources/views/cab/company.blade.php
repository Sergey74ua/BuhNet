@extends('layouts.cab')

@section('content')

<form action="{{ route('company_post') }}" method="post">
    @csrf
    <fieldset class="card border-primary">

        <!-- card-header -->
        <div class="card-header bg-primary text-white">Новая компания</div>

        <!-- card-body -->
        <div class="card-body">

            <!-- 01 -->
            <div class="form-group form-inline">
                <div  class="col-9">
                    <!-- name (index) -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Наименование предприятия</span>
                        </div>
                        <input class="form-control" type="text" name="name" placeholder="ПАО «НК «Роснефть»" autofocus>
                    </div>
                    <!-- fullname -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Полное наименование<br>предприятия</span>
                        </div>
                        <textarea class="form-control" type="text" name="fullname" rows="2" placeholder="Публичное акционерное общество «Нефтяная компания «Роснефть»"></textarea>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-3">
                    <label for="logo">Логотип</label>
                    <img class="img-thumbnail" alt="Логотип компании" src="img/favicon.png"/>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">Загрузить</button>
                        </div>
                        <div class="custom-file">
                            <input class="custom-file-input" type="file" name="logo" accept="image/*" alt="logotype" id="logo">
                            <label class="custom-file-label" for="logo">logotype.png</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 02 -->
            <div class="form-group form-inline mb-3">
                <!-- INN - 12 (index) -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ИНН:</span></div>
                    <input class="form-control" type="text" name="inn" maxlength="12" pattern="[0-9]{10, 12}" placeholder="123 456 789 000" required>
                </div>
                <!-- KPP - 9 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">КПП:</span></div>
                    <input class="form-control" type="text" name="kpp" maxlength="9" pattern="[0-9]{9}" placeholder="12 34 56 789">
                </div>
                <!-- OGRN - 15 -->
                <div class="input-group col-4">
                    <div class="input-group-prepend"><span class="input-group-text">ОГРН:</span></div>
                    <input class="form-control" type="text" name="ogrn" maxlength="15" pattern="[0-9]{13, 15}" placeholder="1 23 45 1234567 89 0">
                </div>
                <!-- OKFS - 2 -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">ОКФС:</span></div>
                    <input class="form-control" type="text" name="okfs" maxlength="2" pattern="[0-9]{2}" placeholder="12">
                </div>
            </div>

            <!-- 03 -->
            <div class="form-group form-inline">
                <!-- taxation - 4 -> ОСН -->
                <div class="input-group col-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="taxation">Налоги:</label>
                    </div>
                    <select class="custom-select" name="taxation" id="taxation">
                        <option value="ОСН" selected>ОСН</option>
                        <option value="НПД">НПД</option>
                        <option value="УСНД">УСНД</option>
                        <option value="УСНП">УСНП</option>
                        <option value="ЕСХН">ЕСХН</option>
                        <option value="иное">иное</option>
                    </select>
                </div>
                <!-- IFNS - 4 -->
                <div class="input-group col-2">
                    <div class="input-group-prepend"><span class="input-group-text">ИФНС:</span></div>
                    <input class="form-control" type="text" name="ifns" maxlength="4" pattern="[0-9]{4}" placeholder="12 34">
                </div>
                <!-- OKVED - 6 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКВЕД:</span></div>
                    <input class="form-control" type="text" name="okved" maxlength="6" pattern="[0-9]{6}" placeholder="12 34 56">
                </div>
                <!-- email -->
                <div class="input-group col-5">
                    <div class="input-group-prepend"><span class="input-group-text">email:</span></div>
                    <input class="form-control" type="email" name="email" placeholder="example@gmail.com">
                </div>
            </div>
            
            <!-- 04 -->
            <div class="form-group form-inline">
                <!-- address -->
                <div class="input-group col-8">
                    <div class="input-group-prepend"><span class="input-group-text">Адрес:</span></div>
                    <input class="form-control" type="text" name="address" placeholder="296500; Крым, г. Саки, ул. Уличная, 11/22">
                </div>
                <!-- phone - 15 -->
                <div class="input-group col-4">
                    <div class="input-group-prepend"><span class="input-group-text">Телефон:</span></div>
                    <input class="form-control" type="tel" name="phone" maxlength="15" placeholder="7 978 111 22 33">
                </div>
            </div>

            <!-- 05 -->
            <div class="form-group form-inline">
                <!-- account - 20 -->
                <div class="input-group col-5">
                    <div class="input-group-prepend"><span class="input-group-text">Рассчетный счет:</span></div>
                    <input class="form-control" type="text" name="account" maxlength="20" pattern="[0-9]{20}" placeholder="1234 5678 1234 5678">
                </div>
                <!-- bank - 9 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">БИК:</span></div>
                    <input class="form-control" type="text" name="bik" maxlength="9" pattern="[0-9]{9}" placeholder="123 456 789">
                </div>
                <!-- *** bank name *** -->
                <div class="input-group col-4">
                    <div class="input-group-prepend"><span class="input-group-text">Банк:</span></div>
                    <input class="form-control" type="text" name="bank" placeholder="ОАО РНКБ" disabled>
                </div>
            </div>

            <!-- 06 -->
            <div class="form-group form-inline">
                <!-- founder -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">Форма:</span></div>
                    <input class="form-control" type="text" name="founder" placeholder="ПАО КП">
                </div>
                <!-- OKOGU - 7 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКОГУ:</span></div>
                    <input class="form-control" type="text" name="okogu" maxlength="7" pattern="[0-9]{7}" placeholder="123 4567">
                </div>
                <!-- OKTMO - 11 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКТМО:</span></div>
                    <input class="form-control" type="text" name="oktmo" maxlength="11" pattern="[0-9]{11}" placeholder="00 123 456 789">
                </div>
                <!-- OKATO - 11 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКАТО:</span></div>
                    <input class="form-control" type="text" name="okato" maxlength="11" pattern="[0-9]{11}" placeholder="00 123 456 789">
                </div>
            </div>

            <!-- 07 -->
            <div class="form-group form-inline">
                <!-- OKPO - 10 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКПО:</span></div>
                    <input class="form-control" type="text" name="okpo" maxlength="10" pattern="[0-9]{10}" placeholder="123 456 7890">
                </div>
                <!-- OKOPF - 5 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ОКОПФ:</span></div>
                    <input class="form-control" type="text" name="okopf" maxlength="5" pattern="[0-9]{5}" placeholder="1 23 45">
                </div>
                <!-- PFR - 12 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ПФР:</span></div>
                    <input class="form-control" type="text" name="pfr" maxlength="12" pattern="[0-9]{12}" placeholder="123 456 789 000">
                </div>
                <!-- FSS - 10 -->
                <div class="input-group col-3">
                    <div class="input-group-prepend"><span class="input-group-text">ФСС:</span></div>
                    <input class="form-control" type="text" name="fss" maxlength="10" pattern="[0-9]{10}" placeholder="123 456 7890">
                </div>
            </div>

            <!-- 08 -->
            <div class="form-group form-inline">
                <!-- registrar -->
                <div class="input-group col-7">
                    <div class="input-group-prepend"><span class="input-group-text">Госрегистрация:</span></div>
                    <input class="form-control" type="text" name="registrar" placeholder="Государственная администрация г. Саки">
                </div>
                <!-- opening -->
                <div class="input-group col-5">
                    <div class="input-group-prepend"><span class="input-group-text">Дата регистрации:</span></div>
                    <input class="form-control" type="date" name="opening" placeholder="01.01.2021">
                </div>
            </div>

            <!-- 09 -->
            <div class="form-group form-inline">
                <!-- rank -> Руководитель -->
                <div class="input-group col-4">
                    <div class="input-group-prepend"><span class="input-group-text">Должность руководителя:</span></div>
                    <input class="form-control" type="text" name="rank" value="Директор">
                </div>
                <!-- director -->
                <div class="input-group col-4">
                    <div class="input-group-prepend"><span class="input-group-text">Фамилия Имя Отчество:</span></div>
                    <input class="form-control" type="text" name="director" placeholder="Иванов Иван Иванович">
                </div>
                <!-- certificate -->
                <div class="input-group col-4">
                    <div class="input-group-prepend"><span class="input-group-text">Основание:</span></div>
                    <input class="form-control" type="text" name="certificate" placeholder="Доверенность № 123 от 01.01.2021 г.">
                </div>
            </div>

            <!-- 10 -->
            <div class="form-group form-inline">
                <!-- description -->
                <div class="input-group col-8">
                    <div class="input-group-prepend"><span class="input-group-text">Деятельность предприятия:</span></div>
                    <textarea class="form-control" type="text" rows="3" name="description" placeholder="Добыча и переработка нефтепродуктов."></textarea>
                </div>
                <!-- photo -->
                <div class="col-4">
                    <label for="logo">Фото</label>
                    <img class="img-thumbnail" alt="Фотография компании" src="img/favicon.png"/>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">Загрузить</button>
                        </div>
                        <div class="custom-file">
                            <input class="custom-file-input" type="file" name="photo" accept="image/*" alt="photo" id="photo">
                            <label class="custom-file-label" for="photo">logotype.jpg</label>
                        </div>
                    </div>
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

@endsection
