<html>
<head>
<meta charset ="utf-8">

<title>Intranet</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" id="bootstrap-css">
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link  type="text/css" rel="stylesheet"
href="http://localhost/laravel/resources/views/layouts/nav.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>

<!-- CSS Bootstrap & Custom Home-->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">  
    <link href="{{ asset('slider/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css">

<!-- <link href="{{ asset('js/jquery.min.js') }}"> -->


<body class="principal">
     
<header class="header fixed-sticky">
    
    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="{{ URL::to('home') }}" class="logo transition"><img src="{{ asset('images/logo-cei.png') }}" height="54" width="135" alt=""></a>
        </div>
        <div class="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown">Usuarios<span class="caret"></span></a>
                  <ul class="dropdown-menu forAnimate" role="menu">
                    <li><a href="{{ URL::to('users/create') }}">Crear</a></li>
                    <li><a href="{{ URL::to('users') }}">Usuarios</a></li>
                    <li><a href="#">Informes</a></li>
                  </ul>
                </li>
                
                <li class="dropdown">
                      <a href="#" data-toggle="dropdown">Clientes<span class="caret"></span></a>
                      <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="{{ URL::to('clientes/create') }}">Crear</a></li>
                        <li><a href="{{ URL::to('clientes') }}">Clientes</a></li>
                      </ul>
                </li>

                <li class="dropdown">
                      <a href="#" data-toggle="dropdown">Equipos<span class="caret"></span></a>
                      <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="{{ URL::to('equipments/create') }}">Crear</a></li>
                        <li><a href="{{ URL::to('equipments') }}">Equipos</a></li>
                      </ul>
                </li>
                
                <li class="dropdown">
                  <li><a href="#"><strong>Perfil:</strong> {{Auth::user()->role}}</a></li>
                  <li><a href="#"><strong>Usuario:</strong> {{Auth::user()->username}}</a></li>
                </li>
                
                <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-log-in"></span>Cerrar Sesión</a></li>
            </ul>
        </div>
      </div>
    </nav> 

</header>
 


@yield('content')

 

</body>
<!-- JavaScripts Home -->
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.singlePageNav.js') }}"></script>
    <script src="{{ asset('js/templatemo_custom.js') }}"></script>
    <script defer src="{{ asset('slider/jquery.flexslider.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
              $('.menu').singlePageNav();
            }
          });
        });

        $('#go-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, 1000);
          return false;
        });
        
        
        $( "#accordion" ).accordion();

    </script>
</head>
</html>
