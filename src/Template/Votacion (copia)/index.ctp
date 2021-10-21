<script type="text/javascript">
    ronda_actual = <?=$ronda['id']?>

    setInterval('consultar()',10000);

    function consultar(){
        $.ajax({
            method: 'get',
            url: "/votacion/consulta/" + ronda_actual,
            success: function(response) {
                if(!response[0]){
                  window.location.reload(); 
                }
            }
        })
    }

    let cuantos_elementos = <?= count($candidatas) ?>;
    let posicion = 1;

    function atras(){
      if(posicion != 1){
        posicion--
      }
      if(<?= $cantidad ?> > 5 && posicion == 0){
          if(<?= $cantidad-5 ?> == 5){
            window.location.href="/votacion/";
          }else{
            window.location.href="/votacion/n/<?= $cantidad-5 ?>";
          }
        }
    }

    function adelante(){
      if(cuantos_elementos<=posicion){
        if(<?= $n ?> > <?= $cantidad ?>){
          window.location.href="/votacion/n/<?= $cantidad+5 ?>";
        }
      }else{
        posicion++
      }
    }

    function votar(ronda, candidata, puntaje){
        if(ronda && candidata && puntaje){
            $.ajax({
                method: 'get',
                url: "/votacion/votar/" + ronda + "/" + candidata + "/" + puntaje
            })
        }
    }
</script>

<div class="wrapper">
    <div class="content">
        <div class="bg-shape">
            <img src="/img/Votacion/miss_falcon.png">
            </img>
        </div>
        <div class="product-img">
            <!--------------------------------------------------------------------------------------------------->
            <?php foreach ($candidatas as $key){ ?>
                <div class="product-img__item" id="img<?=$key['id']?>">
                  <img src="<?= $this->Miss->Foto('candidatas', $key['photo_dir'], $key['photo']); ?>" class="product-img__img" style="width: 85%; border-radius: 10%">
                </div>
             <?php } ?>
            <!--------------------------------------------------------------------------------------------------->
            <div class="product-img__item" id="img0">
              <img src="/img/Votacion/logo2.jpeg" class="product-img__img" style="width: 85%; border-radius: 10%">
            </div>
            <!--------------------------------------------------------------------------------------------------->
        </div>
        <div class="product-slider">
            <button class="prev disabled" onclick="atras()">
                <span class="icon">
                    <i class="fa fa-arrow-left"></i>
                </span>
            </button>
            <button class="next" onclick="adelante()">
                <span class="icon">
                    <i class="fa fa-arrow-right"></i>
                </span>
            </button>
            <div class="product-slider__wrp swiper-wrapper">
                <!--------------------------------------------------------------------------------------------------->
                <?php foreach ($candidatas as $key){ 
                  $p = 0;
                  if($key != 0){
                  foreach ($calificacion as $key2) {
                    if($key['id'] == $key2['id_candidata']){
                      $p = $key2['puntuacion'];
                    }
                  }
                ?>
                  <div class="product-slider__item swiper-slide" data-target="img<?=$key['id']?>">
                      <div class="product-slider__card">
                          <img class="product-slider__cover" src="/img/Votacion/fondo3.jpg">
                              <div class="product-slider__content">
                                  <h1 class="product-slider__title">
                                      <?= $key['nombres'] ?>
                                  </h1>
                                  <span class="product-labels__title">
                                      EDAD <?= $key['edad'] ?>
                                  </span>
                                  <span class="product-slider__price" style="font-size: 22px;">
                                      Municipio <?= ucwords($key['municipio']) ?>
                                  </span>
                                  <div class="product-ctr">
                                      <div class="product-labels">
                                          <div class="product-labels__title">
                                              MEDIDAS
                                          </div>
                                          <div class="product-labels__group">
                                              <label class="product-labels__item">
                                                  <input class="product-labels__checkbox">
                                                      <span class="product-labels__txt">
                                                          Busto <?= $key['busto'] ?>
                                                      </span>
                                                  </input>
                                              </label>
                                              <label class="product-labels__item">
                                                  <input class="product-labels__checkbox">
                                                      <span class="product-labels__txt">
                                                          Cintura <?= $key['cintura'] ?>
                                                      </span>
                                                  </input>
                                              </label>
                                              <label class="product-labels__item">
                                                  <input class="product-labels__checkbox">
                                                      <span class="product-labels__txt">
                                                          Cadera <?= $key['cadera'] ?>
                                                      </span>
                                                  </input>
                                              </label>
                                          </div>
                                      </div>
                                      <span class="hr-vertical">
                                      </span>
                                      <div class="product-inf">
                                          <div class="product-inf__percent">
                                              <div class="product-inf__percent-circle">
                                                  <svg height="100" viewbox="0 0 100 100" width="100" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="50" cy="50" fill="none" r="47" stroke="#a26f2b"  stroke-width="6">
                                                      </circle>
                                                  </svg>
                                              </div>
                                              <div class="product-inf__percent-txt">
                                                  <?= $key['estatura'] ?>
                                              </div>
                                          </div>
                                          <span class="product-inf__title">
                                              ESTATURA
                                          </span>
                                      </div>
                                  </div>
                                  <div class="product-slider__bottom">
                                      <p class="clasificacion" style="font-size: 30px; width: 50%">
                                        <input id="radio1<?=$key['id']?>" type="radio" name="estrellas<?=$key['id']?>" value="5" onclick="votar(<?=$ronda['id']?>, <?=$key['id']?>, 5)" <?= ($p == 5) ? 'checked' : '' ?>>
                                        <label for="radio1<?=$key['id']?>">♛</label>

                                        <input id="radio2<?=$key['id']?>" type="radio" name="estrellas<?=$key['id']?>" value="4" onclick="votar(<?=$ronda['id']?>, <?=$key['id']?>, 4)" <?= ($p == 4) ? 'checked' : '' ?>>
                                        <label for="radio2<?=$key['id']?>">♛</label>

                                        <input id="radio3<?=$key['id']?>" type="radio" name="estrellas<?=$key['id']?>" value="3" onclick="votar(<?=$ronda['id']?>, <?=$key['id']?>, 3)" <?= ($p == 3) ? 'checked' : '' ?>>
                                        <label for="radio3<?=$key['id']?>">♛</label>

                                        <input id="radio4<?=$key['id']?>" type="radio" name="estrellas<?=$key['id']?>" value="2" onclick="votar(<?=$ronda['id']?>, <?=$key['id']?>, 2)" <?= ($p == 2) ? 'checked' : '' ?>>
                                        <label for="radio4<?=$key['id']?>">♛</label>

                                        <input id="radio5<?=$key['id']?>" type="radio" name="estrellas<?=$key['id']?>" value="1" onclick="votar(<?=$ronda['id']?>, <?=$key['id']?>, 1)" <?= ($p == 1) ? 'checked' : '' ?>>
                                        <label for="radio5<?=$key['id']?>">♛</label>
                                      </p>

                                  </div>
                              </div>
                          </img>
                      </div>
                  </div>
                <?php  }else{ ?>

                  <!--------------------------------------------------------------------------------------------------->
                <div class="product-slider__item swiper-slide" data-target="img0">
                      <div class="product-slider__card">
                          <img class="product-slider__cover" src="/img/Votacion/fondo3.jpg">
                              <div class="product-slider__content">
                                  <h1 class="product-slider__title">
                                      Ronda Finalizada
                                  </h1>
                                    <a class="social__item" href="/votacion">
                                      <img  class="social__img" src="/img/Votacion/miss_falcon.png">
                                          <span class="social__txt">
                                              Siguiente Ronda
                                          </span>
                                      </img>
                                  </a>
                              </div>
                          </img>
                      </div>
                  </div>

                <!--------------------------------------------------------------------------------------------------->

                <?php }} ?>

                
            </div>
        </div>
    </div>
    <div class="social">
        <a class="social__item" href="/inicio">
            <img class="social__img" src="/img/Votacion/miss_falcon.png">
                <span class="social__txt">
                    Volver a Inicio
                </span>
            </img>
        </a>
        <a class="social__item" href="#">
            <img class="social__img" src="/img/Votacion/miss_falcon.png">
                <span class="social__txt">
                    Ronda Actual: <?= $ronda['denominacion'] ?>
                </span>
            </img>
        </a>
        <!-- <a class="social__item" href="/votacion/n/<?= @$cantidad + 5 ?>">
            <img class="social__img" src="/img/Votacion/miss_falcon.png">
                <span class="social__txt">
                    Siguientes Candidatas
                </span>
            </img>
        </a> -->
    </div>
</div>
