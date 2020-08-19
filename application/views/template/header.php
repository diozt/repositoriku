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
    <meta http-equiv="refresh" content="900" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>baru/main.css">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style>
        .blank_row {
            height: 10px !important;
            /* overwrites any other rules */
            background-color: #FFFFFF;
        }

        .dropdown.dropdown-lg .dropdown-menu {
            margin-top: -1px;
            padding: 6px 20px;
        }

        .input-group-btn .btn-group {
            display: flex !important;
        }

        .btn-group .btn {
            border-radius: 0;
            margin-left: -1px;
        }

        .btn-group .btn:last-child {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .btn-group .form-horizontal .btn[type="submit"] {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .form-horizontal .form-group {
            margin-left: 0;
            margin-right: 0;
        }

        .form-group .form-control:last-child {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        @media screen and (min-width: 768px) {
            #adv-search {
                width: 500px;
                margin: 0 auto;
            }

            .dropdown.dropdown-lg {
                position: static !important;
            }

            .dropdown.dropdown-lg .dropdown-menu {
                min-width: 500px;
            }
        }
    </style>
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
                <div class=" app-header-left" style="width: 140%;">
                    <div class="input-group ml-0" id="adv-search">
                        <input type="text" name="cari" id="cari" class="form-control" placeholder="Search" />
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <div class="dropdown dropdown-lg">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="height: 100%;"><span class="caret"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right pl-3 pb-3" role="menu">
                                        <form class="form-horizontal" role="form" action="<?= base_url()  . "admin/advanceSearch/" ?>" method="get">
                                            <table style="width:100%">
                                                <tr>
                                                    <th colspan="2">Search By :</th>
                                                </tr>
                                                <tr class="blank_row"></tr>
                                                <tr>
                                                    <td colspan="2">Jenis Software</td>

                                                    <td colspan="2"><select class="form-control" id="jenispl" name="jenispl" style="margin-bottom: 10px;border-radius: 0px;height:35px">
                                                            <option selected hidden></option>
                                                            <option>Apk Desktop</option>
                                                            <option>Apk Client/Server</option>
                                                            <option>Apk Web</option>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Tanggal Entri</td>
                                                    <td style="margin-bottom: 10px;border-radius: 0px"><input type="text" class="form-control" placeholder="From" onfocus="(this.type='date')" id="from" name="from"></td>
                                                    <td><input type="text" class="form-control" placeholder="To" onfocus="(this.type='date')" name="to" id="to"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Jenis Layanan Aplikasi</td>
                                                    <td colspan="2"><select class="form-control mt-2" id="jnslayanan" name="jnslayanan" style="margin-bottom: 10px;border-radius: 0px;height:35px">
                                                            <option selected hidden></option>
                                                            <option>Pelaporan Masyarakat</option>
                                                            <option>Pembayaran</option>
                                                            <option>Pendaftaran</option>
                                                            <option>Perizinan</option>
                                                            <option>Publikasi Informasi</option>
                                                    </td>
                                                </tr>
                                            </table>
                                            <button type="submit" class="btn btn-primary mt-3">Search</button>
                                        </form>
                                    </div>
                                </div>
                                <button type="button" onclick="search()" id="btcari" name="btcari" class="btn btn-transition btn btn-outline-info"><img src="https://img.icons8.com/cotton/24/000000/search--v1.png" /></span></button>
                            </div>
                        </div>
                    </div>



                    <script>
                        var btcari = document.getElementById("btcari");
                        cari.addEventListener("keyup", function(event) {
                            var cari = document.getElementById("cari");
                            if (event.keyCode == 13) {
                                window.location = '<?= base_url()  . "admin/search/" ?>' + cari.value;
                            }
                        });

                        function search() {
                            var cari = document.getElementById("cari");
                            window.location = '<?= base_url()  . "admin/search/" ?>' + cari.value;
                        }
                    </script>
                </div>
                <div class="app-header-right" style="width: 10%;">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <!-- do something -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>