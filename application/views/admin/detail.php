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
                        <a href="<?= base_url() . "admin" ?>">
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
                            <i class="pe-7s-magic-wand icon-gradient bg-mixed-hopes">
                            </i>
                        </div>

                        <?php foreach ($info as $informasi) : ?>
                            <div> Lebih Detail Tentang Aplikasi <?= $informasi->nama; ?>
                                <div class="page-title-subheading">This is a Repository.
                                </div>
                            </div>
                    </div>
                    <div class="page-title-actions">
                        <div class="d-inline-block">

                            <!-- <a href="<?php echo base_url() . "admin/download/" . $informasi->nama ?>" class="btn btn-success btn-sm">Download</a> -->
                            <button class="mb-2 mr-2 btn-shadow btn btn-danger" data-toggle="modal" data-target="#popupRemove">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa pe-7s-trash fa-w-10"></i>
                                </span>
                                Remove
                            </button>

                            <a class="mb-2 mr-2 btn-shadow btn btn-info" href="<?php echo base_url() . "admin/edit/" . $informasi->id . '/' . $informasi->nama . '/' . $informasi->penanggungjawab ?>">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa pe-7s-edit fa-w-10"></i>
                                </span>
                                Edit
                            </a>

                            <a class="mb-2 mr-2 btn-shadow btn btn-alternate" href="<?php echo base_url() . "admin/download/" . $informasi->nama ?>">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa pe-7s-download fa-w-10"></i>
                                </span>
                                Download
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Detail Aplikasi
                            <div class="btn-actions-pane-right">
                                <!-- <div role="group" class="btn-group-sm btn-group">
                                                    <button class="active btn btn-focus">Last Week</button>
                                                    <button class="btn btn-focus">All Month</button>
                                                </div>########## -->
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-3 widget-content bg-midnight-bloom">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left text-white">
                                                    <div class="">ID</div>
                                                    <br>
                                                    <div class="">Nama</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-heading widget-numbers fsize-1 text-white text-right"><?= $du['id'] ?></div>
                                                    <br>
                                                    <div class="widget-heading widget-numbers fsize-1 text-white text-right"><?= $du['nama'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-3 widget-content bg-ripe-malin">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left text-white">
                                                    <div class="">Sasaran Pelayanan</div>
                                                    <br>
                                                    <div class="">Kategori Sistem</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-heading widget-numbers fsize-1 text-white text-right"><?= $du['sasaran'] ?></div>
                                                    <br>
                                                    <div class="widget-heading widget-numbers fsize-1 text-white text-right"><?= $du['kategorisistem'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3 widget-content bg-grow-early">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left text-white">
                                                    <div class="">Kategori Akses</div>
                                                    <br>
                                                    <div class="">Alamat URL</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-heading widget-numbers fsize-1 text-white text-right"><?= $du['kategoriakses'] ?></div>
                                                    <br>
                                                    <a href="<?= $du['url'] ?>" target="_blank" class="mb-2 ml-4 btn-sm btn-shadow btn-icon btn-icon-only btn-light" data-toggle="tooltip" data-placement="bottom" data-original-title="<?= $du['url'] ?>">
                                                        <i class="pe-7s-link btn-icon-wrapper"> </i>
                                                    </a>
                                                    <!-- ###Error rung kenek href e -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card mb-0 widget-content bg-deep-blue">
                                        <div class="card-body ">
                                            <div class="card-title fsize-1 ">Deskripsi</div>
                                            <p><?= $du['deskripsi'] ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- =============================================================================== -->
                        <div class="col-md-12 mb-5">
                            <div id="accordion" class="accordion-wrapper">
                                <div class="card">
                                    <div id="headingOne" class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                            <h5 class="m-0 p-0">Data Umum</h5>
                                        </button>
                                    </div>
                                    <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="mb-3 table-borderless table-responsive table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-0 mb-0 text-primary">Fungsi Yang Dimiliki</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Fungsi </td>
                                                                <td>: <?= $fu['fungsi'] ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Keterangan</td>
                                                                <td>: <?= $fu['keterangan'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-0 text-primary">Ruang Lingkup Sistem Elektronik</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Ruang Lingkup</td>
                                                                <td>: <?= $du['ruanglingkup'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-0 text-primary">Jenis Layanan Sistem Elektronik</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Jenis Layanan </td>
                                                                <td>: <?= $jl['jenis'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Keterangan </td>
                                                                <td>: <?= $jl['keterangan'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">Sistem Pengaman</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="40%">Nama Sistem Pengaman</td>
                                                                <td>: <?= $sp['namasp'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="40%">Keterangan</td>
                                                                <td>: <?= $sp['keterangan'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">Sistem Terkait</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Sistem Terkait</td>
                                                                <td>: <?= $st['namast'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Keterangan</td>
                                                                <td>: <?= $st['keterangan'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-md-6">
                                                    <table class="mb-0 table-borderless table-responsive table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-0 mb-1 text-primary">Sertifikasi</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Sertifikat</td>
                                                                <td>: <?= $stf['namasertif'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Institusi</td>
                                                                <td>: <?= $stf['namainst'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Terbit</td>
                                                                <td>: <?= $stf['tglterbit'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Mulai Berlaku</td>
                                                                <td>: <?= $stf['tglmulai'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Habis Berlaku</td>
                                                                <td>: <?= $stf['tglhabis'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Masa Laku (Tahun)</td>
                                                                <td>: <?= $stf['masalaku'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor Sertifikat</td>
                                                                <td>: <?= $stf['nosertif'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ruang Lingkup</td>
                                                                <td>: <?= $stf['ruanglingkup'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mt-1 text-primary">Penguna Layanan Sistem Elektronik</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Pengguna</td>
                                                                <td>: <?= $pl['jenisPengguna'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Keterangan</td>
                                                                <td>: <?= $pl['keterangan'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="headingTwo" class="b-radius-0 card-header">
                                        <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                            <h5 class="m-0 p-0">Data Pendukung</h5>
                                        </button>
                                    </div>
                                    <div data-parent="#accordion" id="collapseOne2" class="collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">


                                                    <!-- <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="card mb-3 widget-content bg-heavy-rain">
                                                                    <div class="card-body">
                                                                    <h5 class="card-title">Fungsi yang Dimiliki</h5>    
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left">
                                                                                    <div class="">Fungsi</div>
                                                                                    <br>
                                                                                    <div class="">Keterangan</div>                                                    
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="widget-heading widget-numbers fsize-1 text-right"><?= $fu['fungsi'] ?></div>
                                                                                    <br>
                                                                                    <div class="widget-heading widget-numbers fsize-1 text-right"><?= $fu['keterangan'] ?></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="card mb-3 widget-content bg-heavy-rain">    
                                                                    <div class="card-body">
                                                                    <h5 class="card-title">Fungsi yang Dimiliki</h5>    
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left">
                                                                                    <div class="">Fungsi</div>
                                                                                    <br>
                                                                                    <div class="">Keterangan</div>                                                    
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="widget-heading widget-numbers fsize-1 text-right"><?= $fu['fungsi'] ?></div>
                                                                                    <br>
                                                                                    <div class="widget-heading widget-numbers fsize-1 text-right"><?= $fu['keterangan'] ?></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <table class="mb-3 table-borderless table-responsive table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title text-primary">Satuan Kerja</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Satuan kerja </td>
                                                                <td>: <?= $plg['namask'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Satuan Kerja</td>
                                                                <td>: <?= $plg['alamatsk'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Provinsi</td>
                                                                <td>: <?= $plg['prov'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kabupaten / Kota</td>
                                                                <td>: <?= $plg['kabkot'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kode POS</td>
                                                                <td>: <?= $plg['kdpos'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No HP</td>
                                                                <td>: <?= $plg['telp'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat URL</td>
                                                                <td>: <?= $plg['website'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">Hardware Utama</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Hardware</td>
                                                                <td>: <?= $pku['jenispk'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pemilik</td>
                                                                <td>: <?= $pku['pemilik'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyedia Data Center</td>
                                                                <td>: <?= $pku['penyedia'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bandwith</td>
                                                                <td>: <?= $pku['bandwith'] ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jumlah Hardware</td>
                                                                <td>: <?= $pku['jumlah'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tipe</td>
                                                                <td>: <?= $pku['tipe'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Processor</td>
                                                                <td>: <?= $pku['processor'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kapasitas Hardisk</td>
                                                                <td>: <?= $pku['kaphdd'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>RAM</td>
                                                                <td>: <?= $pku['memori'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lokasi</td>
                                                                <td>: <?= $pku['lokasi'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">Hardware Khusus</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Hardware Khusus</td>
                                                                <td>: <?= $pkk['jenispk'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tipe</td>
                                                                <td>: <?= $pkk['tipe'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Keterangan</td>
                                                                <td>: <?= $pkk['keterangan'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">SOFTWARE UTAMA</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Software Utama</td>
                                                                <td>: <?= $plu['namapl'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Software</td>
                                                                <td>: <?= $plu['jenispl'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyedia Software</td>
                                                                <td>: <?= $plu['penyedia'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">Software Pendukung</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Software Pendukung</td>
                                                                <td>: <?= $plp['jenispl'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Deskripsi</td>
                                                                <td>: <?= $plp['deskripsi'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-md-6">
                                                    <table class="mb-0 table-borderless table-responsive table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-0 mb-1 text-primary">Tenaga Ahli Yang Dibutuhkan</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Tenaga Ahli</td>
                                                                <td>: <?= $ta['jenis'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jumlah</td>
                                                                <td>: <?= $ta['jumlah'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kompetensi</td>
                                                                <td>: <?= $ta['kompetensi'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary"> Ketersediaan Tenaga Ahli</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Tenaga Ahli</td>
                                                                <td>: <?= $kta['jenis'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jumlah Tenaga Ahli</td>
                                                                <td>: <?= $kta['jumlah'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Tenaga Ahli Yang Tersedia</td>
                                                                <td>: <?= $kta['status'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1">Dasar Hukum</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Dasar Hukum</td>
                                                                <td>: <?= $dh['namash'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor</td>
                                                                <td>: <?= $dh['nomor'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tahun Terbit</td>
                                                                <td>: <?= $dh['thterbit'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tentang</td>
                                                                <td>: <?= $dh['tentang'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">SOP</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama SOP</td>
                                                                <td>: <?= $sop['namasop'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Keterangan</td>
                                                                <td>: <?= $sop['keterangan'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mt-1 text-primary">PenanggungJawab</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama PenanggungJawab</td>
                                                                <td>: <?= $pj['nama'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIP</td>
                                                                <td>: <?= $pj['nip'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Satuan kerja </td>
                                                                <td>: <?= $pj['namaSK'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Satuan Kerja</td>
                                                                <td>: <?= $pj['alamatSK'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Provinsi</td>
                                                                <td>: <?= $pj['prov'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kabupaten / Kota</td>
                                                                <td>: <?= $pj['kabkot'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kode POS</td>
                                                                <td>: <?= $pj['kdpos'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No HP</td>
                                                                <td>: <?= $pj['noHP'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Email</td>
                                                                <td>: <?= $pj['email'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <h5 class="card-title mt-3 mb-1 text-primary">HelpDesk</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>: <?= $hd['nama'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor Telepon</td>
                                                                <td>: <?= $hd['telp'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>PIC/Admin</td>
                                                                <td>: <?= $hd['picAdmin'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email Helpdesk</td>
                                                                <td>: <?= $hd['email'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="headingThree" class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block">
                                            <h5 class="m-0 p-0">File Pendukung</h5>
                                        </button>
                                    </div>
                                    <div data-parent="#accordion" id="collapseOne3" class="collapse">
                                        <!-- ####################### -->
                                        <div class="card-body">
                                            <?php foreach ($files as $file) : ?>
                                                <ul class="list-group mb-1">
                                                    <li class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading text-primary"><?= $file['versi'] ?></div>
                                                                    <div class="widget-subheading"><?= $du['nama'] ?></div>
                                                                </div>
                                                                <div class="widget-content-right">

                                                                    <button class="mb-0 mr-2 btn btn-sm btn-icon btn-danger" data-toggle="modal" data-target="#popupRemoveversi">
                                                                        <i class="pe-7s-trash btn-icon-wrapper"> </i>
                                                                        Remove
                                                                    </button>

                                                                    <a class="mb-0 mr-2 btn btn-sm btn-icon btn-alternate pull-right" href="<?php echo base_url() . "admin/downloadversi/" . $informasi->nama . '/' . $file['versi'] ?>">
                                                                        <i class="fa pe-7s-download fa-w-10"></i>
                                                                        Download
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </li>
                                                </ul>

                                            <?php endforeach; ?>
                                        </div>
                                        <!-- ######################## -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- =============================================================================== -->

                    <?php endforeach; ?>

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

<!--  Modal hapus versi-->

<div class="modal" tabindex="1000" id="popupRemoveversi" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="<?php echo base_url() . "admin/deleteverdsion/" . $du['id'] . '/' . $pj['nip'] . '/' . $du['nama'] . '/' . $file['versi']  . '/' . 1 ?>" class="btn btn-danger">Remove</a>
            </div>
        </div>
    </div>
</div>

<!--  Modal hapus all-->
<?php foreach ($info as $file) : ?>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo base_url() . "admin/delete/" . $file->id . '/' . $file->nama . '/' . $file->penanggungjawab  ?>" class="btn btn-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/main.js"></script>


</body>

</html>