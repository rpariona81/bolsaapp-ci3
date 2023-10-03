<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-primary m-b-0 m-t-0">CONVOCATORIAS</h3>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <a class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="/admin/newconvocatoria">Nueva convocatoria &nbsp;<i class="fa fa-plus"></i></a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <!--<table id="datatablesSimple" name="datatablesSimple" class="display nowrap datatable table-striped dt-responsive" style="width:100%">-->
                    <table id="datatablesSimple" name="datatablesSimple" class="table display nowrap table-hover table-bordered" style="width=100%">
                        <thead class="bg-secondary text-white">
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
                                    echo '<tr class="bg-pink alert alert-danger">';
                                } else {
                                    echo '<tr>';
                                } ?>
                                <td><?= str_pad($item->id, 6, '0', STR_PAD_LEFT); ?></td>
                                <td><?= $item->career_title ?></td>
                                <td><?= $item->employer ?></td>
                                <td><?= $item->title ?></td>
                                <td><?= $item->type_offer ?></td>
                                <td class="text-center"><?= $item->vacancy_numbers ?></td>
                                <td><?= date_format($item->date_publish, 'd/m/Y') ?></td>
                                <td><?= date_format($item->date_vigency, 'd/m/Y') ?></td>
                                <td><?= $item->expired ?></td>
                                <!--<td>< ?= $item->date_vigency ?></td>-->
                                <td class="text-center"><?= $item->cant_postulantes ?></td>
                                <td><?= $item->updated_at ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <?php
                                        if ($item->status) {
                                            //echo '<a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Desactivar" href="<?= $item->id ? >"><i class="fa fa-eye-slash"></i></a>';
                                            echo form_open('admincontroller/desactivaConvocatoria');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                            echo form_close();
                                        } else {
                                            //echo '<a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Activar" href="<?= $item->id>"><i class="fa fa fa-eye"></i></a>';
                                            echo form_open('admincontroller/activaConvocatoria');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" name="submit" class="btn btn-outline-primary btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye-slash"></i></button>';
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

<!-- <script>
        $(document).ready(function() {
            //$.noConflict();
            $('#datatablesSimple').DataTable({
                pageLength: 7,
                responsive: true,
                scrollX: true,
                order: [],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('row c[r^="C"]', sheet).attr('s', '2');
                    }
                }]
            });
        });
    </script> -->

<!--<script src="< ?= base_url('assets/js/datatables-simple-demo.js') ?>"></script>-->

<!--<script>
    $(document).ready(function() {
        //$.noConflict();
        $('#datatablesSimple').DataTable({
            responsive: true,
            scrollX: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('row c[r^="C"]', sheet).attr('s', '2');
                    }
                }
            ]
        });
    });
</script>-->