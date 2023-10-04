
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success bg-opacity">
                <div class="row pt-3">
                    <div class="col-md-5 col-8 align-self-center">
                        <div class="mb-3">
                            <h4 class="text-white">CONVOCATORIAS</h4>
                        </div>
                    </div>
                    <div class="col-md-7 col-4 mx-auto">
                        <div class="mb-3">
                            <div class="d-md-flex align-items-center">
                                <a class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="/admin/newconvocatoria">Nueva convocatoria &nbsp;<i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!--<table id="datatablesSimple" name="datatablesSimple" class="display nowrap datatable table-striped dt-responsive" style="width:100%">-->
                    <table id="datatablesSimple" name="datatablesSimple" class="table nowrap table-hover table-bordered" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Cod Oferta</th>
                                <th>Programa de estudios</th>
                                <th>Empleador/Empresa</th>
                                <th>Convocatoria</th>
                                <th>Tipo</th>
                                <th># vacantes</th>
                                <th>F. publicación</th>
                                <th>F. vigencia</th>
                                <th>Condición</th>
                                <th># postulantes</th>
                                <th>Última actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <?php
                                if ($item->flag == 0) {
                                    echo '<tr class="text-black-50">';
                                } else {
                                    echo '<tr class="text-info">';
                                } ?>
                                <td><?= str_pad($item->id, 6, '0', STR_PAD_LEFT); ?></td>
                                <td><?= $item->career_title ?></td>
                                <td><?= $item->employer ?></td>
                                <td><?= $item->title ?></td>
                                <td><?= $item->type_offer ?></td>
                                <td class="text-center"><?= $item->vacancy_numbers ?></td>
                                <td><?= date_format($item->date_publish, 'd/m/Y') ?></td>
                                <td><?= date_format($item->date_vigency, 'd/m/Y') ?></td>
                                <!--<td>< ?= $item->expired ?></td>-->
                                <?php
                                if ($item->flag == 0) {
                                    echo '<td><span class="badge bg-danger">'.$item->expired.'</span></td>';
                                } else {
                                    echo '<td><span class="badge bg-info">'.$item->expired.'</span></td>';
                                } ?>
                                <td class="text-center"><?= $item->cant_postulantes ?></td>
                                <td><?= $item->updated_at ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <?php
                                        if ($item->status) {
                                            echo form_open('admincontroller/desactivaConvocatoria');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                            echo form_close();
                                        } else {
                                            echo form_open('admincontroller/activaConvocatoria');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" name="submit" class="btn btn-outline-warning btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye-slash"></i></button>';
                                            echo form_close();
                                        }
                                        ?>
                                        &nbsp;&nbsp;
                                        <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="/admin/convocatoria/<?= $item->id ?>"><i class="fa fa-edit"></i></a>
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

