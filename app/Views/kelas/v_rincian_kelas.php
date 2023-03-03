<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data <?= $title; ?> <label>(<?= $kelas['nama_kelas']; ?>)</label></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add">
                    <i class="fa-solid fa-plus"></i>
                    <b>Add</b>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <table class="table">
                <tr>
                    <th width="180px">Nama Kelas</th>
                    <th width="30px"> : </th>
                    <td><?= $kelas['nama_kelas']; ?> </td>
                </tr>
                <tr>
                    <th>Tahun Angkatan</th>
                    <th> : </th>
                    <td><?= $kelas['tahun']; ?> </td>
                </tr>
                <tr>

                    <th>Jumlah</th>
                    <th> : </th>
                    <td><?= $jml; ?></td>

                </tr>
                <tr>
                    <th>Nama Guru</th>
                    <th> : </th>
                    <td><?= $kelas['nama_guru']; ?> </td>

                </tr>
            </table>

            <?php

            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }

            ?>

            <table class="table table-bordered">
                <tr class="">
                    <th width="50px" class="bg-blue text-center">No</th>
                    <th width="100px" class="bg-blue text-center">NIS</th>
                    <th class="bg-blue text-center">Nama Siswa</th>
                    <th width="50px" class="bg-blue text-center">Action</th>
                </tr>
                <?php $no = 1;
                foreach ($siswa as $key => $value) { ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td class="text-center"><?= $value['nis']; ?></td>
                        <td class="text-center"><?= $value['nama_siswa']; ?></td>
                        <td>
                            <a href="<?= base_url('kelas/remove_anggota_kelas/' . $value['id_siswa'] . '/' . $kelas['id_kelas']); ?>" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- modal tambah data -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nis</th>
                            <th class="text-center">Nama Siswa</th>
                            <th class="text-center" width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($siswa_nokel as $key => $value) { ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td class="text-center"><?= $value['nis']; ?></td>
                                <td class="text-center"><?= $value['nama_siswa']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('kelas/add_anggota_kelas/' . $value['id_siswa'] . '/' . $kelas['id_kelas']); ?>" class="btn btn-success">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end modal tambah data-->