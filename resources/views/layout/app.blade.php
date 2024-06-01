<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar{
            padding: 5px 100px;
        }
        body, html {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            /* position: fixed; */
            bottom: 0;
            width: 100%;
        }
        header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .container.mt-5 {
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('cours.index') }}">Cours Application</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('user.register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-5 content">
        @yield('content')
    </div>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            © 2024 My Application. All rights reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
