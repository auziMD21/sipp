 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="row">
                                    <h3 class="title-3 m-b-30">
                                        <i class="fas fa-user"></i>History</h3>
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-striped table-earning" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>judul Proposal</th>
                                            <th>Nilai</th>
                                            <th>Status</th>>
                                            </thead>
                                            <?php $n = 1; foreach ($tampil as $u){ ?>
                                            <tbody>
                                            <td><?= $n++ ?> </td>
                                            <td><?= $u->nama ?> </td>
                                            <td><?= $u->judul_proposal ?> </td>
                                            <td><?= $u->total_hasil ?> </td>
                                            <td>
                                                <?php
                                                if($u->total_hasil >=75) { ?>
                                                    <a class="btn btn-success"href="">Lulus </a>
                                                <?php }
                                                else{
                                                    ?>
                                                    <a class="btn btn-danger"href="">Gagal </a>
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
