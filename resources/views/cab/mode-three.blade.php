@section('mode_three')

<div class="table-light table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover table-light">
        <h4>Счет 50.<small class="text-muted"> - Касса в национальной валюте.</small></h4>
        <thead>
            <caption>Отчет сформирован в соответствии данными актуальными на 05.04.2021 г.</caption>
            <tr class="text-center">
                <th class="bn-num">№</th>
                <th class="bn-num">Дата</th>
                <th class="bn-num">Остаток</th>
            </tr>
        </thead>
        <tbody class="text-right">
            @foreach($data as $element)
                <tr>
                    <th class="bn-num">{{ $element }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@show
