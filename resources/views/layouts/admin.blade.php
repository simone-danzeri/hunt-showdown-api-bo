
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hunt Showdown Api</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->

    @vite(['resources/js/app.js'])

</head>

<body>
    <div id="app">

        <header class="navbar navbar-dark sticky-top flex-md-nowrap p-2 shadow ms-bg-primary justify-content-space-between">
            <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-white" href="/">
                <div class="logo-hunt">
                    <img src="{{ asset('hunt-logo.jpg') }}" alt="" class="w-100">
                </div>
            </a>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap ms-2">
                    <a class="nav-link px-3 text-white" href="{{ route('logout') }}" onclick="event.preventDefault();

                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </header>

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block ms-bg-primary sidebar collapse">
                    <div class="position-sticky pt-3">
                        @if (!Route::is('admin.dashboard'))
                        <a href="{{ route('admin.dashboard')}}" class="d-block btn ml-2 border border-light my-3 text-white">
                            Back to Dashboard
                        </a>
                        @endif
                        @if (Route::is('admin.dashboard'))
                        <a href="{{ route('admin.weapons.index')}}" class="d-block btn ml-2 border border-light my-3 text-white">
                            Weapons
                        </a>
                        @endif
                        @if (Route::is('admin.weapons.show'))
                        <a href="{{ route('admin.weapons.index')}}" class="d-block btn ml-2 border border-light my-3 text-white">
                            Back to Weapons
                        </a>
                        @endif
                        @if (Route::is('admin.variants.index'))
                        <a href="{{route('admin.weapons.show', ['weapon' => $weapon->slug])}}" class="d-block btn ml-2 border border-light my-3 text-white">
                            Back to Weapon
                        </a>
                        @endif
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3 ms-bg-primary">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>


</html>
