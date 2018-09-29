<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
    <nav class="navbar responsive navbar-default navbar-fixed-top navbar-panelusuario">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--LLama al Funcion actualizar que redirija al ControlPanel mediante tabs-lateral.js -->
                <a href="#controlpanel" class="navbar-brand"><img class="img-cabecera" src="/images/promar-logo2.png" alt=""></a>
                <a href="#controlpanel" class="navbar-brand">Devoluciones</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <!--Formato de Fecha : Nombre de Día, Mes-->
                        <a href="#">
                            fec
                        </a>
                    </li>
                    <!--<li class="nav-item"><a href="#"><i class="fa fa-user fa-border"></i></a></li>--> 

                    <li class="dropdown">
                        <a class="dropdown-toggle color-blanco" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i>
                           
                            <!--Muestra El Nombre de sesión Simplificado--> 
                            user
                            
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="cambiar-pass"><i class="fa fa-user fa-border"></i>Cambiar Contraseña</a></li>
                            <li><a href="#" id="salir"><i class="fa fa-sign-out fa-border"></i>Salir</a></li>          
                        </ul>
                    </li> 
                </ul>
            </div><!-- /.navbar-collapse -->    
        </div>
    </nav>
</div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/app.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
