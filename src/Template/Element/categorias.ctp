<div class="modal fade" id="agregar_categorias" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Categorias', ['url' => ['action' => 'index']]) ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Denominación</label>
                                    <input type="text" name="denominacion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
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
<!-- ============================================================================ -->
<script type="text/javascript">
    function editar_categorias(data) {
        $('#editar_categorias').modal()
        $('#id').val($(data).attr('id'))
        $('#denominacion').val($(data).attr('denominacion'))
    }
</script>
<!-- ============================================================================ -->
<div class="modal fade" id="editar_categorias" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Categorias', ['url' => ['action' => 'editar']]) ?>
                            <input type="text" name="id" required hidden id="id">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Denominación</label>
                                    <input type="text" name="denominacion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="denominacion">
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