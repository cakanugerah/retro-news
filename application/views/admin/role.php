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
                                    <a class="btn btn-info mb-4 mt-4" href="" data-toggle="modal" data-target="#newRolemodal"> <i class="fas fa-fw fa-plus"></i> Add New Role</a>
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>role</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            <?php foreach ($role as $r) : ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $r['role']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-success m-l-10 m-b-10 text-light">Access</a>
                                                        <a href="" class="btn btn-warning m-l-10 m-b-10 text-light">Edit</a>
                                                        <a href="" class="btn btn-danger m-l-10 m-b-10 text-light">Delete</a>
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
    <!-- modal small -->
    <div class="modal fade" id="newRolemodal" tabindex="-1" role="dialog" aria-labelledby="newRolemodal" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newRolemodal">Add New Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/role'); ?>" method="post">
                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <input type="text" id="role" name="role" placeholder="Role name" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal small -->
    <!-- END PAGE CONTAINER-->