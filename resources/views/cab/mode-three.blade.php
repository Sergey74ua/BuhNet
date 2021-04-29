@section('mode_three')

<div class="table-light table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover table-light">
        <h4>Счет 50.<small class="text-muted"> - Касса в национальной валюте.</small></h4>
        <thead>
            <caption>Отчет сформирован в соответствии данными актуальными на 05.04.2021 г.</caption>
            <tr class="text-center">
  
                <th class="bn-num">type_id</th>
                <th class="bn-num">partner_id</th>
                <th class="bn-num">target</th>
                <th class="bn-num">document</th>
                <th class="bn-num">verification</th>
                <th class="bn-num">date</th>
                <th class="bn-num">number</th>
                <th class="bn-num">dating</th>
                <th class="bn-num">sum</th>
                <th class="bn-num">purpose</th>
                <th class="bn-num">user_id</th>
                <th class="bn-num">link</th>
                <th class="bn-num">created_at</th>
            </tr>
        </thead>
        <tbody class="text-right">
            @foreach($data as $element)
                <tr>

                    <td>{{ $element->type_id }}</td>
                    <td>{{ $element->partner_id }}</td>
                    <td>{{ $element->target }}</td>
                    <td>{{ $element->document }}</td>
                    <td>{{ $element->verification }}</td>
                    <td>{{ $element->date }}</td>
                    <td>{{ $element->number }}</td>
                    <td>{{ $element->dating }}</td>
                    <td>{{ $element->sum }}</td>
                    <td>{{ $element->purpose }}</td>
                    <td>{{ $element->user_id }}</td>
                    <td>{{ $element->link }}</td>
                    <td>{{ $element->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@show
