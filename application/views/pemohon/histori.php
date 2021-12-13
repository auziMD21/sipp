            <!-- Mobile Menu start -->
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">History</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <table class="table table-borderless table-striped table-earning" data-pagination="true"   data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar" >
                                <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>judul Proposal</th>
                                <th>Nilai</th>
                                <th>Status</th>
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
                </div>
            </div>
        </div>
    </div>