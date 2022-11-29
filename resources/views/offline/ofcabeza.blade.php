<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/estilos.css"> 
    <link rel="stylesheet" href="css/st.css"> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('../js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>@yield('title')-Tlapatilistli</title>
    @laravelPWA
  </head>
  

<body>

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">TLAPATILISTLI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('remediosof')}}">Regresar</a></li>
                    </ul>
                   
                </div>
            </div>
        </nav><br><br><br>
</div>

        <div class="Introduction">
            <div class="container">
                <h2>Dolor de cabeza</h2>
                    <p class="plain-text">Ingredientes:<br><br>

        1 cucharada de hojas de menta (10 g)<br>
        1 taza de agua (250 ml)<br><br>

        ¿Cómo prepararlo?<br>

        Vierte las hojas de menta en una taza de agua hirviendo, déjalo reposar 10 minutos y consúmelo.
        Toma hasta dos tazas al día.
        </p><br>

        <center><IMG SRC="../img/comun/cabeza.jpeg"></center>
        <br> 


            </div>
        </div>
    </body>
            </div><br><br>
    <!-- CATALOGO -->
        <style>
    #container
    {border-radius:20px
        border:1px solid grey;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-evenly;
        cursor:pointer;
    }
    #containerprod
    {
        margin:15px;
        padding:2px 50px;
        position: relative;
        box-shadow:0 4px 8px 0 rgba(0,0,0.2);
        background-color:white;
    }
    #containerprod img
    {
        width:200px;
    }
    #containerprod:hover
    {
        box-shadow:0 8px 16px 0 rgba(0,0,0.2);
    }
    a:link, a:visited,  a:hover, a:active
    {
        color: #000000;
        text-decoration: none;
    }

    </style>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../js/mainC.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/custom.js"></script>
</body>
    
<!-- Footer-->
<footer class="text-center text-white"  style="background-color: #80a00a;">
        <!-- Section: Social media -->
    <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    </section>

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
</footer>
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy;Tlapatilistli 2021</div>
            <div class="col-lg-4 my-3 my-lg-0">
                
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="{{route('privacidad')}}" target="_blank">Politica de privacidad</a>
                <a class="link-dark text-decoration-none" href="{{route('aviso')}}" target="_blank">Aviso legal</a>
            </div>
        </div>
    </div>
</footer>

</html>