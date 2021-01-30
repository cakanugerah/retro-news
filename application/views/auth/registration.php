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
                    <div class="login-form">
                        <form action="<?= base_url('auth/registration'); ?>" method="post">
                            <div class="form-group">
                                <label>Fullname</label>
                                <input class="au-input au-input--full" type="text" name="name" placeholder="Fullname" value="<?= set_value('name'); ?>">
                                <small class="text-danger"><?php echo form_error('name'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                <small class="text-danger"><?php echo form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password1" placeholder="Password">
                                <small class="text-danger"><?php echo form_error('password1'); ?></small>

                            </div>
                            <div class="form-group">

                                <input class="au-input au-input--full" type="password" name="password2" placeholder="Confirm Password">
                            </div>

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                        </form>

                        <div class="register-link">
                            <p>
                                Already have account?
                                <a href="<?php echo base_url('auth'); ?>">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>