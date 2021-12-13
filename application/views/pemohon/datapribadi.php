<!-- Mobile Menu start -->
<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Data</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pemohon</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                    <tr>
                        <th data-field="state" data-checkbox="false"></th>
                        <th data-field="id">nama</th>
                        <th data-field="name" data-editable="true">tanggal lahir</th>
                        <th data-field="email" data-editable="true">alamat</th>
                        <th data-field="phone" data-editable="true">email</th>
                        <th data-field="complete">No HP</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $n = 1; foreach ($tampil as $u){ ?>
                        <tr>
                            <td></td>
                            <td><?= $n++ ?></td>
                            <td><?= $u->judul_proposal ?></td>
                            <td><?= $u->nama ?></td>
                            <td><?= $u->tanggal?> <?=$u->jam ?><td>
                            <td>
                                <?php if($u->status_proposal == 0) { ?>
                                    <a class="btn btn-warning" href="">Diproses </a>
                                <?php } else if($u->status_proposal == 1) { ?>
                                    <a class="btn btn-success"href="">Diterima lanjut seminar.. </a>
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