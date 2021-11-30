<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon-16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon-32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon-96.png') }}" sizes="96x96">
    <link href="{{ url('/css/app.css?v=' . date('His', filemtime(public_path('/css/app.css')))) }}" rel="stylesheet">
    <script src="{{ url('/js/app.js?v=' . date('His', filemtime(public_path('/js/app.js')))) }}"></script>

    <title>Vlad Kidanov - web developer</title>

</head>
