<?php
?>
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
                                <li><span class="bread-blod">Permohonaan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-pro-review-area mt-t-30 mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-payment-inner-st">
                                    <ul id="myTabedu1" class="tab-review-design">
                                        <li class="active"><a href="#description">Formulir Pengajuan Proposal</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div id="dropzone1" class="pro-ad">
                                                            <form action="<?=base_url()?>/pemohon/tambahproposal"  enctype="multipart/form-data" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Judul Proposal</label>
                                                                            <input name="judul_proposal" type="text" class="form-control" placeholder="Judul Proposal">
                                                                            <?= form_error('judul','<small class="text-danger pl-3">'.'</small>') ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>File Proposal</label>
                                                                            <input name="file_proposal" type="file" class="form-control" placeholder="Proposal">
                                                                            <?= form_error('file_proposal','<small class="text-danger pl-3">'.'</small>') ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="payment-adress">
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
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
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="devit-card-custom">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control" placeholder="Phone">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="Password">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                                    </div>
                                                                    <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
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
                                                            <div class="col-lg-12">
                                                                <div class="devit-card-custom">
                                                                    <div class="form-group">
                                                                        <input type="url" class="form-control" placeholder="Facebook URL">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="url" class="form-control" placeholder="Twitter URL">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="url" class="form-control" placeholder="Google Plus">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="url" class="form-control" placeholder="Linkedin URL">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
            </div>
        </div>
    </div>
</div>
</div>
</div>
