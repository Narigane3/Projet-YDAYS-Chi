<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chi - @yield('title')</title>
    @vite('resources/js/app.js')
    @section('head')
    @show
</head>
<body>
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </div>
            </div>
        </div>
    </nav>
@show
<div class="container">
    @yield('content')
</div>
</body>
<footer>
    @section('footer')
    @show
</footer>
</html>
