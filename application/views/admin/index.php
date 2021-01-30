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
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>article published</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,060,386</h2>
                                                <span>total viewers</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35">data article</h3>
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-right ml-auto">
                                            <a href="<?= base_url('news') ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <i class="zmdi zmdi-plus"></i>add item</a>
                                        </div>
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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <?php foreach ($news as $n) : ?>
                                                <tbody>
                                                    <tr class="tr-shadow">
                                                        <td>
                                                            <label class="au-checkbox">
                                                                <input type="checkbox">
                                                                <span class="au-checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td><img class="img-rounded" src="<?= base_url('assets/uploads/images/thumbs/') . $n['picture'] ?>" alt="user_pic" /></td>
                                                        <td>
                                                            <span class="block-email"><?= $n['news_title']; ?></span>
                                                        </td>
                                                        <td>
                                                            <div class="ratio ratio-16x9">
                                                                <iframe src="https://www.youtube.com/embed/<?= $n['youtube_url'] ?>" title="YouTube video" allowfullscreen></iframe>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="block-email"><?= $n['id_cat']; ?></span>
                                                        </td>

                                                        <td class="desc"><?= character_limiter($n['news_body'], 100); ?></td>
                                                        <td><?= $n['news_status']; ?></td>
                                                        <td>
                                                            <span class="status--process"><?= $n['news_type']; ?></span>
                                                        </td>
                                                        <td><?= $n['keywords']; ?></td>
                                                        <td><?= date('d M Y H:i:s', $n['post_date']);  ?></td>
                                                        <td><?= $n['id_user']; ?></td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a href="<?= base_url('news/detailnews/') . $n['id_news'] ?>" class="btn item" data-toggle="tooltip" data-placement="top" title="Detail">
                                                                    <i class="zmdi zmdi-mail-send"></i>
                                                                </a>
                                                                <a href="<?= base_url('news/editnews/') . $n['id_news'] ?>" class="btn item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </a>
                                                                <a href="<?= base_url('news/deletenews/') . $n['id_news'] ?>" class="btn item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; ?>
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