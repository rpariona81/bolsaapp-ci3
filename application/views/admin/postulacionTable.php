<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success bg-opacity">
                <?= form_open('admincontroller/creaConvocatoria', array('id' => 'FRM_DATOS', 'class' => 'needs-validation', 'onsubmit' => 'grabar.disabled = true; return true;')); ?>
                <div class="row pt-3">
                    <div class="col-md-5 col-8 align-self-center">
                        <div class="mb-3">
                            <h4 class="text-white">Postulaciones</h4>
                        </div>
                    </div>
                    <div class="col-md-7 col-4 mx-auto">
                        <div class="mb-3">
                        <div class="input-group mb-3">
                            <select class="form-control" id="career_id" name="career_id" aria-label="Default select example" required>
                                <option value="" selected>Todos los programas</option>
                                <option value="1">Arquitectura de Plataformas y Servicios de Tecnologías de la Información</option>
                                <option value="2">Enfermería Técnica</option>
                                <option value="3">Farmacia Técnica</option>
                                <option value="4">Tecnología Pesquera y Acuícola</option>
                                <option value="5">Desarrollo pesquero y acuícola</option>
                            </select>
                            <button class="btn btn-warning pull-right font-weight-medium px-4" type="submit">
                                <i class="ti-search"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatablesSimple" name="datatablesSimple" class="table nowrap table-hover table-bordered" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Cod Postulación</th>
                                <th>Cod Oferta</th>
                                <th>Programa de estudios</th>
                                <th>Convocatoria</th>
                                <th>Tipo</th>
                                <th>F. publicación</th>
                                <th>F. vigencia</th>
                                <th>Postulante</th>
                                <th>Condición</th>
                                <th>F. Postulación</th>
                                <th>Última actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr>
                                    <td><?= str_pad($item->id, 7, '0', STR_PAD_LEFT); ?></td>
                                    <td><?= str_pad($item->offer_id, 6, '0', STR_PAD_LEFT); ?></td>
                                    <td><?= $item->career_title ?></td>
                                    <td><?= $item->title ?></td>
                                    <td><?= $item->type_offer ?></td>
                                    <td><?= date_format($item->date_publish, 'd/m/Y') ?></td>
                                    <td><?= date_format($item->date_vigency, 'd/m/Y') ?></td>
                                    <td><?= $item->name . ' ' . $item->paternal_surname . ' ' . $item->maternal_surname ?></td>
                                    <td><?= $item->graduated ?></td>
                                    <td class="text-center"><?= date_format($item->date_postulation, 'd/m/Y') ?></td>
                                    <td><?= $item->updated_at ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar CV" target="_blank" download="<?= $item->filecv; ?>" href="<?= base_url('/uploads/filescv/' . $item->filecv); ?>"><i class="fas fa-file-pdf" title="<?= $item->filecv ?>"></i></a>
                                            &nbsp;&nbsp;
                                            <?php
                                            if ($item->status) {
                                                //echo '<a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Desactivar" href="<?= $item->id ? >"><i class="fa fa-eye-slash"></i></a>';
                                                echo form_open('admincontroller/desactivaPostulacion');
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-info btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                echo form_close();
                                            } else {
                                                //echo '<a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Activar" href="<?= $item->id>"><i class="fa fa fa-eye"></i></a>';
                                                echo form_open('admincontroller/activaPostulacion');
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-primary btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye-slash"></i></button>';
                                                echo form_close();
                                            }
                                            ?>
                                            &nbsp;&nbsp;
                                            <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="/admin/postulacion/<?= $item->id ?>"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>