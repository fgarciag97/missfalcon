<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('missprincipal', ['type' => 'file', 'url' => ['action' => 'index']]) ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" name="nombres_candidata" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Municipio</label>
                                    <input type="text" name="municipio" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Categoría</label>
                                    <input type="text" name="categoria" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
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
    function editar(data) {
        $('#editar').modal()
        $('#id').val($(data).attr('id'))
        $('#nombres_candidata').val($(data).attr('nombres_candidata'))
        $('#municipio').val($(data).attr('municipio'))
        $('#categoria').val($(data).attr('categoria'))
    }
</script>
<!-- ============================================================================ -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('missprincipal', ['url' => ['action' => 'editar']]) ?>
                            <input type="text" name="id" required hidden id="id">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" name="nombres_candidata" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="nombres_candidata">
                                </div>
                                <div class="col-md-6">
                                    <label>Municipio</label>
                                    <input type="text" name="municipio" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="municipio">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Categoría</label>
                                    <input type="text" name="categoria" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="categoria">
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