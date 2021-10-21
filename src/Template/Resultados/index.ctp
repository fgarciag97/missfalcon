<div class="container-fluid">
    <div class="row">
        <?php foreach ($categorias as $key ) { ?> 
          <div class="col-lg-6 col-md-6 ms-sm-auto me-sm-0 mx-auto mt-3">
              <div class="col-auto my-auto">
                  <div class="h-100">
                      <h5 class="mb-1">
                          <?= $key['denominacion'] ?> 
                      </h5>
                  </div>
              </div>
              <div class="page-header min-height-150 border-radius-xl mt-4" style="background-image: url('/img/Votacion/fondo.jpg'); background-position-y: 50%;">
                  <span class="mask bg-gradient-primary opacity-6" style="background-image: linear-gradient(310deg, #CA8328 0%, #91541673 100%);">
                  </span>
              </div>
              <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                  <div class="row gx-4">
                      <?php foreach ($calificacion as $c ) { 
                         if($key['id'] == $c['id_categoria']){ 
                      ?> 
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img class="w-100 border-radius-lg shadow-sm" src="<?= $this->Miss->Foto('candidatas', $c['photo_dir'], $c['photo']); ?>"></img>
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1">
                                    <?= $c['nombres'] ?>
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                    <?= $c['municipio'] ?>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="avatar avatar-xl position-relative" >
                              <img class="w-100 border-radius-lg shadow-sm" src="/img/Votacion/miss_falcon.png"></img>
                            </div>
                        </div> -->
                      <?php break; }} ?>
                  </div>
              </div>







              <div class="col-12 col-xl-12">
                  <div class="card h-100">
                      <div class="card-header pb-0 p-3">
                          <h6 class="mb-0">
                              Puntaje por Candidatas
                          </h6>
                      </div>
                      <div class="card-body p-3">
                          <ul class="list-group">
                              <?php foreach ($calificacion as $c ) { 
                                 if($key['id'] == $c['id_categoria']){ 
                              ?> 
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img class="border-radius-lg shadow" src="<?= $this->Miss->Foto('candidatas', $c['photo_dir'], $c['photo']); ?>">
                                        </img>
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">
                                            <?= $c['nombres'] ?>
                                        </h6>
                                        <p class="mb-0 text-xs">
                                            <?= $c['municipio'] ?>
                                        </p>
                                    </div>
                                    <div class="pe-3 ps-0 mb-0 ms-auto" >
                                        <a class="btn btn-link text-dark px-3 mb-0" >
                                          <i class="fas fa-arrow-up text-dark me-2" aria-hidden="true"></i> 
                                          <?= $c['calificacion'] ?>/<?= $jurados*5*$rondas ?> (<?= round(($c['calificacion'] / ($jurados*5*$rondas))*100, 2) ?>%)
                                        </a>
                                    </div>
                                </li>
                              <?php }} ?>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
        <?php } ?> 
    </div>
</div>