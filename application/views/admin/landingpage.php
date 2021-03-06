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
                                <a href="<?= base_url() . "admin" ?>" class="mm-active">
                                    <i class="metismenu-icon pe-7s-portfolio"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() . "admin/listUser" ?>" class="">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    User Management
                                </a>
                            </li>
                            <div class="divider"></div>
                            <li>
                                <a href="<?= base_url() . "Auth/logout" ?>" class="">
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
                                    <i class="pe-7s-portfolio icon-gradient bg-amy-crisp">
                                    </i>
                                </div>
                                <!-- <div>Analytics Dashboard
                                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                            </div>
                                        </div>######### -->
                                <div> Dashboard Repository
                                    <div class="page-title-subheading">Sistem Elektronik Kominfo Kota Kediri.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <a href="<?php echo base_url() . 'admin/form' ?>" class="btn-shadow btn btn-dark">
                                    <!-- <i class="pe pe-7s-plus pe-w-20"></i> -->
                                    <i class="fa fa-plus-circle mr-2"></i>
                                    Tambah
                                </a>
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

                    <!-- <div class="card mb-3"> -->
                    <div class="card-body mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-1 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-info">Popular Apps!</div>
                                                <div class="widget-subheading"><?= $mostview->nama ?></div>
                                            </div>
                                            <div class="widget-content-right text-center">
                                                <div class="widget-numbers text-info"><?= $mostview->view ?></div>
                                                <div class="widget-subheading text-muted">
                                                    <p class="mb-0 text-muted">views</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-1 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-success">Most Downloaded!</div>
                                                <div class="widget-subheading"><?= $mostdownload->nama ?></div>
                                            </div>
                                            <div class="widget-content-right text-center">
                                                <div class="widget-numbers text-success"><?= $mostdownload->download ?></div>
                                                <div class="widget-subheading text-muted">
                                                    <p class="mb-0 text-muted">donwloads</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-1 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-warning">Number of App!</div>
                                                <class class="widget-subheading">there are</class>
                                            </div>
                                            <div class="widget-content-right text-center">
                                                <div class="widget-numbers text-warning"><?= $jmlall ?></div>
                                                <div class="widget-subheading text-muted">
                                                    <p class="mb-0 text-muted">uploaded</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- col-md-12 -->
                            <!-- <div class="col-md-12">
                                    <div class="card mb-0 widget-content bg-deep-blue">
                                        <div class="card-body ">
                                            <div class="card-title fsize-1 ">Deskripsi</div>
                                            <p>Isi Deskripsi</p>
                                        </div>
                                    </div>
                                </div> -->

                        </div>
                    </div>
                    <!-- </div> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">List Application
                                    <div class="btn-actions-pane-right">
                                        <!-- <div role="group" class="btn-group-sm btn-group">
                                                    <button class="active btn btn-focus">Last Week</button>
                                                    <button class="btn btn-focus">All Month</button>
                                                </div>########## -->
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">File Name</th>
                                                <th class="text-center">Entry Time</th>
                                                <!-- <th class="text-center">Status</th> -->
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($files as $file) :
                                            ?>

                                                <tr>
                                                    <!-- Id -->
                                                    <td class="text-center text-muted">
                                                        <?= $i ?>
                                                    </td>

                                                    <!-- File Name -->
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <!-- <div class="widget-content-left">
                                                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                            </div> -->
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading"><?php echo $file->nama; ?></div>
                                                                    <div class="widget-subheading opacity-7"><?php echo $file->deskripsi; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!-- Description -->
                                                    <td class="text-center"><?= time_elapsed_string($file->tglentri); ?></td>

                                                    <!-- Actions -->
                                                    <td class="text-center">
                                                        <?php $parameter = array($file->id, $file->nama) ?>
                                                        <button type="button" onclick="godetail('<?= $file->id ?>', '<?= $file->nama ?>')" id="detail" class="mr-1 btn btn-primary btn-sm"><i class="fa pe-7s-note2 fa-w-10"></i> Details</button>
                                                        <a class="mr-1 btn-shadow btn btn-info btn-sm" href="<?php echo base_url() . "admin/edit/" . $file->id . '/' . $file->nama ?>"><i class="fa pe-7s-edit fa-w-10"></i> Edit</a>
                                                        <button class="mr-1 btn btn-danger btn-sm" onClick="cc('<?= $file->id ?>','<?= $file->nama ?>',' <?= $file->penanggungjawab ?>')" id="showPopup<?= $file->id ?>" data-toggle="modal" data-target="#popupRemove"><i class="fa pe-7s-trash fa-w-10"></i> Remove</button>
                                                    </td>
                                                </tr>
                                                <script>
                                                    function godetail(id, nama) {
                                                        window.location.href = "<?php echo base_url() . "admin/countview/" ?>" + id + "/" + nama;

                                                    }
                                                </script>

                                            <?php $i++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="d-block text-center card-footer">
                                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                            <button class="btn-wide btn btn-success">Save</button>###############
                                        </div> -->
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

        <div class="modal" tabindex="1000" id="popupRemove" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete this?
                    </div>
                    <script>
                        // var show_btn = $('#showPopup<?= $file->id ?>');

                        var idku = "";
                        var nama = "";
                        var pjawab = "";

                        function cc(id, nm, pj) {
                            idku = id;
                            nama = nm;
                            pjawab = pj;

                        }
                    </script>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" onclick="ll()" class="btn btn-danger">Yes</button>
                        <script>
                            function ll() {
                                window.location.href = "<?= base_url('admin/delete/') ?>" + idku + "/" + nama + "/" + pjawab;
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>


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