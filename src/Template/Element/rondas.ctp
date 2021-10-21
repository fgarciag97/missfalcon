<div class="modal fade" id="agregar_ronda" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Rondas', ['url' => ['action' => 'index']]) ?>
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


<script type="text/javascript">
    function editar_ronda(data) {
        $('#editar_ronda').modal()
        $('#e_id').val($(data).attr('e_id'))
        $('#e_denominacion').val($(data).attr('e_denominacion'))
    }
</script>

<div class="modal fade" id="editar_ronda" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Form->create('Rondas', ['url' => ['action' => 'editar']]) ?>

                            <input type="text" name="id" required hidden id="e_id">

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Denominación</label>
                                    <input type="text" name="denominacion" class="form-control" onkeyup='mayus(this);' autocomplete="off" required id="e_denominacion">
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
