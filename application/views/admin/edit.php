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
                            <i class="pe-7s-edit icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <!-- <div>Analytics Dashboard
                                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                            </div>
                                        </div>######### -->
                        <div> Form Edit
                            <div class="page-title-subheading">Sistem Elektronik
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">

                    </div>

                </div>
            </div>
            <form action="<?php echo base_url() . 'admin/update/' . $du['id'] ?>" method="post" enctype='multipart/form-data'>
                <!-- <form action="#" method="post" enctype='multipart/form-data'> -->
                <div class="mb-1 card">
                    <div class="card-header">
                        <ul class="nav nav-justified">
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link show active">1<br>Data Umum</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link show">2<br>Penyelenggara</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link show">3<br>Hardware</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link show ">4<br>Softwares</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-4" class="nav-link show">5<br>Tenaga Ahli</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-5" class="nav-link show">6<br>Tata Kelola</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-6" class="nav-link show">7<br>PJ & HelpDesk</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-7" class="nav-link show">8<br>Upload File</a></li>
                        </ul>
                    </div>
                    <div class="card-body" style="margin-left: 20%;margin-right: 10%;">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="tab-eg7-0" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Data Umum</h2>

                                            <div class="position-relative form-group"><label>Nama Sistem Elektronik</label>
                                                <input type="text" name="namaSE" placeholder="Nama Sistem Elektronik" class="form-control" id="namaSE" style="margin-bottom: 10px;" class=" form-control" value="<?= $du['nama']; ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Deskripsi Sistem Elektronik</label>
                                                <textarea name="keterangan" placeholder="Deskripsi Sistem Elektronik" class="form-control" id="keterangan" style="margin-bottom: 10px;"><?= $du['deskripsi']; ?></textarea>
                                            </div>
                                            <div class="position-relative form-group"><label>Sasaran Pelayanan</label><select name="sasaran" style="margin-bottom: 10px;" class=" form-control" value="<?= $du['sasaran']; ?>">
                                                    <option hidden>Pilih </option>
                                                    <option <?php if ($du['sasaran'] == "Lokal") echo "selected"; ?>>Lokal</option>
                                                    <option <?php if ($du['sasaran'] == "Regional") echo "selected"; ?>>Regional</option>
                                                </select> </div>
                                            <div class="position-relative form-group"><label>Kategori Sistem Elektronik</label><select name="ktgSE" style="margin-bottom: 10px;" class=" form-control">
                                                    <option <?php if ($du['kategorisistem'] == "Strategis") echo "selected"; ?>>Strategis</option>
                                                    <option <?php if ($du['kategorisistem'] == "Tinggi") echo "selected"; ?>>Tinggi</option>
                                                    <option <?php if ($du['kategorisistem'] == "Rendah") echo "selected"; ?>>Rendah</option>
                                                </select></div>
                                            <div class="position-relative form-group"><label>Kategori Akses</label> <select class="form-control" name="ktgAkses" style="margin-bottom: 10px;">
                                                    <option <?php if ($du['kategoriakses'] == "Intranet") echo "selected"; ?>>Intranet</option>
                                                    <option <?php if ($du['kategoriakses'] == "Internet") echo "selected"; ?>>Internet</option>
                                                </select></div>
                                            <div class="position-relative form-group"><label>Alamat URL Sistem Elektronik</label>
                                                <input type="text" name="url" placeholder="Alamat URL" class="form-control" id="namaSE" style="margin-bottom: 15px;" class=" form-control" value="<?= $du['url'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Jenis/Pengguna Layanan</label> <select class="form-control" name="jnspengguna" style="margin-bottom: 10px;">
                                                    <option hidden>Pilih</option>
                                                    <option <?php if ($du['penggunalayanan'] == "Publik") echo "selected"; ?>>Publik</option>
                                                    <option <?php if ($du['penggunalayanan'] == "Pemerintah") echo "selected"; ?>>Pemerintah</option>
                                                </select>
                                            </div>
                                            <div class="position-relative form-group"><label>Level</label> <select class="form-control" name="level" style="margin-bottom: 10px;">
                                                    <option hidden>Pilih</option>
                                                    <option <?php if ($du['level'] == "Informasi") echo "selected"; ?>>Informasi</option>
                                                    <option <?php if ($du['level'] == "Transaksi") echo "selected"; ?>>Transaksi</option>
                                                    <option <?php if ($du['level'] == "Interaksi") echo "selected"; ?>>Interaksi</option>
                                                    <option <?php if ($du['level'] == "Kolaborasi") echo "selected"; ?>>Kolaborasi</option>
                                                    <option <?php if ($du['level'] == "Optimalisasi") echo "selected"; ?>>Optimalisasi</option>
                                                </select>
                                            </div>
                                            <label for="basic-url">Budget</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input type="text" onkeyup="convertToRupiah(this);" name="budget" placeholder="Budget" class="form-control" id="budget" class=" form-control" value="<?= $du['budget'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Status</label> <select class="form-control" name="status" style="margin-bottom: 10px;">
                                                    <option hidden>Pilih</option>
                                                    <option <?php if ($du['status'] == "Publish") echo "selected"; ?>>Publish</option>
                                                    <option <?php if ($du['status'] == "Unpublish") echo "selected"; ?>>Unpublish</option>
                                                    <option <?php if ($du['status'] == "Versi Baru") echo "selected"; ?>>Versi Baru</option>
                                                    <option <?php if ($du['status'] == "Pengembangan") echo "selected"; ?>>Pengembangan</option>
                                                </select>
                                            </div>
                                            <hr>

                                            <h2 class="card-title mb-3 mt-3">Fungsi Yang Dimiliki</h2>
                                            <div class="position-relative form-group"><label>Fungsi Sistem Elektronik</label>
                                                <textarea name="fungsi" placeholder="Fungsi (fitur) yang dimiliki Sistem Elektronik" class="form-control" style="margin-bottom: 10px;" class="form-control"><?= $fu['fungsi'] ?></textarea>
                                            </div>
                                            <div class="position-relative form-group"><label>Keterangan</label>
                                                <textarea name="ketfungsi" placeholder="Keterangan" class="form-control" id="ketfungsi" style="margin-bottom: 10px;"><?= $fu['keterangan'] ?></textarea>
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-3">Ruang Lingkup</h2>
                                            <div class="position-relative form-group"><label>Ruang Lingkup Sistem Elektronik</label> <select class="form-control" name="ruanglingkup" style="margin-bottom: 10px;">
                                                    <option <?php if ($du['ruanglingkup'] == "Jaminan Sosial<") echo "selected"; ?>>Jaminan Sosial</option>
                                                    <option <?php if ($du['ruanglingkup'] == ">Komunikasi dan Informasi") echo "selected"; ?>>Komunikasi dan Informasi</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Pariwisata") echo "selected"; ?>>Pariwisata</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Pendidikan") echo "selected"; ?>>Pendidikan</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Perhubungan") echo "selected"; ?>>Perhubungan</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Tempat Tinggal") echo "selected"; ?>>Tempat Tinggal</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Energi") echo "selected"; ?>>Energi</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Kesehatan") echo "selected"; ?>>Kesehatan</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Lingkungan Hidup") echo "selected"; ?>>Lingkungan Hidup</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Pekerjaan dan Usaha") echo "selected"; ?>>Pekerjaan dan Usaha</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Perbankan") echo "selected"; ?>>Perbankan</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Sumber Daya Alam") echo "selected"; ?>>Sumber Daya Alam</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Pengajaran") echo "selected"; ?>>Pengajaran</option>
                                                    <option <?php if ($du['ruanglingkup'] == "Sektor Lain") echo "selected"; ?>>Sektor Lain</option>
                                                </select></div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-3">Jenis Layanan</h2>
                                            <div class="position-relative form-group"><label>Jenis Layanan Sistem Elektronik</label> <select class="form-control" name="jenislayanan" style="margin-bottom: 10px;">
                                                    <option <?php if ($jl['jenis'] == "Pelaporan Masyarakat") echo "selected"; ?>>Pelaporan Masyarakat</option>
                                                    <option <?php if ($jl['jenis'] == "Pembayaran") echo "selected"; ?>>Pembayaran</option>
                                                    <option <?php if ($jl['jenis'] == "") echo "selected"; ?>>Pendaftaran</option>
                                                    <option <?php if ($jl['jenis'] == "Pendaftaran") echo "selected"; ?>>Perizinan</option>
                                                    <option <?php if ($jl['jenis'] == "Publikasi Informasi") echo "selected"; ?>>Publikasi Informasi</option>
                                                    <!-- <option>Jenis Layanan Lainnya</option> -->
                                                </select></div>
                                            <div class="position-relative form-group"><label>Keterangan</label>
                                                <textarea name="ketjenis" placeholder="Keterangan Jenis Layanan" class="form-control" style="margin-bottom: 10px;"><?= $jl['keterangan'] ?></textarea>
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-3">Sistem Pengaman</h2>
                                            <div class="position-relative form-group"><label>Nama Sistem Pengaman</label>
                                                <input type="text" name="namapengaman" placeholder="Nama Sistem Pengaman" class="form-control" style="margin-bottom: 10px;" class=" form-control" value="<?= $sp['namasp'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Keterangan Sistem Pengaman</label>
                                                <textarea name="ketpengaman" placeholder="Keterangan Sistem Pengaman" class="form-control" style="margin-bottom: 10px;"><?= $sp['keterangan'] ?></textarea>
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-3">Sistem Terkait</h2>
                                            <div class="position-relative form-group"><label>Nama Sistem Terkait</label>
                                                <input type="text" name="namast" placeholder="Nama Sistem Terkait" class="form-control" style="margin-bottom: 10px;" class=" form-control" value="<?= $st['namast'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Keterangan</label>
                                                <textarea name="ketst" placeholder="Keterangan Sistem Terkait" class="form-control" style="margin-bottom: 10px;"><?= $st['keterangan'] ?></textarea>
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-3">Sertifikasi</h2>
                                            <div class="position-relative form-group"><label>Nama Sertifikasi</label>"
                                                <input type="text" name="namasertifikasi" placeholder="Nama Sertifikat" class="form-control" id="namasertifikasi" style="margin-bottom: 10px;" value="<?= $stf['namasertif'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Nama Institusi</label>
                                                <input type="text" name="namainstitusi" placeholder="Nama Institusi Yang Mengeluarkan Sertifikat" class="form-control" id="namainstitusi" style="margin-bottom: 10px;" value="<?= $stf['namainst'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Tanggal Terbit</label>
                                                <input type="text" name="tglterbit" placeholder="Tanggal Terbit" onfocus="(this.type='date')" class="form-control" id="tglterbit" style="margin-bottom: 10px;" value="<?= $stf['tglterbit'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Tanggal Mulai</label>
                                                <input type="text" name="tglmulai" placeholder="Tanggal Mulai Berlaku" onfocus="(this.type='date')" class="form-control" id="tglmulai" style="margin-bottom: 10px;" value="<?= $stf['tglmulai'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Masa Laku</label>
                                                <input type="text" name="tglhabis" placeholder="Tanggal Habis Berlaku" onfocus="(this.type='date')" class="form-control" id="tglhabis" style="margin-bottom: 10px;" value="<?= $stf['tglhabis'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Nama Sistem Terkait</label>
                                                <input type="text" name="masalaku" placeholder="Masa Berlaku (Tahun)" class="form-control" id="masalaku" style="margin-bottom: 10px;" value="<?= $stf['masalaku'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Nomor Sertifikat</label>
                                                <input type="text" name="nosertif" placeholder="Nomor Sertifikat" class="form-control" id="nosertif" style="margin-bottom: 10px;" value="<?= $stf['nosertif'] ?>">
                                            </div>
                                            <div class=" position-relative form-group"><label>Ruang Lingkup Sertifikat</label>
                                                <input type="text" name="lingkupsertif" placeholder="Ruang Lingkup" class="form-control" id="lingkupsertif" style="margin-bottom: 10px;" value="<?= $stf['ruanglingkup'] ?>">
                                            </div>
                                            <!-- <hr>
                                            <h2 class=" card-title mb-3 mt-3">Pengguna Layanan</h2>
                                            <div class="position-relative form-group"><label>Pengguna Layanan Sistem Elektronik</label>
                                                <input type="text" name="jenispengguna" placeholder="Jenis Pengguna" class="form-control" id="jenispengguna" style="margin-bottom: 10px;" value="<?= $pl['jenisPengguna'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Keterangan</label>
                                                <textarea name="ketjenis" placeholder="Keterangan" class="form-control" id="ketjenis"><?= $pl['keterangan'] ?></textarea>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show" id="tab-eg7-1" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Satuan Kerja</h2>
                                            <div class="position-relative form-group"><label>Nama Satuan Kerja</label>
                                                <input type="text" name="namask" placeholder="Nama Sistem Elektronik" class="form-control" id="namask" style="margin-bottom: 10px;" class=" form-control" value="<?= $plg['namask'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Alamat</label>
                                                <input type="text" name="alamatsk" placeholder="Alamat Satuan Kerja" class="form-control" id="alamatsk" style="margin-bottom: 10px;" value="<?= $plg['alamatsk'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Provinsi</label>
                                                <input type="text" name="prov" placeholder="Provinsi" class="form-control" id="prov" style="margin-bottom: 10px;" value="<?= $plg['prov'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Kabupaten / Kota</label>
                                                <input type="text" name="kabkot" placeholder="Kabupaten/Kota" class="form-control" id="kabkot" style="margin-bottom: 10px;" value="<?= $plg['kabkot'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Kode Pos</label>
                                                <input type="text" name="kdpos" placeholder="Kode Pos" class="form-control" id="kdpos" style="margin-bottom: 10px;" value="<?= $plg['kdpos'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Nomor HP</label>
                                                <input type="text" name="nohp" placeholder="Nomor HP" class="form-control" id="nohp" style="margin-bottom: 10px;" value="<?= $plg['telp'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Website</label>
                                                <input type="text" name="website" placeholder="Website" class="form-control" id="website" style="margin-bottom: 10px;" value="<?= $plg['website'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show" id="tab-eg7-2" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Hardware Utama</h2>
                                            <div class="position-relative form-group"><label>Jenis Hardware</label> <select class="form-control" name="jenispk" style="margin-bottom: 10px;">
                                                    <option hidden>Pilih</option>
                                                    <option <?php if ($pku['jenispk'] == "PC") echo "selected"; ?>>PC</option>
                                                    <option <?php if ($pku['jenispk'] == "Server") echo "selected"; ?>>Server</option>
                                                    <option <?php if ($pku['jenispk'] == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="position-relative form-group"><label>Pemilik</label> <select class="form-control" name="pemilik???" style="margin-bottom: 10px;">
                                                    <option hidden>Pilih</option>
                                                    <option <?php if ($pku['pemilik'] == "Milik Sendiri") echo "selected"; ?>>Milik Sendiri</option>
                                                    <option <?php if ($pku['pemilik'] == "Sewa") echo "selected"; ?>>Sewa</option>
                                                </select>
                                            </div>

                                            <div class="position-relative form-group"><label>Penyedia Data Centrer (Jika sewa)</label>
                                                <input type="text" name="penyediadatacenter" placeholder="Penyedia Data Center" class="form-control" id="penyediadatacenter" style="margin-bottom: 10px;" value="<?= $pku['penyedia'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Bandwith</label>
                                                <input type="text" name="bandwith" placeholder="Bandwith" class="form-control" id="bandwith" style="margin-bottom: 10px;" value="<?= $pku['bandwith'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Jumlah Hardware</label>
                                                <input type="text" name="jmlhpku" placeholder="Jumlah" class="form-control" id="jmlpku" style="margin-bottom: 10px;" value="<?= $pku['jumlah'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Tipe</label>
                                                <input type="text" name="tipe" placeholder="Tipe" class="form-control" id="tipe" style="margin-bottom: 10px;" value="<?= $pku['tipe'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Processor</label>
                                                <input type="text" name="processor" placeholder="Processor" class="form-control" id="processor" style="margin-bottom: 10px;" value="<?= $pku['processor'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Kapasitas Hardisk</label>
                                                <input type="text" name="kapshdd" placeholder="Kapasitas HDD" class="form-control" id="kapshdd" style="margin-bottom: 10px;" value="<?= $pku['kaphdd'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>RAM</label>
                                                <input type="text" name="memori" placeholder="Memori" class="form-control" id="memori" style="margin-bottom: 10px;" value="<?= $pku['memori'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Lokasi</label>
                                                <input type="text" name="lokasi" placeholder="Lokasi" class="form-control" id="lokasi" style="margin-bottom: 10px;" value="<?= $pku['lokasi'] ?>">
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-4">Hardware Khusus</h2>
                                            <div class="position-relative form-group"><label>Jenis Hardware</label>
                                                <input type="text" name="jenispk" placeholder="Jenis Perangkat Khusus " class="form-control" id="jenispk" style="margin-bottom: 10px;" value="<?= $pkk['jenispk'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Tipe</label>
                                                <input type="text" name="tipe" placeholder="Tipe Perangkat Khusus" class="form-control" id="tipe" style="margin-bottom: 10px;" value="<?= $pkk['tipe'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Keterangan</label>
                                                <textarea type="text" name="ketpkhusus" placeholder="Keterangan" class="form-control" id="ketpkhusus" style="margin-bottom: 10px;"><?= $pku['jenispk'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show " id="tab-eg7-3" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Software Utama</h2>
                                            <div class="position-relative form-group"><label>Nama Software Utama</label>
                                                <input type="text" name="namapl" placeholder="Nama " class="form-control" id="namapl" style="margin-bottom: 10px;" value="<?= $plu['namapl'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Jenis Software</label> <select class="form-control" name="jenispl" style="margin-bottom: 10px;">
                                                    <option <?php if ($plu['jenispl'] == "Apk Desktop") echo "selected"; ?>>Apk Desktop</option>
                                                    <option <?php if ($plu['jenispl'] == "Apk Client/Server") echo "selected"; ?>>Apk Client/Server</option>
                                                    <option <?php if ($plu['jenispl'] == "Apk Web") echo "selected"; ?>>Apk Web</option>
                                                    <option <?php if ($plu['jenispl'] == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                                    <!-- <option>Jenis Layanan Lainnya</option> -->
                                                </select></div>
                                            <div class="position-relative form-group"><label>Penyedia Software</label>
                                                <input type="text" name="penyediapl" placeholder="Penyedia Perangkat Lunak" class="form-control" id="penyediapl" style="margin-bottom: 10px;" value="<?= $plu['penyedia'] ?>">
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-4">Software Pendukung</h2>
                                            <div class="position-relative form-group"><label>Jenis Software Pendukung</label>
                                                <input type="text" name="jenisplp" placeholder="Jenis Perangkat Lunak" class="form-control" id="jenispl" style="margin-bottom: 10px;" value="<?= $plp['jenispl'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Deskripsi</label>
                                                <textarea name="deskripsi" placeholder="Deskripsi" class="form-control" id="deskripsi" style="margin-bottom: 10px;"><?= $plp['deskripsi'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show" id="tab-eg7-4" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Tenaga Ahli Yang dibutuhkan</h2>
                                            <div class="position-relative form-group"><label>Nama </label>
                                                <input type="text" name="namata" placeholder="Nama Tenaga Ahli" class="form-control" id="jenis" style="margin-bottom: 10px;" value="<?= $ta['nama'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Jenis Tenaga Ahli</label>
                                                <input type="text" name="jenista" placeholder="Jenis" class="form-control" id="jenis" style="margin-bottom: 10px;" value="<?= $ta['jenis'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Kompetensi</label>
                                                <input type="text" name="kompetensi" placeholder="Kompetensi" class="form-control" id="kompetensi" style="margin-bottom: 10px;" value="<?= $ta['kompetensi'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Nomor HP</label>
                                                <input type="text" name="nohpta" placeholder="Nomor HP" class="form-control" id="jml" style="margin-bottom: 10px;" value="<?= $ta['nohp'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>OPD</label>
                                                <input type="text" name="opd" placeholder="OPD" class="form-control" id="kompetensi" style="margin-bottom: 10px;" value="<?= $ta['opd'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Alamat</label>
                                                <input type="text" name="alamatta" placeholder="Alamat" class="form-control" id="kompetensi" style="margin-bottom: 10px;" value="<?= $ta['alamat'] ?>">
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-4">Ketersediaan Tenaga Ahli</h2>
                                            <div class="position-relative form-group"><label>Jenis Tenaga Ahli</label>
                                                <input type="text" name="ketersediaanjenis" placeholder="Jenis" class="form-control" id="ketersediaanjenis" style="margin-bottom: 10px;">
                                            </div>
                                            <div class="position-relative form-group"><label>Jumlah Tenaga Ahli</label>
                                                <input type="text" name="jmltersedia" placeholder="Jumlah" class="form-control" id="jmltersedia" style="margin-bottom: 10px;">
                                            </div>
                                            <div class="position-relative form-group"><label>Status Tenaga Ahli Yang Tersedia</label> <select class="form-control" name="statustersedia" style="margin-bottom: 30px;">
                                                    <option hidden>Pilih</option>
                                                    <option>PNS</option>
                                                    <option>Non PNS</option>
                                                    <!-- <option>Jenis Layanan Lainnya</option> -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show" id="tab-eg7-5" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Dasar Hukum</h2>
                                            <div class="position-relative form-group"><label>Nama Dasar Hukum</label>
                                                <input type="text" name="namadasarhukum" placeholder="Nama Dasar Hukum" class="form-control" id="namadasarhukum" style="margin-bottom: 10px;" value="<?= $dh['namash'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Nomor</label>
                                                <input type="text" name="nomor" placeholder="Nomor" class="form-control" id="nomor" style="margin-bottom: 10px;" value="<?= $dh['nomor'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Tahun Terbit</label>
                                                <input type="text" name="thterbit" placeholder="Tahun Terbit" class="form-control" id="thterbit" style="margin-bottom: 10px;" value="<?= $dh['thterbit'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Tentang</label>
                                                <textarea name="tentang" placeholder="Tentang" class="form-control" id="tentang" style="margin-bottom: 20px;"><?= $dh['tentang'] ?></textarea>
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-4">SOP</h2>
                                            <div class="position-relative form-group"><label>Nama SOP</label>
                                                <input type="text" name="namasop" placeholder="Nama SOP" class="form-control" id="namasop" style="margin-bottom: 10px;" value="<?= $sop['namasop'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Keterangan</label>
                                                <textarea name="ketsop" placeholder="Keterangan" class="form-control" id="ketsop" style="margin-bottom: 10px;"><?= $sop['keterangan'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show" id="tab-eg7-6" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="main-card card">
                                        <div class="card-body">
                                            <h2 class="card-title mb-3 mt-4">Penanggungjawab</h2>
                                            <div class="position-relative form-group"><label>Nama PenanggungJawab</label>
                                                <input type="text" name="namapj" placeholder="Nama PenanggungJawab" class="form-control" id="namapj" style="margin-bottom: 10px;" value="<?= $pj['nama'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>NIP</label>
                                                <input type="text" name="nip" placeholder="NIP" class="form-control" id="nip" style="margin-bottom: 10px;" value="<?= $pj['nip'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Nama Satuan Kerja</label>
                                                <input type="text" name="namaskpj" placeholder="Nama Satuan Kerja" class="form-control" id="namaskpj" style="margin-bottom: 10px;" value="<?= $pj['namaSK'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Alamat Satuan Kerja</label>
                                                <input type="text" name="alamatskpj" placeholder="Alamat Satuan Kerja" class="form-control" id="alamatskpj" style="margin-bottom: 10px;" value="<?= $pj['alamatSK'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Provinsi</label>
                                                <input type="text" name="provpj" placeholder="Provinsi" class="form-control" id="provpj" style="margin-bottom: 10px;" value="<?= $pj['prov'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Kabupaten/Kota</label>
                                                <input type="text" name="kabkotpj" placeholder="Kabupaten/Kota" class="form-control" id="kabkotpj" style="margin-bottom: 10px;" value="<?= $pj['kabkot'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Kode POS</label>
                                                <input type="text" name="kdpospj" placeholder="Kode Pos" class="form-control" id="kdpospj" style="margin-bottom: 10px;" value="<?= $pj['kdpos'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Nomor HP</label>
                                                <input type="text" name="nohppj" placeholder="Nomor HP" class="form-control" id="nohppj" style="margin-bottom: 10px;" value="<?= $pj['noHP'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Email</label>
                                                <input type="text" name="emailpj" placeholder="Email" class="form-control" id="emailpj" style="margin-bottom: 10px;" value="<?= $pj['email'] ?>">
                                            </div>
                                            <hr>
                                            <h2 class="card-title mb-3 mt-4">HelpDesk</h2>
                                            <div class="position-relative form-group"><label>Nama</label>
                                                <input type="text" name="namahd" placeholder="Nama Lengkap" class="form-control" id="namahd" style="margin-bottom: 10px;" value="<?= $hd['nama'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Nomor Telepon</label>
                                                <input type="text" name="notelp" placeholder="Nomor Telepon" class="form-control" id="notelp" style="margin-bottom: 10px;" value="<?= $hd['telp'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>PIC/Admin</label>
                                                <input type="text" name="picadmin" placeholder="PIC / Admin" class="form-control" id="picadmin" style="margin-bottom: 10px;" value="<?= $hd['picAdmin'] ?>">
                                            </div>
                                            <div class="position-relative form-group"><label>Email Helpdesk</label>
                                                <input type="text" name="emailhd" placeholder="E-mail Helpdesk" class="form-control" id="emailhd" style="margin-bottom: 10px;" value="<?= $hd['email'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ########################### -->
                            </div>
                            <div class="tab-pane show" id="tab-eg7-7" role="tabpanel">
                                <!-- ########################### -->
                                <div class="col-md-10">
                                    <div class="card-body card" id="dynamic_field">
                                        <div class="main-card">

                                            <?php foreach ($files as $file) : ?>
                                                <ul class="list-group mb-1">
                                                    <li class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading text-primary"><?= $file->versi ?></div>
                                                                    <div class="widget-subheading"><?= $du['nama'] ?></div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <a class="mb-0 mr-2 btn btn-sm btn-icon btn-danger text-white" data-toggle="modal" data-target="#popupRemoveversi">
                                                                        <i class="pe-7s-trash btn-icon-wrapper"> </i>
                                                                        Remove
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </li>
                                                </ul>
                                                <!-- <a class="mb-2 mr-2 btn-shadow btn btn-success mt-4" href="<?php echo base_url() . "admin/addversi/" . $informasi->id . '/.' . $informasi->nama . '/.' . $informasi->penanggungjawab ?>"> -->
                                            <?php endforeach; ?>

                                            <button type="button" name="add" id="add" class="btn btn-success mt-3">Add Other Version</button>

                                        </div>
                                    </div>

                                </div>
                                <!-- ########################### -->


                            </div>
                            <button type="button" class="mb-2 ml-3 btn btn-info text-white mt-3 shadow" data-toggle="modal" data-target="#popupUpdateEdit">Save Update</button>
                        </div>
                    </div>
                </div>


        </div>
        <script>
            $(document).ready(function() {
                var i = 1;
                $('#add').click(function() {
                    i++;
                    $field = '<div class="card-body" id="row' + i + '">' +
                        "<h2 class=\"card-title mb-3 mt-4\">Upload File</h2>" +
                        "<div class=\"position-relative form-group\">" +
                        "<label>Masukkan Versi</label>" +
                        "<input type=\"text\" name=\"versi[]\" placeholder=\"Versi Aplikasi\" class=\"form-control\" id=\"emailhd\" style=\"margin-bottom: 10px;\"></div>" +
                        "<div class = \"position-relative form-group\" > " +
                        "<label > Document Perancangan </label><br>" +
                        "<input type =\"file\" name=\"doc[]\" style =\"margin-bottom: 10px;margin-top: 5px;\" ></div>" +
                        "<div class = \"position-relative form-group\" >" +
                        " <label> Database Master </label><br> " +
                        "<input type = \"file\" name = \"db[]\" style = \"margin-bottom: 10px;margin-top: 5px;\" ></div>" +
                        "<div class = \"position-relative form-group\" >" +
                        " <label> Source Code </label><br>" +
                        "<input type = \"file\" name = \"sc[]\" style = \"margin-bottom: 10px;margin-top: 5px;\" ></div>" +
                        "<div class = \"position-relative form-group\" >" +
                        " <label> Lainnya </label><br> " +
                        "<input type = \"file\" name =\"lain[]\" style = \"margin-bottom: 10px;margin-top: 5px;\" ></div>" +
                        '<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Remove</button></div>'


                    $('#dynamic_field').append($field);
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });

            });
        </script>

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
                <a href="<?php echo base_url() . "admin/deleteverdsion/" . $du['id'] . '/' . $pj['nip'] . '/' . $du['nama'] . '/' . $file->versi  . '/' . 2 ?>" class="btn btn-danger">Remove</a>
            </div>
        </div>
    </div>
</div>

<!--  Modal hapus versi-->
<div class="modal" tabindex="1000" id="popupUpdateEdit" role="dialog" aria-labelledby="popupUpdateEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Save Changes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to save this changes?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success" value="Save Changes">
            </div>
        </div>
    </div>
</div>


</form>

<script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/main.js"></script>
<script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/jquery.js"></script>
<script type="text/javascript" src="<?= base_url('./assets/'); ?>baru/assets/scripts/rupiah.js"></script>

</body>

</html>