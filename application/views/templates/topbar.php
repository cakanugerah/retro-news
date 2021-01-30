<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                    </form>
                    <div class="header-button">
                        <!-- Temporary -->
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                            </div>
                            <div class="noti__item js-item-menu">
                            </div>
                            <div class="noti__item js-item-menu">
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TeMporary -->


                        <!-- TOPBAR -->
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img class="rounded-circle" src="<?= base_url('assets/image/profile/') . $user['image'] ?>" alt="user_pic">
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $user['name']; ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img class="image img-cir img-40" src="<?= base_url('assets/image/profile/') . $user['image'] ?>" alt="user_pic">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $user['name']; ?></a>
                                            </h5>
                                            <span class="email"><?php echo $user['email']; ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="<?= base_url('user/profile') ?>">
                                                <i class="zmdi zmdi-account"></i>Profile</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a class="no-line" href="<?= base_url('auth/logout') ?>">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END TOPBAR -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->