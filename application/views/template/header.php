<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>baru/main.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
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
            <div class="app-header__content" style="border-radius: 0px;">
                <div class="app-header-left">
                    <div class="input-group">
                        <div class="input-group-btn input-group-lg input-group-md">
                            <button type="button" class="btn btn-light dropdown-toggle btn-responsive" data-toggle="dropdown" aria-expanded="false" style="border-radius: 0px;height:100%">Select Search Type <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-left ml-0 pl-4" role="menu" style="width: 130%;border-radius: 0px;">
                                <table style="width:80%">
                                    <tr>
                                        <th>Advanced Search</th>
                                    </tr>
                                    <tr>
                                        <td>Jenis Aplikasi</td>
                                        <td colspan="2"><select class="form-control" name="jenispl" style="margin-bottom: 10px;border-radius: 0px;height:35px">
                                                <option hidden>Pilih</option>
                                                <option>Apk Desktop</option>
                                                <option>Apk Client/Server</option>
                                                <option>Apk Web</option>
                                        </td>
                                    </tr>
                                    <tr style="margin-bottom: 10px;">
                                        <td>Tanggal Entri</td>
                                        <td style="margin-bottom: 10px;border-radius: 0px"><input type="text" class="form-control" placeholder="From" onfocus="(this.type='date')" name="from"></td>
                                        <td><input type="text" class="form-control" placeholder="To" onfocus="(this.type='date')" name="to"></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Layanan Aplikasi</td>
                                        <td colspan="2"><select class="form-control mt-2" name="lvl" style="margin-bottom: 10px;border-radius: 0px;height:35px">
                                                <option hidden>Pilih</option>
                                                <option>Pelaporan Masyarakat</option>
                                                <option>Pembayaran</option>
                                                <option>Pendaftaran</option>
                                                <option>Perizinan</option>
                                                <option>Publikasi Informasi</option>
                                        </td>
                                    </tr>
                                </table>
                                <button type="button" class="btn btn-focus mt-2" style="border-radius: 0px;height:100%">Search</button>
                            </ul>
                        </div>
                        <input type="text" placeholder="Search..." class="search form-control" style="border-radius: 0px;width: 400px;" id="search" />
                    </div>


                    <script>
                        var sc = document.getElementById("search");
                        sc.addEventListener("keyup", function(event) {
                            if (event.keyCode === 13) {

                                window.location = '<?php echo base_url()  . "admin/search/" ?>' + sc.value;


                            }
                        });
                    </script>
                    <!-- <ul class="header-menu nav">
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul> -->
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <!-- <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button> -->
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="<?php echo base_url() . "auth/logout" ?>" class="dropdown-item">Log out</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Admin
                                    </div>
                                    <div class="widget-subheading">
                                        <?= $admin['username']; ?>
                                    </div>
                                </div>
                                <!-- <div class="widget-content-right header-user-info ml-3">
                                        <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                            <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                        </button>
                                    </div>############### -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>