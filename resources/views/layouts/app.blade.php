<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/estilos.css"> 
    <link rel="stylesheet" href="css/st.css"> 
    <link rel="stylesheet" href="css/facebook.css">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <!-- responsive-->
     <link rel="stylesheet" href="css/responsive.css">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>@yield('title')-Tlapatilistli</title>
    @laravelPWA
  </head>
<body >
<style>

a:link, a:visited,  a:hover, a:active
{
    color: #000000;
    text-decoration: none;
}
</style>
@if(auth()->check())

<nav>
       
       <div class="options">
       <a href="{{ route('buzon') }}">
       <img src="imgs/mensaje.png">
      </a>

      <a href="{{ route('videos') }}">
        <img src="imgs/video.png">
        </a>

            <a href="http://localhost/tlapa/public/home">
            <img src="imgs/casa.png">
            </a>

            <a href="{{ route('catalogo') }}">
            <img src="imgs/planta.png">
          </a>

       </div>
       <div class="logo">

           <div class="search">
               <img src="imgs/search.svg">
               <input type="search" placeholder="Buscar">
           </div>
       </div>
       <a href="{{ route('about') }}">
       <div class="options-two">
           <div class="profile">
              <img src="imgs/persona.png">
               <p>{{ Auth::user()->name }}</p>
           </div>
        </a>   
            <img src="imgs/notifications.svg">

            
            
                <a id="navbarDropdown"  role="button" data-toggle="dropdown"  v-pre>
                <div class="options-two">
                <img src="imgs/menu-desplegable.svg"></div>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                
                    <a class="dropdown-item" href="{{ route('login.destroy') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesi??n') }}
                    </a>

                    <form id="logout-form" action="{{ route('login.destroy') }}" method="get" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
   </nav>
   <br>
   <center> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="152574/"></script>  </center>
   
            <!--
              <li class="nav-item"><a class="nav-link" href="#">inicio</a></li>
              <p class="text-1">Bienvenido <b>{{auth()->user()->name}}</b></p>
              <li class="nav-item"><a class="nav-link" href="{{route('login.destroy')}}">cerrar sesion</a></li>-->
            @else
            <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
         <div class="container">
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{route('principal')}}">Regresar</a></li>
              </ul>
            </div>
        </div>
      </nav>
      @endif
          

@yield('content')


</body><br><br><br><br>

<!-- footer -->

<footer class="text-center text-white"  style="background-color: #80a00a;">
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>SANTS
                </h6>
                <p>
                    Somos una empresa que esta enfocada a brindar
                    el servicio de informacion acerca de los remedios caseros
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contacto
                </h6>
                <p><i class="fas fa-home me-3"></i> Huejutla de reyes, Hgo 43000</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    tlapatilistli@gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i> 7712131415</p>
                
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>