<?php
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- MAP DATA-->
                    <div class="row">
                        <h3 class="title-3 m-b-30">
                            <i class="fas fa-user"></i>Validasi Data Pemohon</h3>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-earning" >
                                <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>KTP</th>
                                <th>Detail</th>
                                <th>Action</th>
                                </thead>
                                <?php $n = 1; foreach ($tampil as $u){ ?>
                                <tbody>
                                <td><?= $n++ ?> </td>
                                <td><?= $u->nama ?> </td>
                                <td><a href="<?= base_url() ?>upload/registrasi/<?= $u->foto ?>">lihat Document</a></td>
                                <td><a href="<?= base_url() ?>upload/ktp/<?= $u->foto_ktp ?>">lihat Document</a></td>
                                <td><a class="btn btn-primary"href="<?= base_url() ?>admin/lihat/<?= $u->id_pemohon?>"><label class="fa fa-file"> </label> </a>
                                </td>
                                <td>
                                    <?php
                                    if($u->status == 0) {
                                        ?>
                                        <a class="btn btn-success"href="<?= base_url() ?>admin/updateStatus/<?= $u->id_pemohon?>/1">Terima </a>
                                        <a class="btn btn-danger"href="<?= base_url() ?>admin/updateStatus/<?= $u->id_pemohon?>/2">Tolak </a>
                                    <?php }
                                    else if($u->status == 1) { ?>
                                        <a class="btn btn-success"href="">Direrima </a>
                                        <?php }
                                    else{
                                        ?>
                                        <a class="btn btn-danger"href="">Ditolak </a>
                                    <?php } ?>
                                </td>
                                </tbody>
                                <?php }
                                ?>

                            </table>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

