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
                            <i class="fas fa-user"></i>Validasi Data Proposal</h3>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-earning" >
                                <thead>
                                <th>No</th>
                                <th>Judul Proposal</th>
                                <th>Pemohon</th>
                                <th>Document</th>
                                <th>Action</th>
                                </thead>
                                <?php $n = 1; foreach ($tampil as $u){ ?>
                                <tbody>
                                <td><?= $n++ ?> </td>
                                <td><?=$u->judul_proposal?></td>
                                <td><?= $u->nama ?> </td>
                                <td><a href="<?= base_url() ?>upload/proposal/<?= $u->file_proposal ?>">lihat Document</a></td>
                                <td>
                                    <?php
                                    if($u->status_proposal == 0) {
                                        ?>
                                        <a class="btn btn-success"href="<?= base_url() ?>admin/updateStatuspro/<?= $u->id_proposal?>/1">Terima </a>
                                        <a class="btn btn-danger"href="<?= base_url() ?>admin/updateStatuspro/<?= $u->id_proposal?>/2">Tolak </a>
                                    <?php
                                    }
                                    else if($u->status_proposal == 1) {
                                        if ($u->status_jadwal == 0){
                                            ?>
                                            <a class="btn btn-primary"href="<?= base_url() ?>admin/jadwalseminar/<?= $u->id_proposal ?>">
                                            Atur Jadwal Seminar </a>
                                        <?php
                                            }
                                         else {
                                        ?>
                                             <a class="btn btn-success"href="">jadwal telah diatur... </a>
                                        <?php }?>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a class="btn btn-danger"href="">Ditolak </a>
                                    <?php
                                    } ?>
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

