<div class="row mt-4">
    <div class="col-lg-6">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('/img/Default/fondo.jpg');">
            <span class="mask bg-gradient-dark">
            </span>
            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
              <a href="/preview">
                <h5 class="text-white font-weight-bolder pt-2 icon-move-right">
                    <i class="fa fa-crown"></i> &nbsp; Recorrido de las candidatas <i aria-hidden="true" class="fas fa-arrow-right text-sm ms-1"></i>
                </h5>
              </a>
            </div>
        </div>
    </div>
    <?php if(@$this->request->getSession()->read("Auth.User.privilegio") == 0 or @$this->request->getSession()->read("Auth.User.privilegio") == 2) { ?>
    <div class="col-lg-6">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('/img/Default/fondo.jpg');">
            <span class="mask bg-gradient-dark">
            </span>
            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
              <a href="/votacion">
                <h5 class="text-white font-weight-bolder pt-2 icon-move-right">
                    <i class="fa fa-crown"></i> &nbsp; Votación Oficial <i aria-hidden="true" class="fas fa-arrow-right text-sm ms-1"></i>
                </h5>
              </a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<script type="text/javascript">
    existe = <?= ($ronda) ? $ronda['id'] : 0 ?>

        setInterval('contador()',3000);

    function contador(){
        if(existe){
            $.ajax({
                    method: 'get',
                    url: "/inicio/consulta/",
                    success: function(response) {
                        response[0].forEach(element => document.getElementById('caraja'+element['id_candidata']).innerHTML = element['calificacion'] + '/<?= @$jurados * 5 ?> (' + Math.round((element['calificacion']/<?= @$jurados * 5 ?>)*100 ,2) + '%)');
                    }
                })
        }
    }
</script>

<div class="row my-4">
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>
                            Candidatas en la Gala 
                        </h6>
                        <p class="text-sm mb-0">
                            <i aria-hidden="true" class="fa fa-check text-info">
                            </i>
                            <span class="font-weight-bold ms-1" id="ronda"> RONDA <?= $ronda['denominacion'] ?> </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nombres
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Edad
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Municipio
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Puntaje
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($candidatas as $key) { 

                            $p = 0;

                            foreach ($calificacion as $key2) { 
                                if($key['id'] == $key2['id_candidata']){
                                    $p += $key2['puntuacion'];
                                }
                            }

                            ?>
                            <tr>
                                <td>
                                    
                                    <div class="d-flex px-2 py-1">
                                        <div class="avatar-group mt-2">
                                            <a class="avatar avatar-xs rounded-circle">
                                                <img src="<?= $this->Miss->Foto('candidatas', $key['photo_dir'], $key['photo']); ?>">
                                                </img> 
                                            </a>
                                        </div>
                                        &nbsp;
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">
                                                <?= $key['nombres'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold">
                                        <?= $key['edad'] ?>
                                    </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold">
                                        <?= $key['municipio'] ?>
                                    </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold carajas" id="caraja<?= $key['id'] ?>">
                                                    <?= $p ?>  / <?= @$jurados * 5 ?> (<?= round(($p / @$jurados * 5)*100, 2) ?>%)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function apertura(id, ronda){
            if(id){
                $.ajax({
                    method: 'get',
                    url: "/inicio/apertura/" + id,
                    success: function(response) {

                        var elements = document.getElementsByClassName('timeline-step');
                        Array.prototype.forEach.call(elements, function(element) {
                            element.innerHTML = '<i class="ni ni-button-pause text-danger text-gradient"></i>';
                        });

                        document.getElementById('boton'+id).innerHTML = ''
                        document.getElementById('ronda').innerHTML = ''
                        if(response[0]['apertura']){
                            document.getElementById('boton'+id).innerHTML = '<i class="ni ni-button-play text-success text-gradient"></i>'
                            document.getElementById('ronda').innerHTML = 'Ronda ' + ronda

                            var elements = document.getElementsByClassName('carajas');
                            Array.prototype.forEach.call(elements, function(element) {
                                element.innerHTML = '0/<?= @$jurados * 5 ?> (0%)';
                            });
                            existe = 1
                        }else{
                            document.getElementById('boton'+id).innerHTML = '<i class="ni ni-button-pause text-danger text-gradient"></i>'
                            existe = 0
                        }

                    }
                })
            }
        }
    </script>

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="card-header pb-0">
                <h6>
                    Rondas de la Gala
                </h6>
                <p class="text-sm">
                    <span class="font-weight-bold">
                        <?= count($rondas) ?>
                    </span>
                    rondas
                </p>
            </div>
            <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                    
                    <?php foreach ($rondas as $key) { ?>
                      <div class="timeline-block mb-3">
                        <?php if(@$this->request->getSession()->read("Auth.User.privilegio") <> 2) { ?>
                          <div type="button" class="timeline-step" onclick="apertura(<?= $key['id'] ?>, '<?= $key['denominacion'] ?>')" id="boton<?= $key['id'] ?>">
                                <?= ($key['apertura']) ? '<i class="ni ni-button-play text-success text-gradient"></i>' : '<i class="ni ni-button-pause text-danger text-gradient"></i>' ?>
                          </div>
                        <?php }else{ ?>
                            <div class="timeline-step" id="boton<?= $key['id'] ?>">
                                <?= ($key['apertura']) ? '<i class="ni ni-button-play text-success text-gradient"></i>' : '<i class="ni ni-button-pause text-danger text-gradient"></i>' ?>
                          </div>
                        <?php } ?>
                          <div class="timeline-content">
                              <h6 class="text-dark text-sm font-weight-bold mb-0">
                                  <?= $key['denominacion'] ?>
                              </h6>
                          </div>
                      </div>
                    <?php } ?>

                </div>

                <br>
                <center>
                    <a type="button" class="btn btn-sm mb-0" href="/resultados">Resultados</a>
                </center><center>
                    <a type="button" class="btn btn-sm mb-0" href="/resultados-interactivos">Resultados Interactivos</a>
                </center>

                <br>
                <br>

                <h6>
                    Votacion Interactiva Online
                </h6>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        
                          <div class="timeline-block mb-3">
                            <?php if(@$this->request->getSession()->read("Auth.User.privilegio") <> 2) { ?>
                              <a type="button" class="timeline-step" href="/inicio/votaciones/<?= $estatus ?>">
                                    <?= (!$estatus) ? '<i class="ni ni-button-play text-success text-gradient"></i>' : '<i class="ni ni-button-pause text-danger text-gradient"></i>' ?>
                              </a>
                            <?php } ?>
                              <div class="timeline-content">
                                  <h6 class="text-dark text-sm font-weight-bold mb-0">
                                      <?= (!$estatus) ? 'VOTACIONES ABIERTAS' : 'VOTACIONES CERRADAS' ?>
                                  </h6>
                              </div>
                          </div>

                    </div>
                </div>
        </div>
    </div>
</div>