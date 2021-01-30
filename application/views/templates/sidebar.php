<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="<?= base_url('user') ?>">
                    <h2> <i class="fa fa-registered display-4"></i>etro News</h2>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">

            <!-- Query Menu Mobile -->
            <?php
            $role_id   = $this->session->userdata('role_id');
            $queryMenu = "  SELECT   `user_menu`.`id` , `menu`
                                    FROM     `user_menu` JOIN `user_access_menu` 
                                    ON       `user_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE    `user_access_menu`.`role_id` = $role_id
                                    ORDER BY `user_access_menu`.`menu_id` ASC
                                    ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- LoopMenu Mobile -->
            <?php foreach ($menu as $m) :  ?>
                <div class="sidebar-heading text-secondary mt-2 ml-2">
                    <?php echo $m['menu']; ?>
                </div>
                <!-- <hr class="sidebar-divider"> -->
                <!-- SubMenuMobile According to Menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "   SELECT *
                                                FROM  `user_sub_menu` JOIN `user_menu` 
                                                ON    `user_sub_menu`.`menu_id`   = `user_menu`.`id`
                                                WHERE `user_sub_menu`.`menu_id`   = $menuId
                                                AND   `user_sub_menu`.`is_active` = 1 
                                            
                                                ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <ul class="navbar-mobile__list list-unstyled">
                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li>
                            <?php else : ?>
                            <li>
                            <?php endif; ?>
                            <a href="<?= base_url($sm['url']); ?>">
                                <i class=" <?= $sm['icon'] ?>"></i><?= $sm['title'] ?></a>
                            </li>
                        <?php endforeach; ?>

                    <?php endforeach; ?>
                </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR DESKTOP-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="<?= base_url('user') ?>">
            <h2> <i class="fa fa-registered display-4"></i>etro News</h2>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <figure class="figure">
                <img src="<?= base_url('assets/image/profile/') . $user['image'] ?>" class="rounded-circle" alt="..." width="150" height="100">
                <figcaption class="figure-caption text-center"><strong><?php echo $user['name']; ?></strong></figcaption>
            </figure>

            <!-- Query Menu -->
            <?php
            $role_id   = $this->session->userdata('role_id');
            $queryMenu = "  SELECT   `user_menu`.`id` , `menu`
                                    FROM     `user_menu` JOIN `user_access_menu` 
                                    ON       `user_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE    `user_access_menu`.`role_id` = $role_id
                                    ORDER BY `user_access_menu`.`menu_id` ASC
                                    ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <hr class=" sidebar-divider">
            <!-- LoopMenu -->
            <?php foreach ($menu as $m) :  ?>
                <div class="sidebar-heading text-secondary">
                    <?php echo $m['menu']; ?>
                </div>
                <!-- <hr class="sidebar-divider"> -->

                <!-- SubMenu According to Menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "   SELECT *
                                                FROM  `user_sub_menu` JOIN `user_menu` 
                                                ON    `user_sub_menu`.`menu_id`   = `user_menu`.`id`
                                                WHERE `user_sub_menu`.`menu_id`   = $menuId
                                                AND   `user_sub_menu`.`is_active` = 1 
                                            
                                                ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <ul class="list-unstyled navbar__list">

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="active has-sub">
                            <?php else : ?>
                            <li class="has-sub">
                            <?php endif; ?>
                            <a href="<?= base_url($sm['url']); ?>">
                                <i class=" <?= $sm['icon'] ?>"></i><?= $sm['title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                        <hr class=" sidebar-divider">
                    <?php endforeach; ?>
                    </li>
                </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->