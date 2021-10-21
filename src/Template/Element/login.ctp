<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: linear-gradient(to right, #000000ed, #b08611f7); color: white;">
        <h5 class="modal-title" id="exampleModalLongTitle"><img src="/img/Principal/obj_triangle.png" style="width: 40px;"> Iniciar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= $this->Form->create(@$user, ['url' => ['action' => 'login']]) ?>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
               <div class="col-auto">
                <label>Usuario</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" name="usuario" placeholder="Escribir..." autocomplete="off" required>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
               <div class="col-auto">
                <label>Contraseña</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-key"></i></div>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Escribir..." autocomplete="off" required>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white;">Cerrar</button>
        <button type="submit" class="btn btn-primary">Acceder</button>
      </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>