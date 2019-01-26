<!doctype html>
<html lang="pt-br">

<!-- {{--BootstrapCDN--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

{{--CSS Files--}}
<link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}">

{{--Font Awesome--}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    
    <!-- atraves do NPM posso baixar as dependencias do meu projeto direto
    
    npm install

    1-
    npm install bootstrap
    npm install --save-dev @fortawesome/fontawesome-free
    
    2- 

    npm run dev


    3- 

    apenas mapear arquivos
     -->
    

    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>


    
      

<head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
    </head>
    <body>

    <div class="container">


        @hasSection('content')
            @yield('content')

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        @endif

    </div>

    </body>
</html>