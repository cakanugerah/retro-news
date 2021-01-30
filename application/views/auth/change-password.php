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

                    <div class="text-center">
                        <h5>Password reset for</h5>
                        <h4 class="text-secondary mb-4"><?= $this->session->userdata('reset_email'); ?></h4>
                    </div>


                    <?php echo $this->session->flashdata('message'); ?>
                    <div class="login-form">
                        <form action="<?= base_url('auth/changepassword'); ?>" method="post">
                            <div class="form-group">
                                <label>New password</label>
                                <input class="au-input au-input--full" type="password" name="password1" placeholder="Enter Password">
                                <small class=" text-danger"><?php echo form_error('password1'); ?></small>
                            </div>

                            <div class="form-group">
                                <label>Repeat password</label>
                                <input class="au-input au-input--full" type="password" name="password2" placeholder="Confirm Password">
                                <small class=" text-danger"><?php echo form_error('password2'); ?></small>
                            </div>

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Reset Password</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>