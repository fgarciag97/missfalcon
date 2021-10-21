<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <button type="button" class="badge badge-sm bg-gradient-info" data-toggle="modal" data-target="#agregar_candidata" style="float: right;">
                <i class="feather icon-plus"></i>Agregar Candidata
            </button>
            <h6> Candidatas </h6>              
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombres</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"># / Categoria</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Municipio</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">F. Nac</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($candidatas as $key) { ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?= $this->Miss->Foto('candidatas', $key['photo_dir'], $key['photo']); ?>" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-left">
                            <h6 class="mb-0 text-sm"> <?= $key['nombres'] ?> </h6>
                            <p class="text-xs text-secondary mb-0">
                                <a>Edad <?= $key['edad'] ?></a>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-primary"> <?= $key['posicion'] ?> </span>
                        <span class="badge badge-sm bg-gradient-primary"> <?= $key['denominacio_categorias'] ?> </span>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> <?= $key['municipio'] ?> </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> <?= date_format($key['fecha_nacimiento'], 'd/m/Y') ?> </p>
                      </td>
                      <td class="align-middle text-left text-sm">
                        <?php  
                        if($key['estatus']){
                          echo $this->html->link('<span class="badge badge-sm bg-gradient-success"> Activo </span>', ['action' => 'change', 0, $key['id']], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea inactivarlo?']);
                        }else{
                          echo $this->html->link('<span class="badge badge-sm bg-gradient-danger"> Inactivo </span>', ['action' => 'change', 1, $key['id']], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea activarlo?']);
                        } ?>
                      </td>
                      <td class="align-middle">
                        <a 
                            data-toggle="modal" 
                            e_id="<?= $key->id ?>" 
                            e_id_categoria="<?= $key->id_categoria ?>" 
                            e_municipio="<?= $key->municipio ?>" 
                            e_nombres="<?= $key->nombres ?>" 
                            e_edad="<?= $key->edad ?>" 
                            e_cedula="<?= $key->cedula ?>" 
                            e_fecha_nacimiento="<?= date_format($key->fecha_nacimiento, 'Y-m-d') ?>" 
                            e_telefono_1="<?= $key->telefono_1 ?>" 
                            e_telefono_2="<?= $key->telefono_2 ?>" 
                            e_instagram="<?= $key->instagram ?>" 
                            e_facebook="<?= $key->facebook ?>" 
                            e_ocupacion="<?= $key->ocupacion ?>" 
                            e_hobbie="<?= $key->hobbie ?>" 
                            e_busto="<?= $key->busto ?>" 
                            e_cintura="<?= $key->cintura ?>" 
                            e_cadera="<?= $key->cadera ?>" 
                            e_estatura="<?= $key->estatura ?>" 
                            e_experiencia="<?= $key->experiencia ?>" 
                            e_direccion="<?= $key->direccion ?>" 
                            e_posicion="<?= $key->posicion ?>" 

                            type="button"
                            onclick="editar_candidata(this);"
                            class="badge badge-sm bg-gradient-info" 
                            style="color: white;">
                            <i class="fa fa-edit"></i>
                        </a>
                        <?= $this->form->postlink('<i class="fa fa-trash"></i>', ['action' => 'delete', $key['id']], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea eliminarlo?', "class" => "badge badge-sm bg-gradient-danger"]);?>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->element('candidatas') ?>
