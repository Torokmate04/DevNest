<!doctype html>
<html data-bs-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Jquery linkek --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    {{-- Icon linkelese --}}
    <link rel="shortcut icon" href="{{ asset('storage/logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Toaster --}}
    <script src="
                                                                                    https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js
                                                                                    "></script>
    <link href="
https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css
" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <img src="{{ asset('storage/logo.png') }}" alt="Bootstrap" width="30" height="24">
                    {{ config('app.name', 'Laravel') }}
                </a>

                {{-- Ha mobilnezetre kerul elojon a harom csikos lenyilo ful --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            {{-- ha nincs bejelentkezve talan kéne valami hibat dobnia  --}}
                        @else
                            {{-- Ha be van jelentkezve !! itt majd kette kéne szedni adnmin linkekre meg sima felhasznalo linkekre --}}


                            <div class="d-flex gap-4 fs-5">
                                @if (Auth::user()->role == 1)
                                    {{-- Admin linkek --}}
                                    <a class="navbar-item text-light" href="{{ route('courses.create') }}">Create
                                        course</a>
                                    <a class="navbar-item text-light" href="{{ route('courses.index') }}">Courses</a>

                                    <a class="navbar-item text-light" href="{{ route('schools.index') }}">Schools</a>
                                    <a class="navbar-item text-light" href="{{ route('schools.create') }}">Create
                                        school</a>
                                    <a class="navbar-item text-light" href="{{ route('users') }}">Users</a>
                                @else
                                    {{-- User linkek --}}
                                    <a href="{{ route('profile') }}">Profile</a>
                                    <a href="{{ route('progLang.index') }}">Learn</a>
                                    <a href="{{ route('docs') }}">Docs</a>
                                    <a href="{{ route('calendar') }}">Calendar</a>
                                @endif
                                    
                               

                                



                                <a class="navbar-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
