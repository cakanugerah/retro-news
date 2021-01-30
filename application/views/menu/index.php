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
                            <div class="col-lg-8">
                                <?= form_error(
                                    'menu',
                                    '<div class="alert alert-danger mt-5" role="alert">',
                                    '</div>'
                                ); ?>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive table--no-card m-b-30">
                                    <a class="btn btn-info mb-4 mt-4" href="" data-toggle="modal" data-target="#newMenumodal"> <i class="fas fa-fw fa-plus"></i> Add New Menu</a>
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>menu</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            <?php foreach ($menu as $m) : ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $m['menu']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('menu/editMenu/' . $m['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                                        <a href="<?= base_url('menu/deleteMenu/' . $m['id']); ?>"" class=" btn btn-sm btn-danger">Delete</a>
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
    <div class="modal fade" id="newMenumodal" tabindex="-1" role="dialog" aria-labelledby="newMenumodal" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenumodal">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('menu'); ?>" method="post">
                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <input type="text" id="menu" name="menu" placeholder="Menu name" class="input-sm form-control-sm form-control">
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