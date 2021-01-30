    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"><?php echo $title; ?></h2>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-8">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <?php echo form_open_multipart('user/changepassword'); ?>
                            <div class="row m-t-25">
                                <div class="col-lg-12">
                                    <div class="overview-item overview-item--c2">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="col-sm-10 icon mb-2">
                                                    <i class="fas fa-fw fa-key"></i>
                                                </div>

                                                <div class="col-sm-10">
                                                    <label for="current_password" class="form-control-label text-light">Current Password</label>
                                                    <input type="password" id="current_password" name="current_password" class="form-control">
                                                </div>

                                                <div class="col-sm-10 mt-2">
                                                    <label for="new_password1" class=" form-control-label text-light">New Password</label>
                                                    <input type="password" id="new_password1" name="new_password1" class="form-control">
                                                    <small class=" text-warning"><?php echo form_error('name'); ?></small>
                                                </div>

                                                <div class="col-sm-10 mt-2">
                                                    <label for="new_password2" class=" form-control-label text-light">Repeat Password</label>
                                                    <input type="password" id="new_password2" name="new_password2" class="form-control">
                                                    <small class=" text-warning"><?php echo form_error('name'); ?></small>
                                                </div>
                                                <div class="col-sm-10 mt-4 pb-3 ">
                                                    <button type="submit" class="btn btn-info btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Change Password
                                                    </button>



                                                </div>




                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            </form>


                        </div>





                    </div>
                </div>





            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->