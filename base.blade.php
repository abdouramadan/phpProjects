<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="/" class="navbar-brand">blog</a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link text-capitalize">home</a></li>
                    <li class="nav-item"><a href="/add" class="nav-link text-capitalize">add post</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link text-capitalize">login</a></li>
                    <li class="nav-item"><a href="/signup" class="nav-link text-capitalize">create account</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')

    <!-- JAVASCRIPT -->
    <script src="{{  asset('/js/jquery.min.js')  }}"></script>
    <script src="{{  asset('/js/popper.min.js')  }}"></script>
    <script src="{{  asset('/js/bootstrap.min.js')  }}"></script>
    <script src="{{  asset('/js/index.js')  }}"></script>
</body>
</html>
