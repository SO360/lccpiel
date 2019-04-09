<!DOCTYPE html>
  <html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="images/x-icon" href="{{url('template/img/favicon/favicon.ico')}}" />

    <meta name="description" content="La Liga Contra el Cáncer es la primera institución del Perú en realizar acciones de detección y prevención del cáncer. En sus más de 60 años de funcionamiento, ha contribuido a disminuir la alta incidencia de la enfermedad en nuestro país a través de acciones de prevención. ">
    <meta name="keywords" content="Liga, cancer, peru, prevencion, campaña">
    <meta name="author" content="Orange-360">
    <meta name="author" content="Luis Gomez">

    <title>Liga Contra el Cáncer</title>

      <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- CSRF Token -->
    <meta name="_token" content="{!! csrf_token() !!}" />

    <!-- Bootstrap core CSS -->
    {{ Html::style('template/css/bootstrap.min.css') }}

    <!-- Custom fonts for this template -->
    {{ Html::style('template/css/all.min.css') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Varela+Round') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}

    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
    {{ Html::style('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css') }}

    <!-- Custom styles for this template -->
    {{ Html::style('template/css/grayscale.css') }}
    {{ Html::style('template/css/docs.css') }}

    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
      integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
      crossorigin="anonymous">

    {{ Html::style('http://anijs.github.io/lib/anicollection/anicollection.css') }}

    {{ Html::style('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}

     <!-- Jq alertify-->
    {{ Html::style('template/css/alertify.min.css') }}


    {{ Html::style('template/css/immersive-slider.css') }}



    <!--modal -->
    {{ Html::style('template/css/modal-video.min.css') }}

    {{ Html::style('template/css/hover.css') }}

    {{ Html::style('template/css/style_own.css') }}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130888170-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130888170-1');
    </script>




  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="{{url('template/img/logo/LCC.png')}}"  width="100px" height="50px" alt="">
        </a>
         <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="{{url('template/img/logo/logo.png')}}" height="70px" alt="">
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <!--  <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Inicio</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#two">Cancer de Piel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tree">Por Fuera y Por Dentro</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#four">Receta Anti UV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#five">Team Anti UV</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#six">Agenda tu cita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#seven">Campañas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#eight">Contacto</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>



        <!-- Header -->
        <header class="masthead bg-light">
         <div class="overlay"></div>
           <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
            <source src="{{ url('template/img/video/2.mp4') }}" type="video/mp4">
          </video>
            <div class="container h-100">
              <div class="d-flex text-center h-100">
                <div class="my-auto w-100 text-white mb-3">

                  <a href="#" class="js-video-button  " data-video-id='Cey_80iKMR8' style="margin-top: 200px;
                        color: #e5bc16; ">
                        <img class="hvr-grow-shadow img-fluid" src="{{ url('template/img/video/icono.png') }}" width="100px" height="100px" alt="">
                  </a>

                </div>
              </div>
            </div>
        </header>

        <section id="two" class="projects-section text-center " data-anijs="if: scroll, on: window, do:bounceIn animated, before: scrollReveal" >
            <div class="container ">
                 <div class="row my-4">
                      <div class="col-lg-8 mx-auto ">
                        <h4 class="text-orange text-center text-uppercase font-weight-bold pb-3" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">CÁNCER DE PIEL
                      </h4>

                      </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">
                            <div class="rounded-circle img-fluid" >
                               <img src="{{ url('template/img/icon/BpwN6gLg.png') }}" width="100px" height="90px" alt="">
                            </div>

                            <br>
                            <h3 class="title"></h3>
                            <p class="description">
                               Desde el 2016, Perú viene ocupando el primer lugar en el mundo en presentar altos índices de radiación ultravioleta, alcanzando cifras históricas de hasta 20 puntos, un nivel considerado extremo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox" data-anijs="if: scroll, on: window, do: rubberBand animated, before: scrollReveal">
                            <div class="rounded-circle img-fluid" >
                               <img src="{{ url('template/img/icon/lfsAompw.png') }}" width="100px" height="90px" alt="">
                            </div>

                            <br>
                            <p class="description">
                                Cada año los casos de cáncer de piel aumentan en el país, solo en el 2018 se han registrado 944 casos de tipo melanoma, y de estos 355 fallecen a causa de esta enfermedad.<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal">
                             <div class="rounded-circle img-fluid" >
                               <img src="{{ url('template/img/icon/rU3ehkfw.png') }}" width="100px" height="90px" alt="">
                            </div>
                            <br>
                            <p class="description">
                                La radiación solar se encuentra todos los 365 días del año, es decir tanto en verano como en invierno, incluso en los días nublados el planeta puede recibir el 40 % de radiación solar, causando quemaduras.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="tree" class="projects-section bg-light">

           <div class="site-section ">
              <div class="container">
                <div class="row" >
                  <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">
                    <h4 class="text-orange text-center text-uppercase font-weight-bold pb-3">Por fuera
                    </h4>
                     <p class="text-justify" >Protegerte por fuera es necesario para que tu piel no sufra de los rayos del sol. ¿cómo lo puedes hacer?</p>
                     <br>
                    <div class="rounded  jobs-wrap"><!-- .border -->
                      <div id="owl-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center fulltime">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/1.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                               <h3><b>Bloqueador Solar:</b></h3>
                                Usando bloqueador solar no menos a 30 FPS (bloqueador Unique)
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center fulltime">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/2.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                <h3><b>Prevenci&oacute;n:</b></h3>
                                Evita exponerte al sol en las horas de alta radiación: entre 11 am a 4 pm.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                           <a href="#" class="job-item d-block d-md-flex align-items-center fulltime">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/3.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                <h3><b>Lentes:</b></h3>
                                Hacer Uso de lentes de sol mayores de 400 UV.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#"" class="job-item d-block d-md-flex align-items-center fulltime">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/4.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                <h3><b>Sombreros:</b></h3>
                                Hacer uso de Sombreros de ala ancha.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                           <a href="#" class="job-item d-block d-md-flex align-items-center fulltime">
                              <div class="company-logo blank-logo text-center text-md-left pl-3">
                                <img src="{{ url('template/img/icon_porFuera/5.png') }}" alt="Image" class="img-fluid mx-auto">
                              </div>
                              <div class="job-details h-100">
                                <div class="p-3 align-self-center">
                                  <h3><b>Vestimenta: </b></h3>
                                 Hace uso de ropa holgada de manga larga y colores claros de baño con protección UV.
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>

                    </div>
                  </div>

                  <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-anijs="if: scroll, on: window, do:bounceInRight animated, before: scrollReveal">
                      <h4 class="text-orange text-center text-uppercase font-weight-bold pb-3">Por Dentro
                    </h4>
                     <p class="text-justify" >
                  Además de protegerte por fuera, existen otras opciones complementarias que ayudarán a que tu piel se proteja del sol.</p>
                    <br>
                    <div class="rounded  jobs-wrap"> <!--border -->

                      <div id="owl-carousel2" class="owl-carousel owl-theme">
                        <div class="item">
                           <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/6.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                <h3><b>Vegetales de hoja verde:</b></h3>
                                Espinacas, acelgas, lechugas, brócoli, apio, alcachofas, perejil o culantro, óptimas para prevenir y reparar el daño solar, ya que contiene flavonoides.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                            <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                              <div class="company-logo blank-logo text-center text-md-left pl-3">
                                <img src="{{ url('template/img/icon_porFuera/7.png') }}" alt="Image" class="img-fluid mx-auto">
                              </div>
                              <div class="job-details h-100">
                                <div class="p-3 align-self-center">
                                  <h3><b>Frutas ricas en agua:</b></h3>
                                  Naranja, toronja, manzana, sandía.
                                  <div class="mb-4"></div>
                                  <div class="mb-4"></div>
                                  <div class="mb-4"></div>
                                </div>
                              </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                              <div class="company-logo blank-logo text-center text-md-left pl-3">
                                <img src="{{ url('template/img/icon_porFuera/8.png') }}" alt="Image" class="img-fluid mx-auto">
                              </div>
                              <div class="job-details h-100">
                                <div class="p-3 align-self-center">
                                  <h3><b>Alimentos ricos en carotenos:</b></h3>
                                  Zanahoria, tomate, zapallo, camote, mango, melón y brócoli, espinacas, acelgas, lechugas, apio, alcachofas, perejil, culantro, pimiento.
                                </div>
                              </div>
                            </a>
                        </div>
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/9.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                <h3><b>Alimentos que contienen Vitamina E:</b></h3>
                                Semillas como las de girasol, frutos secos como las nueces y almendras o en forma de suplemento no excediendo 400 mg. al día.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/10.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                <h3><b>Chocolate negro: </b></h3>
                                el cacao puro puede reducir la sensibilidad de tu piel a los rayos solares.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/11.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                 <h3><b>Semillas: </b></h3>
                                Las semillas de lino, chía y las que contiene omega 3
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/11.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                 <h3><b>Alimentos que contengan fibra: </b></h3>
                                té verde, huevos y ajo.
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                           <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                              <img src="{{ url('template/img/icon_porFuera/11.png') }}" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                                 <h3><b>Alimentos con alto contenido en Omega 3: </b></h3>
                                 Pescados de carne oscura, y en oleaginosas como la chía, sacha inchi, linaza y la soya, aceite de oliva, palta.
                              </div>
                            </div>
                            </a>
                        </div>
                        <div class="item">
                          <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                              <div class="company-logo blank-logo text-center text-md-left pl-3">
                                <img src="{{ url('template/img/icon_porFuera/11.png') }}" alt="Image" class="img-fluid mx-auto">
                              </div>
                              <div class="job-details h-100">
                                <div class="p-3 align-self-center">
                                   <h3><b> Alimentos de color azul o morados: </b></h3>
                                  Semillas, maíz morado, cáscara de las uvas, arándanos, frambuesas y moras, estas tienen un fotoprotector que protege a la piel de los efectos nocivos del sol y son antioxidantes.
                                </div>
                              </div>
                          </a>
                        </div>

                    </div>

                    </div>
                  </div>
              </div>
            </div>
        </section>


      <!--  <div class="row">

                  <div class="media mb-4 d-md-flex d-block element-animate">

                    <div class="media-body">

                      <h3 class="mt-2 text-black"><a href="#">Probando</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam minus ipsa earum nemo consectetur cupiditate necessitatibus suscipit assumenda perspiciatis provident.</p>
                      <p>
                    </div>
                      <a href="#" class="mr-5 "><img width="200px" height="500px" src="{{ url('template/img/photo/foto-5.jpg') }}" alt="Placeholder image" class="img-fluid"></a>
                  </div>

                </div>


                <div class="media mb-4 d-md-flex d-block element-animate">
                  <a href="#" class="mr-5 "><img width="200px" height="500px" src="{{ url('template/img/photo/foto-5.jpg') }}" alt="Placeholder image" class="img-fluid"></a>
                  <div class="media-body">

                    <h3 class="mt-2 text-black"><a href="#">Probando1</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam minus ipsa earum nemo consectetur cupiditate necessitatibus suscipit assumenda perspiciatis provident.</p>

                  </div>
                </div>



        </div>-->
       <style>
          .text-shadown {
            text-shadow: 1px 4px 7px rgba(73, 73, 73,0.8);
          }
        </style>

        <section id="four"  class="projects-section1 d-block text-orange" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">
          <div class="row my-4">
                   <div class="col-lg-8 mx-auto text-center ">
                        <h4 class=" text-uppercase font-weight-bold pb-3" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">Receta Anti UV
                        </h4>
                    </div>
              </div>





                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url({{ url('template/img/video/piel_video-1.png') }})">
                      <div class="carousel-caption">
                        <h3><a href="#" class="js-video-button  " data-video-id='t6njcuY2I9Q'>
                        <img class="hvr-grow-shadow img-fluid img-zoom" src="{{ url('template/img/video/icono.png') }}" width="70px" height="70px" alt="">
                        </a></h3>

                       <h3 class="text-shadown">Jugo Rojo</h3><br>
                       <p><span class="text-shadown">Chef del Instituto Le Cordon Blue, Sandro Reghellin</span></p>
                      </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url({{ url('template/img/video/piel_video-2.png') }})">
                      <div class="carousel-caption ">
                       <h3><a href="#" class="js-video-button  " data-video-id='4p16ZFladV0'>
                        <img class="hvr-grow-shadow img-fluid img-zoom" src="{{ url('template/img/video/icono.png') }}" width="70px" height="70px" alt="">
                        </a></h3>


                       <h3 class="text-shadown">Ensalada Fresca</h3><br>
                       <p><span class="text-shadown">Chef Diego Muñoz</span></p>
                      </div>
                    </div>
                    <div class="carousel-item" style="background-image: url({{ url('template/img/video/piel_video-3.png') }})">
                      <div class="carousel-caption ">
                       <h3><a href="#" class="js-video-button  " data-video-id='0n0iFUq6Kp4'>
                        <img class="hvr-grow-shadow img-fluid img-zoom" src="{{ url('template/img/video/icono.png') }}" width="70px" height="70px" alt="">
                        </a></h3>


                       <h3 class="text-shadown">Pescado con Spaghetti de Zucchini </h3><br>
                       <p><span class="text-shadown">Chef del Instituto Le Cordon Blue, Sandro Reghellin</span></p>
                      </div>
                    </div>

                    <div class="carousel-item" style="background-image: url({{ url('template/img/video/piel_video-4.png') }})">
                      <div class="carousel-caption ">
                       <h3><a href="#" class="js-video-button  " data-video-id='GHsHTTLdZZg'>
                        <img class="hvr-grow-shadow img-fluid img-zoom" src="{{ url('template/img/video/icono.png') }}" width="70px" height="70px" alt="">
                        </a></h3>


                       <h3 class="text-shadown"> Tomate Relleno</h3><br>
                       <p><span class="text-shadown">Chef del Instituto Le Cordon Blue, Sandro Reghellin</span></p>
                      </div>
                    </div>

                    <!-- Nuevo -->
                     <div class="carousel-item" style="background-image: url({{ url('template/img/video/piel_video-5.jpg') }})">
                      <div class="carousel-caption ">
                       <h3><a href="#" class="js-video-button  " data-video-id='Hdf0loYCj3Q'>
                        <img class="hvr-grow-shadow img-fluid img-zoom" src="{{ url('template/img/video/icono.png') }}" width="70px" height="70px" alt="">
                        </a></h3>


                       <h3 class="text-shadown"> Ensalada fresca de sandía y quinua</h3><br>
                       <p><span class="text-shadown">Chef del Germán Roz </span></p>
                      </div>
                    </div>

                      <div class="carousel-item" style="background-image: url({{ url('template/img/video/piel_video-6.jpg') }})">
                      <div class="carousel-caption ">
                       <h3><a href="#" class="js-video-button  " data-video-id='nXb1eHbGr10'>
                        <img class="hvr-grow-shadow img-fluid img-zoom" src="{{ url('template/img/video/icono.png') }}" width="70px" height="70px" alt="">
                        </a></h3>

                       <h3 class="text-shadown"> Muffin de plátano y arándanos</h3><br>
                       <p><span class="text-shadown">Chef Ale Camino</span></p>
                      </div>
                    </div>

                    <!-- Slide Three - Set the background image for this slide in the line below -->

                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

          </section>


          <!--speaker section-->
         <section id="five" class="projects-section bg-light" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal"
         >
          <div class="container">
             <div class="col-lg-8 mx-auto ">
                    <h4 class=" text-center text-uppercase font-weight-bold text-orange pb-3 " data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">TEAM ANTI UV
                  </h4>
                    <p class="text-dark-50 text-center" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">El Team Anti Uv, está conformado por reconocidos chefs peruanos, que, por su preocupación por la alta incidencia de cáncer en el país, han decidido unirse para ir a tu playa a enseñarte a cómo protegerte del sol, tanto <b>#porfueraypordentro</b></p>
              </div>
          </div>

          <div class="row justify-content-center no-gutters " data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-7.jpg')}}" width="200px" height="340px" alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Adolfo Perret</h5>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-6.jpg')}}" width="200px" height="340px" alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Diego Muñoz</h5>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-5.jpg')}}" width="200px" height="340px"  alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Flavio Solórzano</h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-4.jpg')}}"  width="200px" height="340px" alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Germán Roz</h5>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
              <div class="row justify-content-center no-gutters" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-3.png')}}" width="200px" height="340px" alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Javier Wong</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-2.png')}}" width="200px" height="340px"  alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Mariano Escobal </h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-1.jpg')}}" width="200px" height="340px" alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Mitsuharu Tsumura</h5>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-8.jpg')}}" width="200px" height="340px"  alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Sandro  Reghellin</h5>
                          </div>
                      </div>
                  </div>
              </div>



          </div>
          <div class="row justify-content-center no-gutters " data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">
               <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-9.jpg')}}" width="200px" height="340px"  alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Ale Camino</h5>
                          </div>
                      </div>
                  </div>
              </div>
               <div class="col-md-3 col-sm-6">
                  <div class="speaker_box">
                      <div class="speaker_img">
                          <img src="{{url('template/img/photo/foto-10.jpg')}}" width="200px" height="340px"  alt="speaker name">
                          <div class="info_box">
                              <h5 class="name">Andres Ugaz</h5>
                          </div>
                      </div>
                  </div>
              </div>

          </div>


      </section>

      <section id="six" class="projects-section " data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal" >

               <div class="container">
               <div class="row">
                    <div class="col-lg-8 mx-auto" >
                      <h3 class=" text-orange font-weight-bold text-center py-3" >Registrate para hacer un chequeo</h3>
                      <dir class="by-4"></dir>
                    <form id="registerForm" method="get" action="">

                      <div class="form-row">
                        <div class="form-group col-md-4 ">
                          <label for="Nombre" class="bmd-label-floating ">Nombre</label>
                          <input type="text" name="name" class="form-control " id="name" >
                        </div>
                        <div class="form-group col-md-4">
                          <label for="last_name" class="bmd-label-floating ">Apellido Paterno</label>
                          <input type="text" name="last_name" class="form-control " id="last_name" >
                        </div>
                        <div class="form-group col-md-4">
                           <label for="mother_last_name" class="bmd-label-floating ">Apellido Materno</label>
                          <input type="text" name="mother_last_name" class="form-control " id="mother_last_name" >
                        </div>
                      </div>
                      <div class="form-row">
                         <div class="form-group col-md-4">
                          <label for="Email" class="bmd-label-floating ">Email</label>
                          <input type="email" name="email" class="form-control " id="email" >
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Celular" class="bmd-label-floating ">Celular</label>
                          <input type="text" name="cellphone" class="form-control " id="cellphone" >
                              <small class="form-text text-white">Ejemplo: (codigo)000-000-000</small>
                        </div>
                      </div>

                      <div class="form-row">

                        <div class="form-group col-md-4">

                        <div class="g-recaptcha" data-sitekey="6Lfwz4AUAAAAANmwLmQKNxlEwH3ps6F5m8nisksO"
                        data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"
                        > </div>

                           <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;"/>
                        </div>
                        <div class="form-group offset-2 col-md-4 text-right pt-3 pt-3">

                             <button type="submit" class="btn btn.blue btn-raised  ">Registrar</button>
                        </div>
                        </div>
                      </div>
                      <input type="hidden" name="path" value="{{route('template.registerForm')}}">
                     </form>
                  </div>
                 </div>
               </div>
        </section>



     <section id="seven" class="projects-section  bg-orange text-white" >
          <div class="container">
            <div class="row ">
              <div class="col-lg-8 mx-auto ">
                <h4 class="text-center text-uppercase font-weight-bold pb-3" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">CAMPAÑAS DE DESPISTAJE</h4>
               </div>

            </div>
            <div class="row">
              <div class="col-md-6" data-anijs="if: scroll, on: window, do:bounceInRight  animated, before: scrollReveal">
                 <p class="text-dark-50 text-justify" >
                  <ul>
                    <li>
                      <b>Centros de Prevención:</b>
                        Realízate un despistaje de cáncer de piel por una donación de <span class="font-weight-bold text-20">S/. 30.00 </span>en cualquiera de nuestros 3 centros de prevención.
                        <strong>
                         La campaña se realizará desde el lunes 17 de Diciembre. La atenciòn es de lunes a viernes de 8:00 am a 5:00 pm y sábados de 8:00 am a 11:00 am.
                      </strong>

                      </span></li>
                       <br>
                    <li >

                      <b>Unidades Móviles:</b> Nuestras 3 unidades, visitarán puntos clave de la ciudad como municipalidades, construcciones, comisarias, entre otros.
                    </li>
                  </ul>
                  </p>
              </div>
              <div class="col-md-6" data-anijs="if: scroll, on: window, do:bounceInLeft  animated, before: scrollReveal">
                <p class="text-dark-50 text-justify" >

                  <p>Cronograma de Playas 2019</p>
                 <!-- <ul>
                    <li>Playa Las Sombrillas</li>
                    <li>Playa los Yuyos</li>
                    <li>Playa Agua Dulce</li>
                    <li>Playa Waikiki</li>
                    <li>Playa La punta</li>
                    <li>Playa Ancon</li>
                  </ul>-->

                  <!--Table-->
                    <table id="tablePreview" class="table table-sm table-bordered table-hover">
                    <!--Table head-->
                      <thead>
                        <tr>
                          <td colspan="2">Fechas</td>
                          <td>Playas </td>
                          <td>Distritos</td>
                        </tr>
                      </thead>
                      <!--Table head-->
                      <!--Table body-->
                      <tbody>
                        <tr>
                          <td rowspan="5">Enero</td>
                        </tr>
                        <tr>
                          <td>5 y 6</td>
                          <td>Playa Agua Dulce</td>
                          <td>Chorrillos</td>
                        </tr>
                        <tr>
                          <td>12 y 13</td>
                          <td>Playa Agua Dulce</td>
                          <td>Chorrillos</td>
                        </tr>
                        <tr>
                          <td>19 y 20</td>
                          <td>Las Sombrías</td>
                          <td>Barranco</td>
                        </tr>
                        <tr>
                          <td>26 y 27</td>
                          <td>Los Yuyos</td>
                          <td>Barranco</td>
                        </tr>

                        <tr>
                          <td rowspan="5">Febrero</td>
                        </tr>
                         <tr>
                          <td>2 y 3</td>
                          <td>Waikiki</td>
                          <td>Miraflores</td>
                        </tr>
                        <tr>
                          <td>9 y 10</td>
                          <td>La Punta</td>
                          <td>La Punta</td>
                        </tr>
                        <tr>
                          <td>16 y 17</td>
                          <td>Ancon</td>
                          <td>Ancon</td>
                        </tr>
                        <tr>
                          <td>23 y 24</td>
                          <td>Agua Dulce</td>
                          <td>Chorrillos</td>
                        </tr>

                      </tbody>
                      <!--Table body-->
                    </table>
                    <!--Table-->


                </p>
              </div>
            </div>

      </div>


      <div class="container">

            <div class="row ">
              <div class="col-lg-8 mx-auto mt-4 mt-4 mt-4 ">
                <h4 class="text-center text-uppercase font-weight-bold pb-3" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">FILIALES</h4>
               </div>

            </div>
            <div class="row">

              <div class="col-md-4 " data-anijs="if: scroll, on: window, do: bounceIn animated, before: $scrollReveal">
                  <p class="text-dark-50 text-justify" >
                   <h3 class="text-center">Chiclayo:</h3>
                   <p class="text-center">Feria  informativa y visita de playas</p>
                      <ul>
                          <li>03/02/19 - Playa Puerto Eten</li>
                          <li>10/02/19 - Caleta San José</li>
                          <li>24/02/19 - Santa Rosa</li>
                      </ul>
                  </p>
              </div>

              <div class="col-md-4" data-anijs="if: scroll, on: window, do: rubberBand animated, before: $scrollReveal">
                  <p class="text-dark-50 text-justify" >
                   <h3 class="text-center">Filial Chincha:</h3>
                   <p class="text-center">Feria  informativa y visita de playas</p>
                      <ul>
                           <li>23/01/19 - Municipalidad de Chincha Alta- Auditorio del Centro Cultural.</li>
                           <li>24/01/19 - Fabrica Prolan.</li>
                           <li>05/02/19 - Local de COED.</li>
                           <li>13/02/19 - Municipalidad de Chincha Baja.</li>
                      </ul>
                  </p>
              </div>
               <div class="col-md-4" data-anijs="if: scroll, on: window, do: bounceIn animated, before: $scrollReveal">
                 <p class="text-dark-50 text-justify" >
                   <h3 class="text-center">Filial de Cajamarca:</h3>
                   <p class="text-center">Feria  informativa y visita de playas</p>
                    <ul>
                       <li>20/02/19 - La Colpa</li>
                       <li>22/02/19 - local de Policía de Transito vía de Evitamiento norte</li>
                       <li>21/02/19 - Huacariz</li>
                    </ul>
                  </p>
              </div>
              <div class="col-md-4 col-sm-12 offset-md-4" data-anijs="if: scroll, on: window, do: rubberBand animated, before: $scrollReveal">
                 <p class="text-dark-50 text-justify" >
                   <h3 class="text-center">Filial Arequipa:</h3>
                   <p class="text-center">Feria  informativa y visita de playas</p>
                      <ul>
                        <li>21/01/19 - Cuartel general de Zamacola.</li>
                        <li>22/01/19 - Cuartel general Salaverry.</li>
                        <li>23/01/19 - Cuartel general Bustamante.</li>
                        <li>24/01/19 - Playa Mollendo.</li>
                        <li>25/01/19 - Playa Camaná.</li>
                        <li>28/01/19 - Canillitas.</li>
                        <li>29/01/19 - Mercado San Camillo.</li>
                        <li>30/01/19 - Complejo Deportivo José Luis Bustamante.</li>
                        <li>31/01/19 - Playa la punta.</li>
                        <li>04/02/19 - Mercado San Camilo Día del Lunar.</li>
                        <li>10/02/19 - Mercado de Zamacola.</li>
                      </ul>
                  </p>
              </div>
            </div>


      </div>
    </section>

     <!-- maps Section -->
   <section id="eight" class="map2-section" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">
        <div class="row">
            <iframe src="{{url("mapsolo.html")}}" height="450" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!-- Footer -->
    <footer class="small text-center text-white-50 bg-orange" data-anijs="if: scroll, on: window, do:bounceIn animated, before: scrollReveal">
      <div class="container">
          <div class="row d-flex justify-content-center flex-column">
            <div class="p-1 text-white">
              Central telefónica (01) 204 0404 | Av. Brasil 2746, Pueblo Libre | Av. Nicolás de Piérola 727, Lima | Av. Angamos Este 2514, Surquillo
              2018 Liga Contra el Cáncer
            </div>
             <div class="p-1 text-white">
              <a href="https://twitter.com/LigaCancerPeru" target="_blank" class="mx-2 ">
                    <i class="fab fa-twitter text-white"></i>
                  </a>
                  <a href="https://www.facebook.com/LigaCancer" target="_blank" class="mx-2">
                    <i class="fab fa-facebook-f text-white"></i>
                  </a>
                  <a href="https://www.youtube.com/channel/UCSm6XdI7acLsUq_KXTt0Bhg/videos" target="_blank" class="mx-2">
                    <i class="fab fa-youtube text-white"></i>
                  </a>
                  <a href="https://www.instagram.com/ligacancer/" target="_blank" class="mx-2">
                    <i class="fab fa-instagram text-white"></i>
                  </a>

            </div>
                 <div class="py-4 text-white">
                  ©Todos los Derechos Reservados - Liga Contra el C&aacute;ncer 2018
                </div>
                </div>
            </div>
          </div>

    </footer>

    <!-- Return to Top -->

    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <!-- Bootstrap core JavaScript -->
    {{ Html::script('template/js/jquery.min.js') }}
    {{ Html::script('template/js/bootstrap.bundle.min.js') }}
    <!-- Plugin JavaScript -->
    {{ Html::script('template/js/jquery.easing.min.js') }}

    <!-- Custom scripts for this template -->
    {{ Html::script('template/js/grayscale.min.js') }}
    <!-- ani js-->
    {{ Html::script('template/js/anijs-min.js') }}
    {{ Html::script('template/js/helpers/scrollreveal/anijs-helper-scrollreveal-min.js') }}

    <!-- Jq validate-->
    {{ Html::script('template/js/jquery.validate.min.js') }}

    <!-- Jq Mask -->
    {{ Html::script('template/js/jquery.mask.min.js') }}

    <!-- Jq alertify-->
    {{ Html::script('template/js/alertify.min.js') }}

    <!-- Jown carousel-->
     {{ Html::script('template/js/jquery.mask.min.js') }}

         <!-- own-carousel -->
    {{ Html::script('template/js/owl.carousel.min.js') }}

    {{ Html::style('template/css/owl.carousel.min.css') }}

    <style>
      .owl-theme .owl-controls .owl-page {
          display: inline-block;
      }
      .owl-theme .owl-controls .owl-page span {
          background: none repeat scroll 0 0 #869791;
          border-radius: 20px;
          display: block;
          height: 12px;
          margin: 5px 7px;
          opacity: 0.5;
          width: 12px;
      }
    </style>



    {{ Html::script('template/js/jquery.immersive-slider.min.js') }}







     <!-- recapcha -->
     {{ Html::script('https://www.google.com/recaptcha/api.js') }}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

     {{ Html::script('template/js/jquery-modal-video.min.js') }}

     {{ Html::script('template/js/js_own.js') }}

   <script type="text/javascript">
      $( function() {
        $("#immersive_slider").immersive_slider({
          container: ".projects-section1"
        });


      });



    </script>
  </body>

</html>
