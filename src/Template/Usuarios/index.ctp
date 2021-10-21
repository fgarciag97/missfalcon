<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <button type="button" class="badge badge-sm bg-gradient-info" data-toggle="modal" data-target="#agregar_usuario" style="float: right;">
                <i class="feather icon-plus"></i>Agregar Usuario
            </button>
            <h6> Usuarios </h6>              
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cedula</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rol</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($usuarios as $key) { ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/img/usuario.png" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-left">
                            <h6 class="mb-0 text-sm"> <?= $key['nombres_mostrar'] ?> </h6>
                            <p class="text-xs text-secondary mb-0">
                                <a><?= $key['usuario'] ?></a>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> <?= $key['cedula'] ?> </p>
                      </td>
                      <td class="align-middle text-left text-sm">
                        <span class="badge badge-sm bg-gradient-primary"> <?= $key['denominacio_privilegio'] ?> </span>
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
                            e_nombres_mostrar="<?= $key->nombres_mostrar ?>" 
                            e_cedula="<?= $key->cedula ?>" 
                            e_usuario="<?= $key->usuario ?>" 
                            e_correo="<?= $key->correo ?>" 
                            e_privilegio="<?= $key->privilegio ?>" 
                            type="button"
                            onclick="editar_usuario(this);"
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

  <?= $this->element('usuarios') ?>
