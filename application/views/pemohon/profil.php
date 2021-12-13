<?php
?>
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="<?=base_url()?>upload/registrasi/<?=$_SESSION['foto']?>" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Name</b><br /><?=$_SESSION['nama']?> </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Tanggal Lahir</b><br /><?=$_SESSION['tgl']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Email ID</b><br /> <?=$_SESSION['email']?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Phone</b><br /> <?=$_SESSION['no_hp']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Address</b><br /><?=$_SESSION['alamat']?></p>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url()?>pemohon/edit_profil" style="width: 100%" class="btn btn-hover btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Riwayat Proposal</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">\
                                            <?php $n = 1; foreach ($proposal as $u){ ?>
                                            <div class="chat-message">
                                                <div class="message">
                                                    <a class="message-author" href="#"> <?= $u->judul_proposal?></a>
                                                    <span class="message-date"><?= $u->waktu?></span>
                                                    <span class="message-content"><a href="<?= base_url() ?>upload/proposal/<?= $u->file_proposal ?>">lihat Document</a>
															</span>
                                                    <div class="m-t-md mg-t-10">
                                                        <?php if($u->total_hasil>=70){?>
                                                        <a class="btn btn-xs btn-success"><i class="fa fa-thumbs-up"></i> Lulus </a>
                                                       <?php } else{ ?>
                                                        <a class="btn btn-xs btn-danger"><i class="fa fa-thumbs-down"></i> Tidak Lulus </a>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Full Name</b><br /> Fly Zend</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Mobile</b><br /> 01962067309</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Email</b><br /> fly@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Location</b><br /> UK</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content-profile">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Skill Set</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Java</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 90%;" class="progress-bar progress-yellow"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Php</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 80%;" class="progress-bar progress-green"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Apps</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 70%;" class="progress-bar progress-blue"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>C#</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 60%;" class="progress-bar progress-red"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Education</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Experience</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Subjects</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input name="number" type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Department">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Pincode">
                                                </div>
                                                <div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                    <input type="text" class="form-control" placeholder="Description">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select country</option>
                                                        <option>India</option>
                                                        <option>Pakistan</option>
                                                        <option>Amerika</option>
                                                        <option>China</option>
                                                        <option>Dubai</option>
                                                        <option>Nepal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select state</option>
                                                        <option>Gujarat</option>
                                                        <option>Maharastra</option>
                                                        <option>Rajastan</option>
                                                        <option>Maharastra</option>
                                                        <option>Rajastan</option>
                                                        <option>Gujarat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select city</option>
                                                        <option>Surat</option>
                                                        <option>Baroda</option>
                                                        <option>Navsari</option>
                                                        <option>Baroda</option>
                                                        <option>Surat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Website URL">
                                                </div>
                                                <input type="number" class="form-control" placeholder="Mobile no.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

