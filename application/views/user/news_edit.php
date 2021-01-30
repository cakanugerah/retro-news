<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35"><?php echo $title; ?> </h3>

                    <?= form_error(
                        'role',
                        '<div class="alert alert-danger mt-5" role="alert">',
                        '</div>'
                    ); ?>
                    <?= $this->session->flashdata('message'); ?>

                    <!-- Form INput -->
                    <?php echo form_open_multipart(base_url('news/editnews/' . $edit['id_news'])); ?>
                    <input name="user_id" class="form-control" type="hidden" readonly value="<?= $user['id']; ?>">
                    <div class="overview-item overview-item--c5">
                        <div class="row">
                            <input name="id_news" class="form-control" type="hidden" readonly value="<?= $edit['id_news']; ?>">
                            <div class="col-md-6 pt-2 pl-4">
                                <label for="author" class="text-light">Author</label>
                                <input name="author" class="form-control" type="text" readonly value="<?= $edit['id_user']; ?>">
                                <label for="" class="text-light">Type</label>
                                <select name="type" class="form-control" type="text">
                                    <?php foreach ($type as $t) : ?>
                                        <?php if ($t == $edit['news_type']) : ?>
                                            <option value="<?= $t; ?>" selected><?= $t; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $t; ?>"><?= $t; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <label for="" class="text-light">Status</label>
                                <select name="status" class="form-control" type="text">
                                    <?php foreach ($status as $s) : ?>
                                        <?php if ($s == $edit['news_status']) : ?>
                                            <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $s; ?>"><?= $s; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 pt-2 pr-4">
                                <label for="" class="text-light">Category</label>
                                <select name="id_category" class="form-control" type="text">
                                    <option value="">--Select Category--</option>
                                    <?php foreach ($category as $cat) : ?>
                                        <option value="<?= $cat['id_cat'] ?>" <?php if ($edit['id_cat'] == $cat['id_cat']) {
                                                                                    echo 'selected';
                                                                                } ?>><?= $cat['cat_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="" class="text-light">Youtube Url</label>
                                <input name="youtube_url" class="form-control" type="text" value="<?= $edit['youtube_url'] ?>">
                                <label for="" class="text-light">Keywords (Google SEO)</label>
                                <input name="keywords" class="form-control" type="text" value="<?= $edit['keywords'] ?>">
                                <small class=" text-danger"><?php echo form_error('keywords'); ?></small>

                            </div>
                            <div class="col-md-12 pl-4 mt-2 pr-4">
                                <label for="" class="text-light">Title</label>
                                <input name="title" class="form-control" type="text" value="<?= $edit['news_title'] ?>">
                                <small class=" text-danger"><?php echo form_error('title'); ?></small>
                                <label for="" class="text-light mt-2">Content</label>
                                <textarea name="content" class="form-control" id="ckeditor" type="text"><?= $edit['news_body'] ?></textarea>
                                <small class=" text-danger"><?php echo form_error('content'); ?></small>
                                <label for="" class="text-light mt-2">Post Image</label>
                                <input name="image" class="form-control" type="file">
                                <div class="col-sm-10 mt-2">
                                    <label for="hf-email" class=" form-control-label text-light">Feature Image</label>
                                    <img src="<?= base_url('assets/uploads/images/thumbs/') . $edit['picture']; ?>" class="align-center img-thumbnail mx-auto" alt="" width="300px;" height="140px;">
                                </div>
                                <div class="form-group col-md-4 mt-2 pull-right pb-2">
                                    <button type="submit" class="btn btn-block btn-dark"><i class="fas fa-fw fa-save"></i><strong>Edit News</strong></button>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->