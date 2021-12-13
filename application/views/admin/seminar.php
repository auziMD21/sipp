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
                                           <th>Teruskan Penilaian</th>
                                            </thead>
                                            <?php $n = 1; foreach ($tampil as $u){ ?>
                                            <tbody>
                                            <td><?= $n++ ?> </td>
                                            <td><?= $u->nama ?> </td>
                                            <td>
                                                <?php
                                                if($u->kabid == 0) {
                                                ?>
                                                <a href="<?=base_url()?>admin/US/<?=$u->id_seminar?>/1" class="btn btn-success">Kabid. PPP</a>
                                                <a href="<?=base_url()?>admin/US/<?=$u->id_seminar?>/2" class="btn btn-warning">Kabid. Sosduk</a>
                                                <a href="<?=base_url()?>admin/US/<?=$u->id_seminar?>/3" class="btn btn-primary">Kabid. Ekbang</a>
                                                <a href="<?=base_url()?>admin/US/<?=$u->id_seminar?>/4" class="btn btn-danger">Kabid. Imtek</a>
                                                <?php }
                                               else  if($u->kabid == 1) {
                                                ?>
                                                <a href="#" class="btn btn-success">Kabid. PPP</a>
                                                <?php }
                                                else  if($u->kabid == 2) {
                                                ?>
                                                <a href="#" class="btn btn-warning">Kabid. Sosduk</a>
                                                <?php }
                                                else  if($u->kabid == 3) {
                                                    ?>
                                                    <a href="#" class="btn btn-primary">Kabid. Ekbang</a>
                                                <?php }
                                                else{
                                                ?>
                                                <a href="#" class="btn btn-danger">Kabid. Imtek</a>
                                                <?php }?>
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
