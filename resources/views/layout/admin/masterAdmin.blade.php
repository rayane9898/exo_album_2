<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">


    <title>@yield('title')</title>
</head>
<body>
    {{-- nav --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("home")}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administration
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route("userAdmin")}}">Utilisateurs</a>
                    <a class="dropdown-item" href="{{route("albumAdmin")}}">Album</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    {{-- nav --}}

    <main class="text-center">
        <section id="title">
            <h1>Administration</h1>
            <h2>@yield('titleH2')</h2>
        </section>
            @yield('content')
    </main>

    {{-- script --}}
<script src="{{ asset("js/app.js") }}"></script>
    {{-- script --}}
    
</body>
</html>