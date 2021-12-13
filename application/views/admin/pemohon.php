 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="row">
                                    <h3 class="title-3 m-b-30">
                                        <i class="fas fa-user"></i>Data Pemohon</h3>
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-striped table-earning" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Nomor HP</th>
                                            <th>Action</th>
                                            </thead>
                                            <?php $n = 1; foreach ($tampil as $u){ ?>
                                            <tbody>
                                            <td><?= $n++ ?> </td>
                                            <td><?= $u->nama ?> </td>
                                            <td><?= $u->alamat ?> </td>
                                            <td><?= $u->no_hp ?> </td>
                                            <td>
                                                <a class="btn btn-primary"href="<?= base_url() ?>admin/lihat/<?= $u->id_pemohon?>"><label class="fa fa-file"> </label> </a>
                                                <a class="btn btn-danger"href="<?= base_url() ?>admin/hapus/<?= $u->id_pemohon?>"><label class="fa fa-trash-alt"> </label> </a>
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
