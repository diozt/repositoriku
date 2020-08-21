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
                            <b class="text-primary mt-0"><?= $pejabat['username'] ?></b>
                            , Pejabat
                            <!-- <div class="mb-0 mt-3 fsize-1 text-primary"><b>John Doe</b></div>
                            <div class=""><b>Admin</b>, Kominfo</div> -->
                        </a>
                        <div class="divider"></div>
                        <!-- <div class="widget-content-left mt-3">
                            <img width="42" class="rounded-circle text-center " src="<?= base_url('./assets/'); ?>baru/assets/images/avatars/9.jpg" alt="">
                        </div>
                        <div class="widget-content-right">
                            <div class="mb-0 mt-3 fsize-1 text-primary"><b>John Doe</b></div>
                            <div class=""><b>Admin</b>, Kominfo</div>
                        </div> -->

                    </li>
                    <li class="app-sidebar__heading mt-3">Dashboards</li>
                    <li>
                        <a href="<?= base_url() . "pejabat" ?>" class="mm-active">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Dashboard
                        </a>
                    </li>
                    <div class="divider"></div>
                    <li>
                        <a href="http://localhost/repositoriku/auth/logout" class="">
                            <i class="metismenu-icon pe-7s-back-2 icon-gradient bg-danger"></i>
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
                            <i class="pe-7s-car icon-gradient bg-amy-crisp">
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
                        <!-- <a href="<?php echo base_url() . 'pejabat/form' ?>" class="btn-shadow btn btn-dark">
                            <i class="fa fa-plus-circle mr-2"></i>
                            Tambah
                        </a> -->
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
                                        <div class="widget-heading text-success mt-0">Most Downloaded!</div>
                                        <div class="widget-subheading"><?= $mostdownload->nama ?></div>
                                    </div>
                                    <div class="widget-content-right text-center">
                                        <div class="widget-numbers text-success"><?= $mostdownload->download ?></div>
                                        <div class="widget-subheading text-muted">
                                            <p class="mb-0 text-muted">downloads</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-3">
                        <div class="card mb-1 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading text-danger">Posted Today!</div>
                                        <div class="widget-subheading">Last year expenses</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger">1896</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-4">
                        <div class="card mb-1 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading text-warning">Number of Apps!</div>
                                        <div class="widget-subheading text-white">??</div>
                                    </div>
                                    <div class="widget-content-right text-center">
                                        <div class="widget-numbers text-warning"><?= count($files) ?></div>
                                        <div class="widget-subheading text-muted">
                                            <p class="mb-0 text-muted">apps</p>
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
                                                <a href="<?php echo base_url() . "pejabat/detail/" . $file->id . '/' . $file->nama . '/' . $file->penanggungjawab ?>" class="mr-1 btn btn-primary btn-sm"><i class="fa pe-7s-note2 fa-w-10 mr-1"></i> Details</a>
                                                <a class="btn-shadow btn btn-alternate mr-1 btn-sm" href="<?php echo base_url() . "pejabat/download/" . $file->nama . '/' . $file->id ?>"><i class="fa pe-7s-download fa-w-10 mr-1"></i>Download</a>
                                            </td>
                                        </tr>

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