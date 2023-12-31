<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Inspector') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

        <!-- CSS -->
        @vite(['resources/css/template.css'])
    	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.sidebar')
            <div class="main">
                @include('layouts.nav')
                <main class="content">
				    <div class="container-fluid p-0">
                        {{ $slot }}
                    </div>
			    </main>
                @include('layouts.footer')
            </div>
        </div>
        <!-- Scripts -->
        @vite(['resources/js/template.js'])
    </body>
</html>
