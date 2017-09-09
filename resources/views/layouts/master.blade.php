<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">

        {{-- Link to CSS --}}
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <div id="app">
            {{-- Routing --}}

            @include('layouts.header')

            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
            </section>
        </div>

        {{-- Link to Script --}}
      <script src="/js/app.js"></script>

      {{-- <script src="http://localhost:35729/livereload.js"></script> --}}

    </body>
</html>
