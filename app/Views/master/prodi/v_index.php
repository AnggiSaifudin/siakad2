<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data <?= $title; ?></h3>

            <div class="card-tools">
                <a href="<?= base_url('prodi/add'); ?>" class="btn btn-tool">
                    <i class="fa-solid fa-plus"></i>
                    <b>Add</b>
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php

            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }

            ?>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th>Kode</th>
                        <th>Mata Pelajaran</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($prodi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['kode_prodi']; ?></td>
                            <td><?= $value['prodi']; ?></td>
                            <td width="150px" class="text-center">
                                <a href="<?= base_url('prodi/edit/' . $value['id_prodi']); ?>" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_prodi']; ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<!-- modal delete-->
<?php foreach ($prodi as $key => $value) { ?>

    <div class="modal fade" id="delete<?= $value['id_prodi']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $title; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    apakah anda yakin ingin menghapus <b><?= $value['prodi']; ?>.?</b>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('prodi/delete/' . $value['id_prodi']); ?>" class="btn btn-success">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.end modal delete-->

<?php } ?>