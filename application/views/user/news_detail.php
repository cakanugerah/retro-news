    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"><?php echo $title; ?></h2>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row m-t-25">

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->

                                    <div class="table-data__tool">

                                    </div>

                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <th>Picture</th>
                                                    <th>Title</th>
                                                    <th>Youtube</th>
                                                    <th>Category</th>
                                                    <th>Body</th>
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                    <th>Keywords</th>
                                                    <th>Post Date</th>
                                                    <th>Author</th>

                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><img class="img-rounded" src="<?= base_url('assets/uploads/images/thumbs/') . $detail['picture'] ?>" alt="user_pic" /></td>
                                                    <td>
                                                        <span class="block-email"><?= $detail['news_title']; ?></span>
                                                    </td>
                                                    <td>
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/<?= $detail['youtube_url'] ?>" title="YouTube video" allowfullscreen></iframe>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="block-email"><?= $detail['id_cat']; ?></span>
                                                    </td>

                                                    <td class="desc"><?= $detail['news_body'] ?></td>
                                                    <td><?= $detail['news_status']; ?></td>
                                                    <td>
                                                        <span class="status--process"><?= $detail['news_type']; ?></span>
                                                    </td>
                                                    <td><?= $detail['keywords']; ?></td>
                                                    <td><?= date('d M Y H:i:s', $detail['post_date']);  ?></td>
                                                    <td><?= $detail['id_user']; ?></td>

                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- END DATA TABLE -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->