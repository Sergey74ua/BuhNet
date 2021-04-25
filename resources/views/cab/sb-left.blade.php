@section('sb-left')

<aside>
    <div class="toast-body">
        <a class="btn btn-primary" href="/company" role="button">Новая компания</a>
    </div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs"> <!-- nav-stacked -->
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu1">Компания 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Компания 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">Компания 3</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="menu1">Компания 1<br>и ее 1 элементы 1 1 1 1</div>
        <div class="tab-pane container fade" id="menu2">Компания 2<br>и ее 2 элементы 2 2 2 2</div>
        <div class="tab-pane container fade" id="menu3">Компания 3<br>и ее 3 элементы 3 3 3 3</div>
    </div>
</aside>
