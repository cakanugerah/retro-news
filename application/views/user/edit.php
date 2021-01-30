    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"><?php echo $title; ?></h2>
                        </div>

                        <div class="row">
                            <?php echo form_open_multipart('user/edit'); ?>
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-10">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="col-sm-10 icon mb-2">
                                                    <i class="fas fa-edit mb-3"></i>
                                                </div>

                                                <div class="col-sm-10">
                                                    <label for="hf-email" class="form-control-label text-light">Email</label>
                                                    <input type="text" readonly id="email" name="email" class="form-control" value="<?= $user['email'] ?>">
                                                </div>

                                                <div class="col-sm-10 mt-2">
                                                    <label for="hf-email" class=" form-control-label text-light">Fullname</label>
                                                    <input type="text" id="name" name="name" class="form-control" value="<?= $user['name'] ?>">
                                                    <small class=" text-warning"><?php echo form_error('name'); ?></small>
                                                </div>

                                                <div class="col-sm-10 mt-2">
                                                    <label for="hf-email" class=" form-control-label text-light">Profile Picture</label>
                                                    <img src="<?= base_url('assets/image/profile/') . $user['image']; ?>" class="align-center img-thumbnail mx-auto" alt="" width="300px;" height="140px;">
                                                </div>

                                                <div class="col-sm-10 mt-2">
                                                    <input type="file" id="image" name="image" class="form-control-file">
                                                </div>




                                            </div>
                                            <div class="col-sm-10 mt-4 pb-3 ">

                                                <button type="submit" class="btn btn-info btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>


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