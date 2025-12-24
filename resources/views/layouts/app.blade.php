<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Online Shop')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #b8a694;
            font-family: 'Poppins', sans-serif;
        }

        .shop-navbar {
            background-color: #b8a694;
        }

        .shop-navbar .nav-link {
            color: #ffffffff;
            margin-left: 15px;
        }

        .shop-navbar .nav-link:hover {
            text-decoration: underline;
        }

        .shop-logo {
            font-weight: 600;
            letter-spacing: 1px;
        }

        .content-wrapper {
            background-color: Poppins;
            padding: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg shop-navbar py-3">
    <div class="container">

        <span class="navbar-brand shop-logo" href="#">
            FASHION
        </span>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Proizvodi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Kategorije</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">Narudžbine</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="container my-4">
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
