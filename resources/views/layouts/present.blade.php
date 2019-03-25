<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                /* font-weight: 100; */
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            a {
               color: #cacaca;
               padding: 0 25px;
               /* font-size: 12px; */
               /* font-weight: 600; */
               /* letter-spacing: .1rem; */
               text-decoration: none;
               text-transform: uppercase;
           }s
           a:hover {
            text-decoration: none; /* Добавляем подчеркивание при наведении курсора на ссылку */
            color: red; /* Ссылка красного цвета */
           }
/*
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            .flex-between {
                align-items: center;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                flex: 0 0 33.3333%;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
 <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
 <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
 <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=be5162d915534272a57d0bb781d27f2b" type="text/css" rel="stylesheet">
 <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=be5162d915534272a57d0bb781d27f2b" type="text/css" rel="stylesheet">
 <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
 <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
 <script src="https://cdn.anychart.com/releases/v8/js/anychart-cartesian.min.js"></script>
 <script src="https://cdn.anychart.com/releases/v8/js/anychart-core.min.js"></script>
 <style type="text/css">
html, body, #container {
   width: 100%;
   height: 350px;
   margin: 0;
   padding: 0;
}
</style>
</head>
<body>
  <!-- <div class="flex-center position-ref full-height"> -->

      <div class="content">
    <div id="app">
        @yield('content')
    </div>
</div>
<!-- </div> -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
