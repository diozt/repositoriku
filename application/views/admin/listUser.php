<div class="app-main">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="mt-3">
                        <a href="#" class="btn-transition btn btn-outline-link">
                            <i class="metismenu-icon pe-7s-user"></i>
                            <b class="text-primary mt-0">Hai <?= $admin['username'] ?></b>
                            , Selamat Datang
                        </a>
                        <div class="divider"></div>

                    </li>
                    <li class="app-sidebar__heading mt-3">Dashboards</li>
                    <li>
                        <a href="<?= base_url() . "admin" ?>" class="">
                            <i class="metismenu-icon pe-7s-portfolio"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() . "admin/listUser" ?>" class="mm-active">
                            <i class="metismenu-icon pe-7s-users"></i>
                            User Management
                        </a>
                    </li>
                    <div class="divider"></div>
                    <li>
                        <a href="<?= base_url() . "auth/logout" ?>" class="">
                            <i class="metismenu-icon pe-7s-back-2"></i>
                            <p class="text-danger">Log out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-users icon-gradient bg-happy-fisher">
                            </i>
                        </div>

                        <div> User Management
                            <div class="page-title-subheading">Admin or Pejabat User Management
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:18px;"> <i class="fa fa-address-card mr-1"></i>Daftar User</h5>
                            <a href="<?php echo base_url() . 'admin/user' ?>" class="btn-shadow btn btn-focus  mb-2 pull-right">
                                <!-- <i class="pe pe-7s-plus pe-w-20"></i> -->

                                <i class="pe-7s-add-user mr-2"></i>
                                Add User
                            </a>
                            <table class="mb-0 table table-hover" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($user as $users) :
                                    ?>

                                        <tr>
                                            <!-- Id -->
                                            <td class="text-center text-muted">
                                                <?= $i ?>
                                            </td>

                                            <!-- File Name -->
                                            <td>
                                                <?= $users->username ?>
                                            </td>

                                            <!-- Description -->
                                            <td class="text-center"><?= $users->pass ?></td>

                                            <!-- Actions -->
                                            <td class="text-center">
                                                <?php if ($users->role == 1) {
                                                    echo "Admin";
                                                } elseif ($users->role == 2) {
                                                    echo "Pejabat";
                                                }  ?>

                                            </td>
                                            <td>
                                                <a href="#" class="btn-shadow btn btn-danger  mb-2">
                                                    <!-- <i class="pe pe-7s-plus pe-w-20"></i> -->
                                                    <i class="pe-7s-delete-user mr-2"></i>
                                                    Delete
                                                </a>

                                            </td>
                                        </tr>

                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-left">
                        <ul class="nav">
                            <li class="nav-item" style="text-align: center;">

                                <a href="javascript:void(0);" class="nav-link">
                                    Kominfo Kota Kediri
                                </a>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!--  Modal -->


<script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/main.js"></script>


</body>

</html>