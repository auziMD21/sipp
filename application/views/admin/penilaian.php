 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="row">
                                    <h3 class="title-3 m-b-30">
                                        <i class="fas fa-user"></i>Penilaian Hasil Seminar</h3>
                                    <div class="filters">
                                        <br>
                                        <br>
                                        <div class="login-form">
                                            <form action="<?= base_url() ?>admin/inputnilai" method="post">
                                                <div class="form-group">
                                                    <label>ID Seminar</label>
                                                    <input class="au-input au-input--full" type="text" name="id_seminar" readonly value="<?=$tampil?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Isi Tulisan Penelitian</label>
                                                    <input class="au-input au-input--full" type="text" name="in1" placeholder="Input Nilai">
                                                </div>
                                                <div class="form-group">
                                                    <label>Format Penulisan</label>
                                                    <input class="au-input au-input--full" type="text" name="in2" placeholder="Input Nilai">
                                                </div>
                                                <div class="form-group">
                                                    <label>Penyajian</label>
                                                    <input class="au-input au-input--full" type="text" name="in3" placeholder="Input Nilai">
                                                </div>

                                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Submit</button>
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
