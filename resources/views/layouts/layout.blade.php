<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<header id="header" class="main-header">

    <nav id="mdb-navbar" class="bg-navbar navbar navbar-expand navbar-dark float-lg-start w-100">
        <div class="container-fluid">
            <div class="nav-item">
                <button class="btn btn-link text-white " id="sidebar_toggle" type="button">
                    <i class="bi bi-list fs-5"></i>
                </button>
            </div>

            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="text-start"><b> СЭД </b> КДК</span>
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown messages-menu">
                    <a class="nav-link active mx-2" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o" style="font-size:18px"></i>
                        <span class="position-absolute top-0 translate-middle badge rounded-pill bg-success comment_count translate-middle-x"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item header " href="#">Уведомления</a></li>
                        <li><a class="d-block py-2 px-3 text-nowrap"  href="#">
                                <ul class="menu p-0">
                                    <li id="comment_menu"></li>
                                </ul>
                            </a></li>
                        <li class="footer" hidden><a href="">Пометить все как прочитанные</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link active" data-bs-toggle="dropdown" data-bs-reference="parent">
                        <img src="" class="user-image float-start rounded-circle" alt="">
                        <span class="d-none d-sm-inline-block" >Соколов</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-0" >
                        <li class="d-block py-2 px-3 text-nowrap text-center text-white bg-kulikov">
                            <img src="" class="rounded-circle" alt="User Image">
                            <p>
                                ФИО: Сергей<br>
                                <small>Должность: Лаа</small>
                            </p>
                        </li>

                        <li class="d-block py-2 px-3 text-nowrap text-center">
                            <button class="btn btn btn-light border border-1 border-secondary border-opacity-25 d-inline-block  btnEditUser"> Профиль</button>
                            <button class="btn btn btn-light border border-1 border-secondary border-opacity-25  d-inline-block btnVacationUser"> Отпуск</button>
                            <a class="btn btn btn-light border border-1 border-secondary border-opacity-25 d-inline-block " href="" > Выход</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar accordion accordion-flush p-0 bg-white float-lg-start" id="sidebar_menu" role="navigation">
        <ul class="sidebar-menu list-unstyled ps-2" id="menu_display">
            <li class="py-1">
                <span class="small text-dark text-opacity-50">Документооборот</span>
            </li>
            <li class="my-1 border-1 border-top accordion-item folder" data-folder="create">
                <button class="text-nowrap accordion-button collapsed p-1 border-0 bg-white fs-7" data-bs-toggle="collapse" data-bs-target="#document-create-collapse" aria-expanded="false" aria-controls="document-create-collapse">
                    <i class="fa fa-plus"></i> <span class="ps-2">Создать новый документ</span>
                </button>
                <div class="accordion-collapse collapse" id="document-create-collapse" data-bs-parent="#sidebar_menu">
                    <ul class="list-unstyled fw-normal accordion-body p-1">
                        <li class="accordion-item" id="documentMainCreate_container">
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mb-1 accordion-item folder" data-folder="in">
                <button class=" btnSelectDocumentList accordion-button collapsed p-1 border-0 bg-white fs-7" data-type-doc="-1"  data-bs-toggle="collapse" data-bs-target="#document-menu-in-collapse" aria-expanded="false" aria-controls="document-menu-in-collapse">
                    <i class="fa fa-arrow-circle-right"></i>
                    <span class="px-2">Входящие</span>
                    <span class="fw-bold" id="total_in_documents"></span>
                </button>
                <div class="accordion-collapse collapse" id="document-menu-in-collapse" data-bs-parent="#sidebar_menu">
                    <ul class="list-unstyled fw-normal ps-0 p-1 accordion-body">
                        <li class="accordion-item" id="document-menu-in-container"></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1 accordion-item folder" data-folder="out">
                <button class="btnSelectDocumentList accordion-button collapsed p-1 border-0 bg-white fs-7" data-type-doc="-1" data-bs-toggle="collapse" data-bs-target="#document-menu-out-collapse" aria-expanded="false" aria-controls="document-menu-out-collapse">
                    <i class="fa fa-arrow-circle-right"></i><span class="ps-2">Исходящие</span>
                </button>
                <div class="accordion-collapse  collapse" id="document-menu-out-collapse" data-bs-parent="#sidebar_menu">
                    <ul class="list-unstyled fw-normal ps-0 p-1 accordion-body">
                        <li class="accordion-item" id="document-menu-out-container"></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1 header">
                <span class="small text-dark text-opacity-50">Модули</span>
                @foreach ($modules as $module)
                    @if(Route::has($module->link . '.' . $module->function))
                        <li class="my-1 py-0"><a href="{{ route($module->link . '.' . $module->function) }}" class="text-decoration-none text-reset d-block w-100 py-1 '+ click_class +'"><i class="fa {{$module->icon}}"></i><span class="ps-2 pe-1">{{$module->name}}</span></a></li>
                    @endif

                @endforeach

            </li>
        </ul>
    </div>
</header>
<div class="content-wrapper">
    @yield('content')
</div>
@yield('footer')
</body>
</html>
