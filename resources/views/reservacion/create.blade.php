<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">




    <p>Formulario de reservación</p>


    <form>

        <div>
            <label>Adultos: </label>
            <input type="text" name="noAdultosReservacion">
        </div>

        <div>
            <label>Niños: </label>
            <input type="text" placeholder="">
        </div>

        <div>
            <label>LLegada</label>
            <input type="date" placeholder="">
        </div>

        <div>
            <label>Ida</label>
            <input type="date" placeholder="">
        </div>

        <div>
            <label>Habitaciones</label>
            <input type="text" placeholder="">
        </div>

        <div>
            <label></label>
            <input type="text" placeholder="">
        </div>

        <div>
            <label></label>
            <input type="text" placeholder="">
        </div>

        <div>
            <label></label>
            <input type="text" placeholder="">
        </div>

        <div>
            <label></label>
            <input type="text" placeholder="">
        </div>

        <div>
            <label></label>
            <input type="text" placeholder="">
        </div>


    </form>



    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
