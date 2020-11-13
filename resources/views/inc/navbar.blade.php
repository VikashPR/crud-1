<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal "><a class="text-white" href="/lsapp/public/">WEBILICIOUS</a> </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-1 text-white" href="/lsapp/public/">HOME</a>
        <a class="p-1 text-white" href="/lsapp/public/posts">POSTS</a>
        <a class="p-1 text-white" href="/lsapp/public/posts/create">NEW_POST</a>
        <a class="p-1 text-white" href="/lsapp/public/about">ABOUT</a>
        <a class="p-1 text-white" href="/lsapp/public/services">SERVICES</a>


        @guest

        <a class=" p-1 text-white" href="{{ route('login') }}">{{ __('LOGIN') }}</a>

        @if (Route::has('register'))
        <a class="p-1 text-white" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
        @endif
        @else
        <a id="navbarDropdown" class="dropdown-toggle p-1 text-white" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <ul>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('LOGOUT') }}
                </a></li>
            <li><a class="dropdown-item  text-dark" href="/lsapp/public/"> HOME</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none p-1 text-white">
                @csrf
            </form>
        </div>
        @endguest
        </ul>
    </nav>


</div>
