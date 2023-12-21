<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
        </div>

        <ul class="nav col-6 col-md-auto mb-2 mb-md-0">
            <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Features</a></li>
            <li><a href="/index" class="nav-link px-2">Pricing</a></li>
            <li><a href="/registration" class="nav-link px-2">Registration</a></li>
            <li><a href="/about" class="nav-link px-2">About</a></li>
        </ul>

        <form class="form-horizontal mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
{{--            <input  class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Искать">--}}
        </form>
         @if(!$entered)
            <div class="col-md-3 text-end">
                <a class="btn btn-outline-primary me-2" href="/">Вхід</a>
                <a class="btn btn-primary" href="/registration">Регістрація</a>
            </div>
        @else
            <div class="col-md-3 text-end">
                <a class="btn btn-outline-primary me-2" href="/">Виход</a>
                <a class="btn btn-primary" href="/registration">Регістрація</a>
            </div>
        @endif
    </header>
</div>

<div class="container">
    <main>

        @yield('content')

    @if($ispage)
        <nav class="mt-2">
            <ul class="pagination justify-content-center">
                <!-- пункт с ссылкой, по которой невозможно
                осуществить переход -->
                <li class="page-item disabled">
                    <a class="page-link" href="#"
                       aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <!-- пункт с ссылкой на текущую страницу -->
                <li class="page-item active">
                    <a class="page-link" href="#">
                        1
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        2
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        3
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"
                       aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        @endif
    </main>
</div>

<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
    </footer>
</div>

</body>
</html>
