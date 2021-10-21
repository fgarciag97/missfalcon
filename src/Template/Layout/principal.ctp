<?php $titulo = 'Miss Falcón 2021'; ?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Miss Falcón 2021">
    <title>
        <?= $titulo ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <?= $this->Html->css([
        'Principal/bootstrap.min.css',
        'Principal/select2.min.css',
        'Principal/owl.carousel.min.css',
        'Principal/lightcase.css',
        'https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css' /*'Principal/aos2.css'*/,
        'https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700'/*'Principal/fon.css'*/,
        'Principal/style.min.css',
        'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css'/*'Principal/icon-font.min.css'*/,
        'https://use.fontawesome.com/releases/v5.8.1/css/all.css',/*'Principal/all.css'*/
        'generico'
    ]) ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script([
        'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js' /*'Principal/modernizr.js'*/
    ]) ?>
    <?= $this->fetch('script') ?>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">

<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/principal">
            <h3 class="font-weight-bolder mb-0"><img src="/img/Principal/obj_triangle.png" style="width: 40px;"> MISS</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a type="button" class="nav-link" data-toggle="modal" data-target="#login" href="#" style="color: white;">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- PRINCIPAL -->
<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
    <h1 class="display-1 mb-4" style="border: none !important">
        <style type="text/css">
            .logo {
                width: 60%;
                    animation: logo ease-in-out 5s infinite;
            }
            @keyframes logo {
                0% { transform: translate(0,  0px); }
                50%  { transform: translate(0, 15px); }
                100%   { transform: translate(0, -0px); }   
            }

            @media (max-width: 820px) {
                .logo {
                        animation: logo ease-in-out 5s infinite;
                    max-width: none;
                    margin-left:  -30%;
                    width: 160%;
                }
            }
        </style>
        <img src="/img/Principal/miss_falcon.png" class="logo">
    </h1>
  </div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>
  <div class="circle-1" style="box-shadow: 0 0 27px #baab28;">
  </div>
  <div class="circle-2" style="box-shadow: 0 0 27px #baab28;">
  </div>
  <div class="circle-3" style="box-shadow: 0 0 27px #baab28;">
  </div>
  <div class="triangle triangle-2">
    <img src="/img/Principal/obj_triangle.png">
  </div>
  <div class="triangle triangle-3">
    <img src="/img/Principal/obj_triangle.png">
  </div>
  <div class="triangle triangle-4">
    <img src="/img/Principal/obj_triangle.png">
  </div>
</div> 
<!-- MISS SALIENTES -->
<section id="portfolio" class="bg-white">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap">
                <h2 class="section-title">Miss <b style="color: #aa8212;">Falcón</b> saliente</h2>
                <p class="section-sub-title">Estas son nuestras modelos ganadoras de los anteriores concursos</p>
            </div>
            <div class="row">
                <div class="col-md-12 portfolio-holder mt-3">
                    <div class="grid-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="grid-item minimalism" data-aos="fade-up">
                            <img src="/img/Principal/saliente1.jpg" alt="portfolio-img" class="portfolio-item">
                        </div>
                        <div class="grid-item vintage" data-aos="fade-up">
                            <img src="/img/Principal/saliente2.jpg" alt="portfolio-img" class="portfolio-item">
                        </div>
                        <div class="grid-item creative grid-item-height" data-aos="fade-up">
                            <img src="/img/Principal/saliente3.jpg" alt="portfolio-img" class="portfolio-item">
                        </div>
                        <div class="grid-item creative" data-aos="fade-up">
                            <img src="/img/Principal/saliente4.jpg" alt="portfolio-img" class="portfolio-item">
                        </div>
                        <div class="grid-item vintage" data-aos="fade-up">
                            <img src="/img/Principal/saliente6.jpg" alt="portfolio-img" class="portfolio-item">
                        </div>
                        <div class="grid-item creative" data-aos="fade-up">
                            <img src="/img/Principal/saliente5.jpg" alt="portfolio-img" class="portfolio-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BARRA -->
<section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(/img/Principal/bg.jpg);">
    <div class="container">
        <div class="section-content">
                <style type="text/css">
                    .barra {
                        width: 20%;
                            animation: barra ease-in-out 5s infinite;
                            margin-left: 40%;
                    }
                    @keyframes barra {
                        0% { transform: translate(0,  0px); }
                        50%  { transform: translate(0, 15px); }
                        100%   { transform: translate(0, -0px); }   
                    }

                    @media (max-width: 820px) {
                        .barra {
                            animation: barra ease-in-out 5s infinite;
                            max-width: none;
                            margin-left: 30%;
                            width: 40%;
                        }
                    }
                </style>
                <img src="/img/Principal/miss_falcon_small.png" class="barra">
        </div>
    </div>
</section>
<!-- CONCURSOS -->
<section id="features" class="bg-white">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title">
                    <b style="color: #aa8212;">Fotos de Candidatas</b>
                </h2>
                <p class="section-sub-title">Estas son las candidatas a participar en nuestro <b style="color: #aa8212;">Miss Falcón 2021</b></p>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 features-holder">
                    <div class="row">
                        <?php $posicion = 1; ?>
                        <?php foreach ($miss as $key) { ?>
                            <?php if($posicion == 1) {?>
                                <?php $posicion++;  ?>
                                <div class="col-md-4 col-sm-12 text-center mt-4">
                                    <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                        <div class="my-4">
                                            <?= $this->Html->image('../subidas/fotopricipalcandidatas/photo/'.$key->photo_dir.'/'.$key->photo, ['class' => 'img-responsive', 'style' => 'max-height: 300px !important']) ?>
                                        </div>
                                        <h4 style="color: #aa8212;"><?= $key['municipio']?></h4>
                                        <p><?= $key['nombres_candidata']?></p>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <?php $posicion = 1; ?>
                                <div class="col-md-4 col-sm-12 text-center">
                                    <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                        <div class="my-4">
                                            <?= $this->Html->image('../subidas/fotopricipalcandidatas/photo/'.$key->photo_dir.'/'.$key->photo, ['class' => 'img-responsive', 'style' => 'max-height: 300px !important']) ?>
                                        </div>
                                        <h4 style="color: #aa8212;"><?= $key['municipio']?></h4>
                                        <p><?= $key['nombres_candidata']?></p>
                                    </div>
                                </div>
                            <?php } ?> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TARJETA CON BARRA -->
<section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(/img/Principal/bg.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <iframe width="80%" height="400rem" style="box-shadow: 0 0 40px #1f1f1f;" 
                            src="https://www.youtube.com/embed/7x6jvFL9oKs">
                        </iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PALABRAS -->
<section id="testimonial" class="section-padding bg-fixed bg-white overlay" style="background-image: url(/img/Principal/bg-white.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="heading-section text-center">
                <h2 style="color: #baab28">
                    Palabras de los Organizadores
                </h2>
            </div>
            <div class="row">
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left" style="color: #655e20"></i>
                        <h4 class="testi-text">Nos estamos moviendo lentamente hacia un tiempo en el que finalmente las mujeres como yo podemos encontrar estos lugares en la <b>sociedad</b>, en donde finalmente podemos saber que somos hermosos y no solo es, sino que seguimos rompiendo los límites que nos habían dicho antes que no podíamos romper</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="/img/Principal/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">Maria Antoniela</p>
                                <p class="testi-desc mb-0">Miss 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TARJETA --> 
<!-- <section id="section-featurettes" class="featurettes">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="flip-left">
                            <img class="my-5" src="/img/Principal/app-profile-mockup.png" alt="">
                        </div>

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="fade-left">
                            <h4 class="mb-4">Capture every moments and share it to all your friends</h4>
                            <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet.</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">HTML5 95%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">CSS3 90%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  -->
<!-- LOGOS DE EMPRESAS --> 
<section id="client" class="overlay bg-fixed" style="background-image: url(/img/Principal/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-12">
                    <div class="title-wrap mb-5">
                        <h2>Empresas Asociadas</h2>
                    </div>
                </div>
                    <div class="col-md-12 client-holder">
                        <div class="client-slider owl-carousel">
                            <?php foreach ($logos as $key) { ?>
                                <div class="client-item">
                                    <?= $this->Html->image('../subidas/patrocinantes/photo/'.$key->photo_dir.'/'.$key->photo, ['class' => 'img-responsive']) ?>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
            </div>
        </div>
</section>
<!-- ESPACIO EN BLANCO -->
<section id="section-featurettes" class="featurettes">
    <div class="container">
        <div class="section-content">
            <div class="row">

            </div>
        </div>
    </div>
</section>
</div>
<footer class="bg-dark text-center text-white">
  <div class="text-center p-2" style="background:linear-gradient(to right, #000000ed, #b08611f7); padding: 1.5rem !important;">
    <!-- MOVIL -->
    <a href="https://systecsgl.ga/">
        <img href="https://systecsgl.ga/" src="/img/logo_solo.png" class="d-sm-block d-md-none" style="width: 25%; margin-bottom: 10px;">
    </a> 
    <ul class="list-inline-xxs" style="float: inherit;">
        <div class="Iam">
            <b>
                <p style="color: #ffffff">
                    <!-- ESCRITORIO -->
                    <a href="https://systecsgl.ga/" style="color: white; font-weight: 400;" class="d-none d-sm-none d-md-block">
                        AVOS - Automatic Voting System. Patrocinado por 
                        <strong style="color: #aa8212;">SysTecSGL C.A</strong>
                    </a> 
                    
                    <!-- MOVIL -->
                    <a href="https://systecsgl.ga/" style="color: white; font-weight: 400;" class="d-block d-sm-block d-md-none">
                        Patrocinado por <strong style="color: #aa8212;">SysTecSGL C.A</strong>
                    </a>
                </p> 
                <div class="innerIam">
                    <a href="https://systecsgl.ga/" style="color: white; font-size: 14px;">Ing. Luis Leal</a><br />
                    <a href="https://systecsgl.ga/" style="color: white; font-size: 14px;">Ing. Fely Garcia</a><br /> 
                    <a href="https://systecsgl.ga/" style="color: white; font-size: 14px;">Ing. José Sanchez</a><br />
                </div>
            </b>
        </div>
    </ul>
  </div>
</footer>

    <?= $this->Html->script([
        'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'/*'Principal/jquery.js'*/,
        'Principal/popper.min.js',
        'Principal/bootstrap.min.js',
        'Principal/select2.min.js',
        'Principal/owl.carousel.min.js',
        'Principal/jquery.stellar.js',
        'Principal/isotope.min.js',
        'Principal/lightcase.js',
        'Principal/waypoint.min.js',
        'https://unpkg.com/aos@next/dist/aos.js',
        'Principal/app.min.js',
        'funciones'
    ]) ?>
    <?= $this->fetch('script') ?>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

</body>
</html>
<?= @$this->element('login') ?>