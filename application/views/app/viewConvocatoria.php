<div class="align-items-md-stretch mt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?= $convocatoria->title ?>
            </h4>
            <h5><font color="red" ><em>
                <?= $convocatoria->employer ?></em></font>
            </h5>
        </div>
        <div class="card-body">
            <strong class="card-title">Tipo de oferta:
                <?= $convocatoria->type_offer ?>
            </strong>
            <br><br>
            <p class="card-text"><strong>Detalle:</strong>
                <?= html_entity_decode($convocatoria->detail) ?>
            </p>
            <p class="card-text">Número de vacantes:
                <?= $convocatoria->vacancy_numbers ?>
            </p>
            <p class="card-text">Fecha de publicación:
                <?= date_format($convocatoria->date_publish, 'd/m/Y') ?>
            </p>
            <p class="card-text">Fecha límite de postulación:
                <?= date_format($convocatoria->date_vigency, 'd/m/Y') ?>
            </p>
            <p class="card-text">Horario:
                <?= $convocatoria->turn_horary?>
            </p>
            <p class="card-text">Sueldo:&nbsp;S/.&nbsp;
                <?= $convocatoria->salary ?>
            </p>
            <p class="card-text">Condición:
                <?= $convocatoria->expired?>
            </p><br>
            <div class="alert alert-secondary">
                <small>Programa de estudios:
                    <?= $convocatoria->career_title ?>
                </small>
            </div>
            <a class="btn btn-warning btn-lg" href="/users">Regresar</a>
            <?php
            if ($this->session->userdata('user_rol') == 'estudiante') {
                if ($checkPostulation) {
                    echo '<div class="d-grid gap-2 col-4 mx-auto float-end">';
                    echo '<button class="btn btn-outline-success btn-lg" disabled></i>Ya postulaste</button>';
                    echo '</div>';
                } else {
                    echo '<div class="d-grid gap-2 col-4 mx-auto float-end">';
                    echo '<button class="btn btn-success btn-lg" onclick="modal_postulante()"></i>Postular >>></button>';
                    echo '</div>';
                }
            } else {
            }
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    function modal_postulante() {
        $('#fileUploadModal').modal('show');
        $("#btn_upload").prop('disabled', true);
        $("#msg_postulant").val('');
        $("#filecv").val('');
    }
</script>
<!-- Modal -->
<div id="fileUploadModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open('appcontroller/postular', array('enctype' => 'multipart/form-data')) ?>
            <div class="modal-header">
                <h5 class="modal-title">Realizar postulación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Datos de Postulante:</strong><br>
                <p>Nombres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?=$this->session->userdata('user_name')." ".$this->session->userdata('user_paterno')?><br>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?=$this->session->userdata('user_email')?></br>P. Estudios&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?=$this->session->userdata('user_carrera')?></p>
                <p>Mensaje (*):</p>
                <input type="hidden" name="offer_id" value="<?= $convocatoria->id ?>">
                <input type="hidden" name="offer_title" value="<?= $convocatoria->title ?>">
                <input type="hidden" name="offer_email" value="<?= $convocatoria->email_employer ?>">
                <textarea class="form-control" id="msg_postulant" name="msg_postulant" placeholder="Redacte un mensaje..." value="<?=set_value('msg_postulant')?>"></textarea>
                <br>
                <p>Cargue archivo PDF (máx. 4 MB) (*): </p>
                <input type='file' name='filecv' id='filecv' class='form-control' required><br>
                <div id="modal-gral">
                <!--<div class="alert">-->
                    <div id="modal-msg">
                        <div id="modal-title">
                        </div>
                    </div>
                <!--</div>-->
            </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <input type='submit' class='btn btn-info' value='Confirmar postulación' id='btn_upload' disabled>
            </div>
            <?= form_close() ?>

        </div>
        <script type="text/javascript">
            $('input[type="file"]').on('change', function() {
                var ext = $(this).val().split('.').pop();
                if ($(this).val() != '') {
                    if (ext == "pdf") {
                        //alert("La extensión es: " + ext);
                        if ($(this)[0].files[0].size > 4194304) {
                            console.log("El documento excede el tamaño máximo");
                            $('#modal-title').text('¡Precaución!');
                            $('#modal-msg').html("Se solicita un archivo no mayor a 4MB. Por favor verifica.");
                            $("#modal-gral").modal();
                            $("#btn_upload").prop('disabled', true);
                            $(this).val('');
                        } else {
                            $("#modal-gral").hide();
                            $("#btn_upload").prop('disabled', false);
                        }
                    } else {
                        $(this).val('');
                        //alert("Extensión no permitida: " + ext);
                        $('#modal-title').text("Extensión no permitida: " + ext);
                        $("#btn_upload").prop('disabled', true);
                    }
                }
            });
        </script>
    </div>
</div>