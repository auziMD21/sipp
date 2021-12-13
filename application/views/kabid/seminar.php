 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="row">
                                    <h3 class="title-3 m-b-30">
                                        <i class="fas fa-user"></i>Data Seminar</h3>
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-striped table-earning" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Ruangan</th>
                                            <th>Penilaian</th>
                                            </thead>
                                            <?php $n = 1; foreach ($tampil as $u){ ?>
                                            <tbody>
                                            <td><?= $n++ ?> </td>
                                            <td><?= $u->nama ?> </td>
                                            <td><?= $u->tanggal_ajah ?> </td>
                                            <td><?= $u->jam_ajah ?> </td>
                                            <td><?=$u->ruangan?></td>
                                            <td>
                                                <?php
                                                if($u->status_nilai == 0) {
                                                ?>
                                                <a href="<?=base_url()?>kabid/penilaian/<?=$u->id_seminar?>" class="btn btn-primary">Penilaian</a>
                                                <a href="<?=base_url()?>kabid/hapusjadwal/<?=$u->id_seminar?>" class="btn btn-danger">Hapus</a>
                                                <?php } else{?>
                                                <a href="#" class="btn btn-success">Telah dinilai</a>
                                                <?php } ?>

                                            </td>
                                            <?php } ?>
                                            </tbody>
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
