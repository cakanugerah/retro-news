<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><?php echo $title; ?></h2>

                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>



            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-6">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <img class="align-center rounded-circle" src="<?= base_url('assets/image/profile/') . $user['image'] ?>" alt="user_pic" width="200" height="200">
                                    <h3 class="text-light display-6 mt-3"><strong><?php echo $user['name']; ?></strong></h3>
                                    <h2><?= $user['email'] ?></h2>
                                    <span class="mt-5">Member since: <?= date('d F Y', $user['date_created']); ?></span>
                                </div>

                            </div>
                            <div class="overview-chart">



                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->