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
                            <h4 class="text-white">DOCENTES</h4>
                        </div>
                    </div>
                    <div class="col-md-7 col-4 mx-auto">
                        <div class="mb-3">
                            <div class="d-md-flex align-items-center">
                                <a class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="/admin/newdocente">Nuevo docente&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
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
                                <th>Cod Usuario</th>
                                <th>Nombres y apellidos</th>
                                <th>Documento identidad</th>
                                <th>Celular</th>
                                <th>Sexo</th>
                                <th>Email</th>
                                <th>Condición</th>
                                <th>Última actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr>
                                    <td><?= str_pad($item->id, 5, '0', STR_PAD_LEFT); ?></td>
                                    <td><?= $item->name . ' ' . $item->paternal_surname . ' ' . $item->maternal_surname ?></td>
                                    <td><?= $item->document_type_label . ' ' . $item->document_number ?></td>
                                    <td class="text-center"><?= $item->mobile ?></td>
                                    <td><?= $item->gender ?></td>
                                    <td class="text-center"><?= $item->email ?></td>
                                    <td class="text-center"><?= $item->graduated ?></td>
                                    <td><?= $item->updated_at ?></td>
                                    <td>
                                        <?php
                                        if ($item->status) {
                                            echo '<span class="badge bg-info">' . $item->flag . '</span>';
                                        } else {
                                            echo '<span class="badge bg-danger">' . $item->flag . '</span>';
                                        }
                                        ?>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <?php
                                            if ($item->status) {
                                                //echo '<a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Desactivar" href="<?= $item->id ? >"><i class="fa fa-eye-slash"></i></a>';
                                                echo form_open('admincontroller/desactivaDocente');
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                echo form_close();
                                            } else {
                                                //echo '<a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Activar" href="<?= $item->id>"><i class="fa fa fa-eye"></i></a>';
                                                echo form_open('admincontroller/activaDocente');
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-warning btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye"></i></button>';
                                                echo form_close();
                                            }
                                            ?>
                                            &nbsp;&nbsp;
                                            <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="/admin/docente/<?= $item->id ?>"><i class="fa fa-edit"></i></a>
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