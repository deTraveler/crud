<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center p-2">
                    <div class="d-flex flex-column">
                        <h1 class="text align-self-center">CRUD Test</h1>
                        <p class="text align-self-center">{{ session('message') }}</p>
                        <div class="d-flex flex-row">
                            <a href="/user" class="btn btn-primary align-self-center">Go to view</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="/user2" class="btn btn-success align-self-center">Go to user2 view</a>
                        </div>
                        <div class="d-flex flex-row">
                            <p class="text-center">View not working well</p>
                        </div>
                        <div class="d-flex flex-row">
                            <p class="text-center">User2 view works well</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
