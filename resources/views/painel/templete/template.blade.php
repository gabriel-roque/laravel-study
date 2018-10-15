<!doctype html>
<html lang="pt-br">

{{--BootstrapCDN--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

{{--CSS Files--}}
<link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}">

{{--Font Awesome--}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
    </head>
    <body>

    <div class="container">

        @yield('content')

    </div>

    </body>
</html>