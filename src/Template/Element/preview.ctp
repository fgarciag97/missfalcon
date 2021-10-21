<div class="modal fade" id="agregar_pre" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Preview', ['type' => 'file', 'url' => ['action' => 'candidatas']]) ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Municipio</label>
                                    <input type="text" name="municipio" class="form-control" onkeyup='mayus(this);' autocomplete="off" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Foto</label>
                                    <input type="file" name="photo" class="form-control" required>
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
    function editar_pre(data) {
        $('#editar_pre').modal()
        $('#e_id').val($(data).attr('e_id'))
        $('#e_municipio').val($(data).attr('e_municipio'))
    }
</script>

<div class="modal fade" id="editar_pre" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Preview', ['type' => 'file', 'url' => ['action' => 'edit']]) ?>
                            <input type="text" name="id" required hidden id="e_id">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Municipio</label>
                                    <input type="text" name="municipio" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_municipio">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Foto</label>
                                    <input type="file" name="photo" class="form-control" required>
                                </div>
                            </div>

                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-info btn-fill">Actualzar</button>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>