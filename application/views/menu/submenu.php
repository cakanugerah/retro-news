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
                            <div class="col-lg">
                                <?php if (validation_errors()) : ?>

                                    <div class="alert alert-danger mt-5" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>


                                <?php endif; ?>
                                <?= form_error(
                                    'menu',
                                    '<div class="alert alert-danger mt-5" role="alert">',
                                    '</div>'
                                ); ?>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive table--no-card m-b-30">
                                    <a class="btn btn-info mb-4 mt-4" href="" data-toggle="modal" data-target="#newSubMenumodal"> <i class="fas fa-fw fa-plus"></i> Add New Submenu</a>
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Menu</th>
                                                <th>URL</th>
                                                <th>Icon</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            <?php foreach ($subMenu as $sm) : ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $sm['title']; ?></td>
                                                    <td><?php echo $sm['menu']; ?></td>
                                                    <td><?php echo $sm['url']; ?></td>
                                                    <td><?php echo $sm['icon']; ?></td>
                                                    <td><?php echo $sm['is_active']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('menu/subMenu/editSub/' . $sm['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                                        <a href="<?= base_url('menu/subMenu/deleteSub/' . $sm['id']); ?>"" class=" btn btn-sm btn-danger">Delete</a>
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
    <div class="modal fade" id="newSubMenumodal" tabindex="-1" role="dialog" aria-labelledby="newSubMenumodal" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenumodal">Add New Submenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('menu/subMenu'); ?>" method="post">
                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <input type="text" id="submenu" name="title" placeholder="Submenu title" class="input-sm form-control-sm form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="0">--Please select menu--</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <input type="text" id="url" name="url" placeholder="Submenu url" class="input-sm form-control-sm form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <input type="text" id="icon" name="icon" placeholder="Submenu icon" class="input-sm form-control-sm form-control">
                            </div>
                        </div>




                        <div class="row form-group">
                            <div class="col col-sm-12">
                                <label class="switch switch-default switch-pill switch-success mr-2">
                                    <input type="checkbox" id="is_active" name="is_active" class="switch-input" value="1" checked="true">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>

                                </label>
                                Active?
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