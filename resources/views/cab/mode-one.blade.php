@section('mode_one')

<div class="table-light table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover table-light">
        <h4>Счет 50.<small class="text-muted"> - Касса в национальной валюте.</small></h4>
        <thead>
            <caption>Отчет сформирован в соответствии данными актуальными на 05.04.2021 г.</caption>
            <tr class="text-center">
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
        <tbody class="text-right">
            <tr>
                <th scope="col">1</th>
                <th scope="col">01.04.2021</th>
                <th scope="col">{{ number_format(1000, 2, ',', ' ') }}</th>
                <th scope="col">10'000,00</th>
                <th scope="col">0,00</th>
                <th scope="col" class="text-danger">10'000,00</th>
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
                <th scope="col">5 000,00</th>
                <th scope="col">10 000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">10 000,00</th>
                <th scope="col">10 000,00</th>
                <th scope="col">4 000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">19 000,00</th>
                <th scope="col">1 000,00</th>
            </tr>
            <tr>
                <th scope="col">6</th>
                <th scope="col">15.04.2021</th>
                <th scope="col">2 000,00</th>
                <th scope="col">10 000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">10 000,00</th>
                <th scope="col">5 000,00</th>
                <th scope="col">4 000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">9 000,00</th>
                <th scope="col">3 000,00</th>
            </tr>
            <tr>
                <th scope="col">7</th>
                <th scope="col">18.04.2021</th>
                <th scope="col">3000,00</th>
                <th scope="col">10000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">10000,00</th>
                <th scope="col">5000,00</th>
                <th scope="col">4000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">9000,00</th>
                <th scope="col">4000,00</th>
            </tr>
            <tr>
                <th scope="col">8</th>
                <th scope="col">20.04.2021</th>
                <th scope="col">4000,00</th>
                <th scope="col">10000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">10000,00</th>
                <th scope="col">5000,00</th>
                <th scope="col">4000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">9000,00</th>
                <th scope="col">5000,00</th>
            </tr>
            <tr>
                <th scope="col">9</th>
                <th scope="col">24.04.2021</th>
                <th scope="col">5000,00</th>
                <th scope="col">10000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">10000,00</th>
                <th scope="col">5000,00</th>
                <th scope="col">4000,00</th>
                <th scope="col">0,00</th>
                <th scope="col">9000,00</th>
                <th scope="col">6000,00</th>
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

@show