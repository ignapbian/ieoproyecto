<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/IEOcomision.css">
</head>
<body>
  <div class="header">
      <div class="titulo">
      <h1><a href="/home"><b>Comisiones de servicio</b></a></h1>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('NuevaComision')? 'active' : '' }}"><a href="/NuevaComision"><b>Nueva comisión</b></a></li>
            <li class="{{ Request::is('seguimiento')? 'active' : '' }}"><a href="/seguimiento"><b>Seguimiento</b></a></li>
            <li class="{{ Request::is('liquidacion')? 'active' : '' }}"><a href="/liquidacion"><b>Liquidación</b></a></li>
            <li class="{{ Request::is('aprobacion')? 'active' : '' }}"><a href="/aprobacion"><b>Aprobación</b></a></li>
           <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <b>Salir</b>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                </form>
                                            </a>

                                            
                                        </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
 </div>
    
<img  id="{{ Request::is('home')? 'bg' : 'bgnone' }}"  alt="Fondo de pantalla"  src="/img/portada.jpg">


    <div class="container">
      
        
        @yield('content');
    
    </div>

<footer id="footer">
  <div class="trans text-center">
    {{config('app.name') }}. Todos los derechos reservados.
  </div>
  
</footer>

    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/IEOcomision.js"></script>
</body>
</html>


