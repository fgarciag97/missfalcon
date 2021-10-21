<?php if ($estatus) { ?>
  <?php if (!$verificacion) { ?>
    <!-- =============================================================== -->
    <style type="text/css">
          .logo{
            width: 15%;
          }
          .liston{
            font-size: 220%;
            color: bisque;
            padding: 30px 0px 0px 0px;
          }
          @media (max-width: 820px) {
              .logo{
                width: 50%;
              }
              .liston{
                font-size: 150%;
                color: bisque;
                padding: 20px 0px 0px 0px;
              }
          }
        </style> 
    <div style="height: 50vh; background-image: url(/img/fondo_publico.png); background-size: cover;">
      <center>
        <div>
          <h1 style="padding: 40px; color: white;">¡Tú decides quien gana!</h1>
          <p style="color: white;">Hoy te conviertes en jurado, es momento de que elijas cual de nuestras candidatas es merecedora del listón</p>
          <h1 class="liston">POPULARIDAD <strong>2021</strong></h1>
          <a href="https://systecsgl.ga/"><img src="/img/systecsgl.png" class="logo"></a>
        </div>
      </center>
    </div>
    <!-- =============================================================== -->
    <nav>
      <?php foreach($consulta as $key) { ?>
      <ul style="background-image: url('<?= $this->Miss->Foto('candidatas', $key['photo_dir'], $key['photo']); ?>');">
        <p class="info">
        <span><?= $key['municipio']?></span>
        <strong><?= $key['nombres']?></strong>
        <!-- <?= $this->Form->postLink('Votar', ['action' => 'index', $key['id']], ['class' => 'boton', 'confirm' => '¿Seguro de realizar su voto?']);?> -->

        <a href="votaciones/index/<?=$key['id']?>" style="text-decoration: none;">Votar</a>
        </p>
      </ul>
    <?php } ?>
    </nav> 
  <?php }else{ ?>
     <style type="text/css">
          .letras{
            font-size: 90px;
          }
          @media (max-width: 820px) {
            .letras{
              font-size: 60px !important;
            }
          }
    </style> 
  <div class="sp-container">
    <div class="sp-content">
      <div class="sp-globe"></div>
      <h2 class="frame-1">TU VOTO</h2>
      <h2 class="frame-2">HA SIDO</h2>
      <h2 class="frame-3 letras">REALIZADO</h2>
      <h2 class="frame-4">CON EXITO!</h2>
      <h2 class="frame-5">
        <span class="letras">GRACIAS</span>
        <span class="letras">POR</span>
        <span class="letras">PARTICIPAR</span>
      </h2>
      <a class="sp-circle-link" href="https://systecsgl.ga/"><img src="/img/systecsgl.png" style="width: 80%; vertical-align: sub;"></a>
    </div>
  </div>
  <?php } ?>
<?php }else{ ?>
  <style type="text/css">
    
.text {
  font-size:28px;
  font-family:helvetica;
  font-weight:bold;
  color:#71d90b;
  text-transform:uppercase;
}
  .parpadea {
    
    animation-name: parpadeo;
    animation-duration: 4s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;

    -webkit-animation-name:parpadeo;
    -webkit-animation-duration: 4s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
  }

  @-moz-keyframes parpadeo{  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
  }

  @-webkit-keyframes parpadeo {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
     100% { opacity: 1.0; }
  }

  @keyframes parpadeo {  
    0% { opacity: 1.0; }
     50% { opacity: 0.0; }
    100% { opacity: 1.0; }
  }
  </style>
  <style type="text/css">
    .tamano{
      font-size: 250%;
    }
  @media (max-width: 820px) {
      .tamano{
        font-size: 150%;
      }
  }
</style> 
  <div style="height: 100vh;">
      <center>
        <div style="padding: 50vh 0 0 0;">
          <h1 style="color: white;" class="parpadea tamano">NO HABILITADO AÚN</h1>
          <h3 style="color: white;" class="parpadea tamano">Por favor espere...</h3>
        </div>
      </center>
    </div>
<?php } ?>