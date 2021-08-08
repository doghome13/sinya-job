<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap core CSS -->
        <link href = {{ asset("bootstrap/css/bootstrap.min.css") }} rel="stylesheet" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
                padding: 20px 10px;
            }

            .title {
                font-size: 84px;
            }
        </style>

        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>
