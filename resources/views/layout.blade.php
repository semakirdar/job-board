<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Board</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <nav class="navbar navbar-header navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo-white.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Find Jobs</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Employes</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Candidates</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Pages</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-outline-light text-white" href="#">
                            Login / Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-primary" href="#">
                         Add Job
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div>
    @yield('content')
</div>


<footer>

</footer>
<script src="{{ asset('js/app.js') }}"></script>
@if ($errors->any())
    <script>toastr.error('{{ implode(",", $errors->all()) }}')</script>
@endif
</body>
</html>
