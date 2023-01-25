<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <livewire:styles />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Laravel Projects</span>
            </a>

            <ul class="nav nav-bar">
                <li class="nav-item"><a href="/" class="nav-link {{ (request()->routeIs('counter')) ? 'acive' : '' }}">Counter</a></li>
                <li class="nav-item"><a href="/calculator" class="nav-link {{ (request()->routeIs('calculator')) ? 'acive' : '' }}">Calculator</a></li>
                <li class="nav-item"><a href="/todo-list" class="nav-link {{ (request()->routeIs('todo-list')) ? 'acive' : '' }}">TodoList</a></li>
                <li class="nav-item"><a href="/cascading-dropdown" class="nav-link {{ (request()->routeIs('cascading-dropdown')) ? 'acive' : '' }}">Cascading Dropdown</a></li>
                <li class="nav-item"><a href="/products" class="nav-link {{ (request()->routeIs('products')) ? 'acive' : '' }}">Products Search</a></li>
                <li class="nav-item"><a href="/image-upload" class="nav-link {{ (request()->routeIs('image-upload')) ? 'acive' : '' }}">Image Upload</a></li>
                <li class="nav-item"><a href="/register" class="nav-link {{ (request()->routeIs('register')) ? 'acive' : '' }}">Registration</a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mx-auto">
                <div class="card">
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:scripts />
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
