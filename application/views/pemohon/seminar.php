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
                                            <li><span class="bread-blod">Seminar</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <table class="table table-borderless table-striped table-earning" data-pagination="true"   data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                <tr>
                                    <th data-field="state" data-checkbox="false"></th>
                                    <th data-field="id">Nomor</th>
                                    <th data-field="name" data-editable="true">Judul Proposal</th>
                                    <th data-field="email" data-editable="true">Pemohon</th>
                                    <th data-field="phone" data-editable="true">Waktu</th>
                                    <th data-field="complete">Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $n = 1; foreach ($tampil as $u){ ?>
                                <tr>
                                    <td></td>
                                    <td><?= $n++ ?></td>
                                    <td><?= $u->judul_proposal ?></td>
                                    <td><?= $u->nama ?></td>
                                    <td><?= $u->tanggal_ajah ?> <?= $u->jam_ajah?><td>
                                    <td>
                                        <?php if($u->status_proposal == 0) { ?>
                                            <a class="btn btn-warning" href="">Diproses </a>
                                        <?php } else if($u->status_proposal == 1) { ?>
                                            <a class="btn btn-success" href="<?=base_url()?>pemohon/documen_seminar/<?=$u->id_proposal?>">Cetak Form Seminar </a>
                                        <?php } else { ?>
                                            <a class="btn btn-danger"href="">Ditolak </a>
                                        <?php } ?>
                                    </td>

                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>