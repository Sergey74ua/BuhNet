@section('block_cabinet')

<div>
    <p>ДЕМОНСТРАЦИЯ КАБИНЕТА - БЛОК ГЛАВНОЙ СТРАНИЦЫ</p>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#mode-one">mode-one</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#mode-two">mode-two</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#mode-three">mode-three</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#mode-four">mode-four</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade show active" id="mode-one">

            @include('cab.mode-one')

        </div>
        <div class="tab-pane fade" id="mode-two">

            @include('cab.mode-two')

        </div>
        <div class="tab-pane fade" id="mode-three">

        КАБИНЕТ ПРИШЛОСЬ УБРАТЬ, т.к. нет доступа к выводу из БД
        <div class="table-dark">
            <table class="table table-sm table-bordered table-striped table-hover table-dark">
                <h4>Счет 51.<small class="text-muted"> - Расчетный счет в национальной валюте.</small></h4>
                <thead>
                    <caption>Отчет сформирован в соответствии данными актуальными на 05.04.2021 г.</caption>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Остаток</th>
                        <th scope="col">Выручка</th>
                        <th scope="col">Прочее</th>
                        <th scope="col">Итого</th>
                        <th scope="col">Банк</th>
                        <th scope="col">Зарплата</th>
                        <th scope="col">Прочее</th>
                        <th scope="col">Итого</th>
                        <th scope="col">Остаток</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">01.04.2021</th>
                        <th scope="col">1'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">2'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">2</th>
                        <th scope="col">02.04.2021</th>
                        <th scope="col">2'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">3'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">3</th>
                        <th scope="col">04.04.2021</th>
                        <th scope="col">3'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">4'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">4</th>
                        <th scope="col">05.04.2021</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">5'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">5</th>
                        <th scope="col">08.04.2021</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">19'000,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">6</th>
                        <th scope="col">15.04.2021</th>
                        <th scope="col">2'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">3'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">7</th>
                        <th scope="col">18.04.2021</th>
                        <th scope="col">3'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">4'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">8</th>
                        <th scope="col">20.04.2021</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">5'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">9</th>
                        <th scope="col">24.04.2021</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">5'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">9'000,00</th>
                        <th scope="col">6'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">10</th>
                        <th scope="col">25.04.2021</th>
                        <th scope="col">6'000,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">10'000,00</th>
                        <th scope="col">11'000,00</th>
                        <th scope="col">4'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">21'000,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">11</th>
                        <th scope="col">26.04.2021</th>
                        <th scope="col">1'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">12</th>
                        <th scope="col">27.04.2021</th>
                        <th scope="col">1'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">13</th>
                        <th scope="col">28.04.2021</th>
                        <th scope="col">1'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">14</th>
                        <th scope="col">29.04.2021</th>
                        <th scope="col">1'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                    <tr>
                        <th scope="col">15</th>
                        <th scope="col">30.04.2021</th>
                        <th scope="col">1'000,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">0,00</th>
                        <th scope="col">1'000,00</th>
                    </tr>
                </tbody>
            </table>
        </div>

        </div>
        <div class="tab-pane fade" id="mode-four">

            @include('cab.mode-four')

        </div>
        <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
        </div>
    </div>
</div>

@show
