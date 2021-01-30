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

                                <?= $this->session->flashdata('message'); ?>

                                <hr class=" sidebar-divider">

                                <h5>Role : <?= $role['role']; ?></h5>

                                <div class="table-responsive table--no-card m-b-30">

                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>menu</th>
                                                <th>access</th>
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
                                                        <label class="switch switch-text switch-primary">
                                                            <input type="checkbox" class="switch-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">

                                                            <span data-on="On" data-off="Off" class="switch-label"></span>
                                                            <span class="switch-handle"></span>
                                                        </label>
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