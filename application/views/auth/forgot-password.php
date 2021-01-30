<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <h2><i class="fa fa-registered display-3"></i>etro News</h2>
                        </a>
                    </div>
                    <?php echo $this->session->flashdata('message'); ?>
                    <div class="login-form">
                        <form action="<?= base_url('auth/forgotpassword'); ?>" method="post">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="text" name="email" placeholder="Enter Email" value="<?= set_value('email'); ?>">
                                <small class=" text-danger"><?php echo form_error('email'); ?></small>
                            </div>

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Reset Password</button>

                        </form>
                        <div class="register-link">
                            <p>

                                <a class="small" href="<?php echo base_url('auth'); ?>"> Back to login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>