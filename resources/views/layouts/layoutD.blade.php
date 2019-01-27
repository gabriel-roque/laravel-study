<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>{{$title}}</title>
</head>

<body>

<div class="container">


        @yield('content')

</div>

</body>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</html>