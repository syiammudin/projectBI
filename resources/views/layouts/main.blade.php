<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body style="background: #005496">
    @isset(Auth::user()->id) 
        <script type="text/javascript">
            const AUTH_LOGIN_ID =  {{ Auth::user()->id }} ;
        </script>
    @endisset
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        
        @csrf
    </form>

</body>
</html>
