<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <button type="button" class="badge badge-sm bg-gradient-info" data-toggle="modal" data-target="#agregar_ronda" style="float: right;">
                <i class="feather icon-plus"></i>Agregar Ronda
            </button>
            <h6> Rondas </h6>              
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ronda</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rondas as $key) { ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-left">
                            <p class="text-xs font-weight-bold mb-0"> <?= $key['denominacion'] ?> </p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a 
                            data-toggle="modal" 
                            e_id="<?= $key->id ?>" 
                            e_denominacion="<?= $key->denominacion ?>" 
                            type="button"
                            onclick="editar_ronda(this);"
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

  <?= $this->element('rondas') ?>
