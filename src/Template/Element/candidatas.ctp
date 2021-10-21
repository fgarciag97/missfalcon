<div class="modal fade" id="agregar_candidata" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Usuarios', ['type' => 'file', 'url' => ['action' => 'index']]) ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Categoría</label>
                                    <select required name="id_categoria" class="form-control">
                                      <option disabled selected>--Seleccione--</option>
                                      <?php foreach ($categorias as $key) { ?>
                                        <option style="color: black" value="<?= $key['id'] ?>"> <?= $key['denominacion'] ?> </option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Municipio</label>
                                    <input type="text" name="municipio" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-9">
                                    <label>Nombres</label>
                                    <input type="text" name="nombres" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Edad</label>
                                    <input type="text" name="edad" class="form-control" autocomplete="off" required onKeyPress='return soloNum(event);' maxlength="2">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Cédula</label>
                                    <input type="text" name="cedula" class="form-control" onKeyPress='return soloNum(event);' maxlength="8" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>F. Nac</label>
                                    <input type="date" name="fecha_nacimiento" class="form-control" autocomplete="off" required max="<?= date('Y-m-d') ?>">
                                </div>

                                <div class="col-md-3">
                                    <label>Teléfono</label>
                                    <input type="text" name="telefono_1" class="form-control" onKeyPress='return soloNum(event);' autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Otro Teléfono</label>
                                    <input type="text" name="telefono_2" class="form-control" onKeyPress='return soloNum(event);' autocomplete="off" required>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Ocupación</label>
                                    <textarea type="text" name="ocupacion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Hobbie</label>
                                    <textarea type="text" name="hobbie" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Busto</label>
                                    <input type="text" name="busto" class="form-control moneda" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Cintura</label>
                                    <input type="text" name="cintura" class="form-control moneda" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Cadera</label>
                                    <input type="text" name="cadera" class="form-control moneda" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Estatura</label>
                                    <input type="text" name="estatura" class="form-control moneda" autocomplete="off" required>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Experiencia</label>
                                    <textarea type="text" name="experiencia" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Dirección</label>
                                    <textarea type="text" name="direccion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Foto</label>
                                    <input type="file" name="photo" class="form-control" required>
                                </div>

                                <div class="col-md-2">
                                    <label>Posición</label>
                                    <input type="text" name="posicion" class="form-control" autocomplete="off" required onKeyPress='return soloNum(event);' maxlength="2">
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
    function editar_candidata(data) {
        $('#editar_candidata').modal()
        $('#e_id').val($(data).attr('e_id'))
        $('#e_id_categoria').val($(data).attr('e_id_categoria'))
        $('#e_municipio').val($(data).attr('e_municipio'))
        $('#e_nombres').val($(data).attr('e_nombres'))
        $('#e_edad').val($(data).attr('e_edad'))
        $('#e_cedula').val($(data).attr('e_cedula'))
        $('#e_fecha_nacimiento').val($(data).attr('e_fecha_nacimiento'))
        $('#e_telefono_1').val($(data).attr('e_telefono_1'))
        $('#e_telefono_2').val($(data).attr('e_telefono_2'))
        $('#e_instagram').val($(data).attr('e_instagram'))
        $('#e_facebook').val($(data).attr('e_facebook'))
        $('#e_ocupacion').val($(data).attr('e_ocupacion'))
        $('#e_hobbie').val($(data).attr('e_hobbie'))
        $('#e_busto').val($(data).attr('e_busto'))
        $('#e_cintura').val($(data).attr('e_cintura'))
        $('#e_cadera').val($(data).attr('e_cadera'))
        $('#e_estatura').val($(data).attr('e_estatura'))
        $('#e_experiencia').val($(data).attr('e_experiencia'))
        $('#e_direccion').val($(data).attr('e_direccion'))
        $('#e_posicion').val($(data).attr('e_posicion'))

    }
</script>

<div class="modal fade" id="editar_candidata" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Usuarios', ['type' => 'file', 'url' => ['action' => 'editar']]) ?>
                            
                            <input type="text" name="id" required id="e_id" hidden>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Categoria</label>
                                    <select required name="id_categoria" class="form-control" id="e_id_categoria">
                                      <option disabled selected>--Seleccione--</option>
                                      <?php foreach ($categorias as $key) { ?>
                                        <option style="color: black" value="<?= $key['id'] ?>"> <?= $key['denominacion'] ?> </option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Municipio</label>
                                    <input type="text" name="municipio" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_municipio">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-9">
                                    <label>Nombres</label>
                                    <input type="text" name="nombres" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_nombres">
                                </div>
                                <div class="col-md-3">
                                    <label>Edad</label>
                                    <input type="text" name="edad" class="form-control" autocomplete="off" required onKeyPress='return soloNum(event);' maxlength="2" id="e_edad">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Cédula</label>
                                    <input type="text" name="cedula" class="form-control" onKeyPress='return soloNum(event);' maxlength="8" autocomplete="off" required id="e_cedula">
                                </div>
                                <div class="col-md-3">
                                    <label>F. Nac</label>
                                    <input type="date" name="fecha_nacimiento" class="form-control" autocomplete="off" required max="<?= date('Y-m-d') ?>" id="e_fecha_nacimiento">
                                </div>

                                <div class="col-md-3">
                                    <label>Teléfono</label>
                                    <input type="text" name="telefono_1" class="form-control" onKeyPress='return soloNum(event);' autocomplete="off" required id="e_telefono_1">
                                </div>
                                <div class="col-md-3">
                                    <label>Otro Teléfono</label>
                                    <input type="text" name="telefono_2" class="form-control" onKeyPress='return soloNum(event);' autocomplete="off" required id="e_telefono_2">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" class="form-control" autocomplete="off" required id="e_instagram">
                                </div>
                                <div class="col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" class="form-control" autocomplete="off" required id="e_facebook">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Ocupación</label>
                                    <textarea type="text" name="ocupacion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2" id="e_ocupacion"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Hobbie</label>
                                    <textarea type="text" name="hobbie" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2" id="e_hobbie"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Busto</label>
                                    <input type="text" name="busto" class="form-control moneda" autocomplete="off" required id="e_busto">
                                </div>
                                <div class="col-md-3">
                                    <label>Cintura</label>
                                    <input type="text" name="cintura" class="form-control moneda" autocomplete="off" required id="e_cintura">
                                </div>
                                <div class="col-md-3">
                                    <label>Cadera</label>
                                    <input type="text" name="cadera" class="form-control moneda" autocomplete="off" required id="e_cadera">
                                </div>
                                <div class="col-md-3">
                                    <label>Estatura</label>
                                    <input type="text" name="estatura" class="form-control moneda" autocomplete="off" required id="e_estatura">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Experiencia</label>
                                    <textarea type="text" name="experiencia" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2" id="e_experiencia"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Dirección</label>
                                    <textarea type="text" name="direccion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required rows="2" id="e_direccion"></textarea>
                                </div>

                                 <div class="col-md-2">
                                    <label>Posición</label>
                                    <input type="text" name="posicion" class="form-control" autocomplete="off" required onKeyPress='return soloNum(event);' maxlength="2" id="e_posicion">
                                </div>
                            </div>

                               <div class="row">
                                <div class="col-md-12">
                                    <label>Foto</label>
                                    <input type="file" name="photo" class="form-control" required>
                                </div>
                            </div>

                            <br>

                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <label>Foto</label>
                                    <input type="file" name="photo" class="form-control" required>
                                </div>
                            </div>
                            <br> -->

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