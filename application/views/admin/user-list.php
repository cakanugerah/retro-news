    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"><?php echo $title; ?></h2>
                        </div>
                        <!-- Tabel menu-->
                        <div class="row">
                            <div class="col-lg-12">
                                <?= form_error(
                                    'role',
                                    '<div class="alert alert-danger mt-5" role="alert">',
                                    '</div>'
                                ); ?>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive table--no-card m-b-30">

                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>image</th>
                                                <th>User ID</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>role</th>
                                                <th>active</th>
                                                <th>date created</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            <?php foreach ($list as $u) : ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><img class="rounded-circle" src="<?php echo base_url('assets/image/profile/') . $u['image']; ?>" width="200" height="200"></td>
                                                    <td><?php echo $u['id']; ?></td>
                                                    <td><?php echo $u['name']; ?></td>
                                                    <td><?php echo $u['email']; ?></td>


                                                    <?php if ($user['role_id'] == $u['role_id']) : ?>
                                                        <td style="align:center;" class="btn btn-sm btn-warning text-light mt-3"><?php echo $u['role']; ?></td>
                                                    <?php else : ?>
                                                        <td class="btn btn-sm btn-success text-light mt-3"><?php echo $u['role']; ?></td>
                                                    <?php endif; ?>
                                                    <td>
                                                        <label class="switch switch-text switch-primary">
                                                            <input type="checkbox" class="switch-input" <?= check_active($u['is_active'], $u['id']); ?>>

                                                            <span data-on="On" data-off="Off" class="switch-label"></span>
                                                            <span class="switch-handle"></span>
                                                        </label>
                                                    </td>
                                                    <td><?php echo date('d F Y', $u['date_created']); ?></td>
                                                    <td>


                                                        <a href="<?= base_url('admin/edit/') . $u['id'] ?>" class="btn btn-sm btn-warning m-l-10 m-b-10 text-light"><i class=" fas fa-fw fa-edit"></i> Edit</a>
                                                        <a href="<?= base_url('admin/deleteuser/') . $u['id'] ?>" class="btn btn-sm btn-danger m-l-10 m-b-10 text-light" onclick="return confirm('You sure want to delete <?= $u['name'] ?>?')"><i class=" fas fa-fw fa-trash"></i> Delete</a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Tabel menu-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->