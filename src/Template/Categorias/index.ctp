<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <button type="button" class="badge badge-sm bg-gradient-info" data-toggle="modal" data-target="#agregar_categorias" style="float: right;">
                <i class="feather icon-plus"></i>Agregar
            </button>
            <h6> Categorías </h6>              
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">Estatus</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($consulta as $key) { ?>
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm" style="padding: 0px 15px;"><?= $key['denominacion'] ?></h6> 
                      </td>
                      <td class="align-middle text-left text-sm" style="text-align: center;">
                        <?php  
                          if($key['estatus']){
                            echo $this->html->link('<span class="badge badge-sm bg-gradient-success"> Activo </span>', ['action' => 'change', 0, $key['id']], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea inactivarlo?']);
                          }else{
                            echo $this->html->link('<span class="badge badge-sm bg-gradient-danger"> Inactivo </span>', ['action' => 'change', 1, $key['id']], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea activarlo?']);
                          }?>
                      </td>
                      <td class="align-middle">
                        <a 
                            data-toggle="modal" 
                            id="<?= $key->id ?>" 
                            denominacion="<?= $key->denominacion ?>" 
                            type="button"
                            onclick="editar_categorias(this);"
                            class="badge badge-sm bg-gradient-info" 
                            style="color: white;">
                            <i class="fa fa-edit"></i>
                        </a>
                        <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'eliminar', $key['id']], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea eliminarlo?', "class" => "badge badge-sm bg-gradient-danger"]);?>
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
  <?= $this->element('categorias') ?>