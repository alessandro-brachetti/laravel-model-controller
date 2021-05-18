<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title_page ?? ''}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          h1 {
            text-align: center;
            font-size: 45px;
          }
          .card-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
          }
          .card {
            width: 19%;
            height: 200px;
            padding: 5px;
            border: 1px solid black;
            margin-bottom: 30px;
          }
        </style>
    </head>
    <body>
        @yield('main')
    </body>
</html>
