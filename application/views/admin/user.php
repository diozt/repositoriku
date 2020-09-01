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
                                <!-- <div>Analytics Dashboard
                                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                            </div>
                                        </div>######### -->
                                <div> User Management
                                    <div class="page-title-subheading">Admin or Pejabat User Management
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <!-- <a href="<?php echo base_url() . 'admin/form' ?>" class="btn-shadow btn btn-dark"> -->
                                <!-- <i class="pe pe-7s-plus pe-w-20"></i> -->
                                <!-- <i class="fa fa-plus-circle mr-2"></i> -->
                                <!-- Tambah -->
                                <!-- </a> -->
                                <!-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                            <i class="fa fa-star"></i>
                                        </button> -->
                                <!-- <div class="d-inline-block dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                                    <i class="fa pe-7s-plus fa-w-10"></i>
                                                </span>
                                                Buttons
                                            </button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox"></i>
                                                            <span>
                                                                Inbox
                                                            </span>
                                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-book"></i>
                                                            <span>
                                                                Book
                                                            </span>
                                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-picture"></i>
                                                            <span>
                                                                Picture
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                            <i class="nav-link-icon lnr-file-empty"></i>
                                                            <span>
                                                                File Disabled
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">User Management
                                    <div class="btn-actions-pane-right">
                                        <!-- <div role="group" class="btn-group-sm btn-group">
                                                    <button class="active btn btn-focus">Last Week</button>
                                                    <button class="btn btn-focus">All Month</button>
                                                </div>########## -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url() . 'admin/user' ?>" method="POST" class="need-validation">
                                        <div class="row">
                                            <div class="col-6 mb-4">
                                                <label for="exampleEmail" class="">Username</label>
                                                <input type="text" id="user" name="userName" placeholder="Username here..." class="form-control-sm form-control" value="<?= set_value('userName') ?>">
                                                <?= form_error('userName', '<small class="text-danger pl-1">', '</small>') ?>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label for="exampleEmail" class="">Select Position</label>
                                                <select class="form-control-sm form-control" name="role" value="<?= set_value('role') ?>">
                                                    <option hidden>Pilih Role</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Pejabat</option>
                                                </select>
                                                <?= form_error('role', '<small class="text-danger pl-1">', '</small>') ?>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="exampleEmail" class="">Password</label>
                                                <input type="password" id="user" name="userPass" placeholder="Password here..." class="form-control-sm form-control" value="<?= set_value('userPass') ?>">
                                                <?= form_error('userPass', '<small class="text-danger pl-1">', '</small>') ?>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="exampleEmail" class="">Confirm Password</label>
                                                <input type="password" id="user" name="userCPass" placeholder="Confirm Password here..." class="form-control-sm form-control" value="<?= set_value('userCPass') ?>">
                                                <?= form_error('userCPass', '<small class="text-danger pl-1">', '</small>') ?>
                                            </div>
                                            <div class="col-12 text-right">
                                                <label for="submit" class="text-white">btn-label</label>
                                                <button class="btn btn-primary btn mt-2" data-toggle="modal" data-target="#popupSubmitUser">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
                            <!-- <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 4
                        </a>
                    </li>
                </ul>
            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
        </div>
        </div>

        <!--  Modal -->


        <script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/main.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('table.display').DataTable();
            });
        </script>
        <?php
        function time_elapsed_string($datetime, $full = false)
        {
            date_default_timezone_set("Asia/Bangkok");
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);

            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;

            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }

            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }
        ?>
        </body>

        </html>