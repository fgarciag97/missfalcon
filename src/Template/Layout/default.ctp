<?php $titulo = 'Miss Falcón 2021'; ?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $titulo ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <?= $this->Html->css([
        'Principal/bootstrap.min.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'/*'Default/fontsgoogle.css'*/,
        'Default/nucleo-icons.css',
        'Default/nucleo-svg.css',
        'Default/soft-ui-dashboard.css?v=1.0.3',
        'fontawesome-all.min.css',
        'generico.css'
    ]) ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script([
        'https://kit.fontawesome.com/42d5adcbca.js'  /*'Default/42d5adcbca.js'*/,
    ]) ?>
    <?= $this->fetch('script') ?>

</head>
<body class="g-sidenav-show  bg-gray-100">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="/">
            <img src="/img/Default/miss_falcon.png" class="navbar-brand-img h-100">
            <span class="ms-1 font-weight-bold">Miss Falcón 2021</span>
          </a>
        </div>
    
        <hr class="horizontal dark mt-0">

        <div class="collapse navbar-collapse  w-auto  max-height-vh-60 h-60" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-home" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Inicio</span>
              </a>
            </li>
            <?php if(@$this->request->getSession()->read("Auth.User.privilegio") == 0 or @$this->request->getSession()->read("Auth.User.privilegio") == 1) { ?>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/candidatas"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-crown" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Candidatas</span>
              </a>
            </li>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/preview/candidatas"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-image" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Preview</span>
              </a>
            </li>
            <?php } ?>
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <?php if(@$this->request->getSession()->read("Auth.User.privilegio") == 0 or @$this->request->getSession()->read("Auth.User.privilegio") == 1 or @$this->request->getSession()->read("Auth.User.privilegio") == 3) { ?>
            <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administración</h6>
            </li>
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <?php if(@$this->request->getSession()->read("Auth.User.privilegio") == 0 or @$this->request->getSession()->read("Auth.User.privilegio") == 1) { ?>
            <li class="nav-item">
              <a class="nav-link" href="/categorias"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-list-alt" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Categorias</span>
              </a>
            </li>
            <?php } ?>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/rondas"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-exchange-alt" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Rondas</span>
              </a>
            </li>
            <?php if(@$this->request->getSession()->read("Auth.User.privilegio") == 0 or @$this->request->getSession()->read("Auth.User.privilegio") == 1) { ?>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/patrocinantes"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-photo" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Patrocinantes</span>
              </a>
            </li>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/missprincipal"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-photo" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Miss (Principal)</span>
              </a>
            </li>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/usuarios"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-users" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Usuarios</span>
              </a>
            </li>
            <!-- ============================================================ -->
            <li class="nav-item">
              <a class="nav-link" href="/reporte/reporte"> <!-- active -->
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-file-pdf" style="height: 15px; color: #000;"></i>
                </div>
                <span class="nav-link-text ms-1">Reporte</span>
              </a>
            </li>
          <?php }} ?>
          </ul>
        </div>
        <div class="card-body text-start p-3 w-100">
            <a href="https://systecsgl.ga/" target="_blank" class="btn btn-white btn-sm w-100 mb-0">
                <img src="/img/systecsgl.png" style="width: 100%">
            </a>
        </div>
    </aside>



    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">

                  <?= $this->html->link('<i class="fa fa-user me-sm-1"></i><span class="d-sm-inline d-none">' . @$this->request->session()->read('Auth.User.nombres_mostrar') . '</span>', ['controller' => 'Login', 'action' => 'logout'], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea cerrar la sesión?', 'class' => 'nav-link text-body font-weight-bold px-0']) ?>

                  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav"><i class="fa fa-align-justify"></i></a>
                  </li>
                  
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <?= $this->Flash->render() ?>
        
        <div class="container-fluid py-4">
            <?= $this->fetch('content') ?>
            <footer class="footer pt-3" style="bottom: 0; ">
                <div class="container-fluid">
                  <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-8 mb-lg-0 mb-4">
                      <div class="copyright text-center text-sm text-muted text-lg-start">
                        <i class="fa fa-crown"></i> Miss Falcón © <?= date('Y') ?> - AVOS (Automatic Voting System) - Patrocinado por &nbsp; <a href="https://systecsgl.ga/" class="font-weight-bold" target="_blank">SystecSGL</a>
                      </div>
                    </div>
                  </div>
                </div>
            </footer>
        </div>
        
    </main>

    <?= $this->Html->script([
        'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js' /*'Default/jquery.js'*/,
        'Default/popper.min.js',
        'Principal/bootstrap.min.js',
        'Default/perfect-scrollbar.min.js',
        'Default/smooth-scrollbar.min.js',
        'Default/chartjs.min.js',
        'funciones',
        'moneda'
    ]) ?>
    <?= $this->fetch('script') ?>

  
  <?= $this->Html->script([
        'https://buttons.github.io/buttons.js' /*'Default/buttons.js'*/,
        'Default/soft-ui-dashboard.min.js?v=1.0.3'
    ]) ?>
    <?= $this->fetch('script') ?>

    

</body>
</html>
