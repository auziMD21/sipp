 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="row">
                                    <h3 class="title-3 m-b-30">
                                        <i class="fas fa-user"></i>Atur Jadwal Seminar</h3>
                                    <div class="filters">
                                        <br>
                                        <br>
                                        <div class="login-form">
                                            <form action="<?= base_url() ?>admin/inputjadwal/<?=$tampil?>" method="post">
                                                <div class="form-group">
                                                    <label>ID Proposal</label>
                                                    <input class="au-input au-input--full" type="text" name="id_proposal" readonly value="<?=$tampil?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="au-input au-input--full" type="date" name="tgl" placeholder="tanggal">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jam</label>
                                                    <input class="au-input au-input--full" type="time" name="jam" placeholder="jam">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ruangan</label>
                                                    <input class="au-input au-input--full" type="ruangan" name="ruangan" placeholder="ruangan">
                                                </div>
                                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Atur</button>
                                            </form>
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
