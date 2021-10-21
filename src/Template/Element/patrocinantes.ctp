<div class="modal fade" id="agregar_patrocinante" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('patrocinante', ['type' => 'file', 'url' => ['action' => 'index']]) ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre de la empresa</label>
                                    <input type="text" name="nombre" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Eslogan</label>
                                    <input type="text" name="denominacion" class="form-control" onkeyup='mayus(this);' autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <input type="file" name="photo"  id="foto" accept="image/*" onchange="showPreview(event);" hidden="" required>
                                <input type="button" name="photo" class="btn btn-info btn-fill" onclick="document.getElementById('foto').click()" value="Subir Archivo..." required>
                                <br>
                                <center>
                                <div>
                                  <img id="preview" style="box-shadow: 0 0 20px black;">
                                </div>
                                </center>
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
<!-- ============================================================================ -->
<script type="text/javascript">
     function showPreview(event){
          if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var imagen = document.getElementById("preview");
            imagen.src = src;
            imagen.style.display = "block";
            imagen.style.width = "100%";
            imagen.style.border = "10px double black";
            imagen.style.padding = "5px";
          }
        }
</script>
<script type="text/javascript">
    function editar_patrocinante(data) {
        $('#editar_patrocinante').modal()
        $('#id').val($(data).attr('id'))
        $('#nombre').val($(data).attr('nombre'))
        $('#denominacion').val($(data).attr('denominacion'))
    }
</script>
<!-- ============================================================================ -->
<div class="modal fade" id="editar_patrocinante" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('patrocinante', ['url' => ['action' => 'editar']]) ?>
                            <input type="text" name="id" required hidden id="id">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre de la empresa</label>
                                    <input type="text" name="nombre" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="nombre">
                                </div>
                                <div class="col-md-6">
                                    <label>Eslogan</label>
                                    <input type="text" name="denominacion" class="form-control" onkeyup='mayus(this);' autocomplete="off" id="denominacion">
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