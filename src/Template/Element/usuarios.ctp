<div class="modal fade" id="agregar_usuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Usuarios', ['url' => ['action' => 'index']]) ?>
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Nombres</label>
                                    <input type="text" name="nombres_mostrar" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Cédula</label>
                                    <input type="text" name="cedula" class="form-control" onKeyPress='return soloNum(event);' autocomplete="off" required maxlength="8">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Usuario</label>
                                    <input type="text" name="usuario" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                                <div class="col-md-7">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-7">
                                    <label>Correo</label>
                                    <input type="email" name="correo" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                                <div class="col-md-5">
                                    <label>Privilegio</label>
                                    <select required name="privilegio" class="form-control">
                                      <option disabled selected>--Seleccione--</option>
                                      <?php foreach ($privilegios as $key) { ?>
                                        <option style="color: black" value="<?= $key['id'] ?>"> <?= $key['denominacion'] ?> </option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-info btn-fill">Agregar</button>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function editar_usuario(data) {
        $('#editar_usuario').modal()
        $('#e_id').val($(data).attr('e_id'))
        $('#e_nombres_mostrar').val($(data).attr('e_nombres_mostrar'))
        $('#e_cedula').val($(data).attr('e_cedula'))
        $('#e_usuario').val($(data).attr('e_usuario'))
        $('#e_correo').val($(data).attr('e_correo'))
        $('#e_privilegio').val($(data).attr('e_privilegio'))
    }
</script>

<div class="modal fade" id="editar_usuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Usuarios', ['url' => ['action' => 'editar']]) ?>

                            <input type="text" name="id" required hidden id="e_id">

                            <div class="row">
                                <div class="col-md-8">
                                    <label>Nombres</label>
                                    <input type="text" name="nombres_mostrar" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_nombres_mostrar">
                                </div>
                                <div class="col-md-4">
                                    <label>Cédula</label>
                                    <input type="text" name="cedula" class="form-control" onKeyPress='return soloNum(event);' autocomplete="off" required maxlength="8" id="e_cedula">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Usuario</label>
                                    <input type="text" name="usuario" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_usuario">
                                </div>
                                <div class="col-md-7">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-7">
                                    <label>Correo</label>
                                    <input type="email" name="correo" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_correo">
                                </div>
                                <div class="col-md-5">
                                    <label>Privilegio</label>
                                    <select required name="privilegio" class="form-control" id="e_privilegio">
                                      <option disabled selected>--Seleccione--</option>
                                      <?php foreach ($privilegios as $key) { ?>
                                        <option style="color: black" value="<?= $key['id'] ?>"> <?= $key['denominacion'] ?> </option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-info btn-fill">Actualizar</button>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
