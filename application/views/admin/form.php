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
                                   <i class="pe-7s-video icon-gradient bg-happy-fisher">
                                   </i>
                               </div>
                               <!-- <div>Analytics Dashboard
                                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                            </div>
                                        </div>######### -->
                               <div> Form Upload
                                   <div class="page-title-subheading">Sistem Elektronik
                                   </div>
                               </div>
                           </div>
                           <div class="page-title-actions">

                           </div>

                       </div>
                   </div>
                   <form action="<?php echo base_url() . 'Upload/upload_data' ?>" method="post" enctype='multipart/form-data'>
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
                                                       <input type="text" name="namaSE" placeholder="Nama Sistem Elektronik" class="form-control" id="namaSE" style="margin-bottom: 10px;" class=" form-control">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Deskripsi Sistem Elektronik</label>
                                                       <textarea name="keterangan" placeholder="Deskripsi Sistem Elektronik" class="form-control" id="keterangan" style="margin-bottom: 10px;"></textarea>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Sasaran Pelayanan</label><select name="sasaran" style="margin-bottom: 10px;" class=" form-control">
                                                           <option hidden>Pilih </option>
                                                           <option>Lokal</option>
                                                           <option>Regional</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kategori Sistem Elektronik</label><select name="ktgSE" style="margin-bottom: 10px;" class=" form-control">
                                                           <option hidden>Pilih</option>
                                                           <option>Strategis</option>
                                                           <option>Tinggi</option>
                                                           <option>Rendah</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kategori Akses</label> <select class="form-control" name="ktgAkses" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Intranet</option>
                                                           <option>Internet</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Alamat URL Sistem Elektronik</label>
                                                       <input type="text" name="url" placeholder="Alamat URL" class="form-control" id="namaSE" style="margin-bottom: 15px;" class=" form-control">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Jenis/Pengguna Layanan</label> <select class="form-control" name="pg????" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Publik</option>
                                                           <option>Pemerintah</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Level</label> <select class="form-control" name="level???" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Informasi</option>
                                                           <option>Transaksi</option>
                                                           <option>Interaksi</option>
                                                           <option>Kolaborasi</option>
                                                           <option>Optimalisasi</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Budget</label>
                                                       <input type="text" name="bud???" placeholder="Budget" class="form-control" id="budget" style="margin-bottom: 15px;" class=" form-control">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Status</label> <select class="form-control" name="status???" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Publish</option>
                                                           <option>Unpublish</option>
                                                           <option>Versi Baru</option>
                                                           <option>Pengembangan</option>
                                                       </select>
                                                   </div>

                                                   <hr>

                                                   <h2 class="card-title mb-3 mt-3">Fungsi Yang Dimiliki</h2>
                                                   <div class="position-relative form-group"><label>Fungsi Sistem Elektronik</label>
                                                       <textarea name="fungsi" placeholder="Fungsi (fitur) yang dimiliki Sistem Elektronik" class="form-control" style="margin-bottom: 10px;" class="form-control"></textarea>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Keterangan</label>
                                                       <textarea name="ketfungsi" placeholder="Keterangan" class="form-control" id="ketfungsi" style="margin-bottom: 10px;"></textarea>
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-3">Ruang Lingkup</h2>
                                                   <div class="position-relative form-group"><label>Ruang Lingkup Sistem Elektronik</label> <select class="form-control" name="ruanglingkup" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Jaminan Sosial</option>
                                                           <option>Komunikasi dan Informasi</option>
                                                           <option>Pariwisata</option>
                                                           <option>Pendidikan</option>
                                                           <option>Perhubungan</option>
                                                           <option>Tempat Tinggal</option>
                                                           <option>Energi</option>
                                                           <option>Kesehatan</option>
                                                           <option>Lingkungan Hidup</option>
                                                           <option>Pekerjaan dan Usaha</option>
                                                           <option>Perbankan</option>
                                                           <option>Sumber Daya Alam</option>
                                                           <option>Pengajaran</option>
                                                           <option>Sektor Lain</option>
                                                       </select></div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-3">Jenis Layanan</h2>
                                                   <div class="position-relative form-group"><label>Jenis Layanan Sistem Elektronik</label> <select class="form-control" name="jenislayanan" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Pelaporan Masyarakat</option>
                                                           <option>Pembayaran</option>
                                                           <option>Pendaftaran</option>
                                                           <option>Perizinan</option>
                                                           <option>Publikasi Informasi</option>
                                                           <!-- <option>Jenis Layanan Lainnya</option> -->
                                                       </select></div>
                                                   <div class="position-relative form-group"><label>Keterangan</label>
                                                       <textarea name="ketjenis" placeholder="Keterangan Jenis Layanan" class="form-control" style="margin-bottom: 10px;"></textarea>
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-3">Sistem Pengaman</h2>
                                                   <div class="position-relative form-group"><label>Nama Sistem Pengaman</label>
                                                       <input type="text" name="namapengaman" placeholder="Nama Sistem Pengaman" class="form-control" style="margin-bottom: 10px;" class=" form-control">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Keterangan Sistem Pengaman</label>
                                                       <textarea name="ketpengaman" placeholder="Keterangan Sistem Pengaman" class="form-control" style="margin-bottom: 10px;"></textarea>
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-3">Sistem Terkait</h2>
                                                   <div class="position-relative form-group"><label>Nama Sistem Terkait</label>
                                                       <input type="text" name="namast" placeholder="Nama Sistem Terkait" class="form-control" style="margin-bottom: 10px;" class=" form-control">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Keterangan</label>
                                                       <textarea name="ketst" placeholder="Keterangan Sistem Terkait" class="form-control" style="margin-bottom: 10px;"></textarea>
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-3">Sertifikasi</h2>
                                                   <div class="position-relative form-group"><label>Nama Sertifikasi</label>
                                                       <input type="text" name="namasertifikasi" placeholder="Nama Sertifikat" class="form-control" id="namasertifikasi" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nama Institusi</label>
                                                       <input type="text" name="namainstitusi" placeholder="Nama Institusi Yang Mengeluarkan Sertifikat" class="form-control" id="namainstitusi" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tanggal Terbit</label>
                                                       <input type="text" name="tglterbit" placeholder="Tanggal Terbit" onfocus="(this.type='date')" class="form-control" id="tglterbit" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tanggal Mulai</label>
                                                       <input type="text" name="tglmulai" placeholder="Tanggal Mulai Berlaku" onfocus="(this.type='date')" class="form-control" id="tglmulai" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tanggal Habis Berlaku</label>
                                                       <input type="text" name="tglhabis" placeholder="Tanggal Habis Berlaku" onfocus="(this.type='date')" class="form-control" id="tglhabis" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Masa Laku</label>
                                                       <input type="text" name="masalaku" placeholder="Masa Berlaku (Tahun)" class="form-control" id="masalaku" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nomor Sertifikat</label>
                                                       <input type="text" name="nosertif" placeholder="Nomor Sertifikat" class="form-control" id="nosertif" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Ruang Lingkup Sertifikat</label>
                                                       <input type="text" name="lingkupsertif" placeholder="Ruang Lingkup" class="form-control" id="lingkupsertif" style="margin-bottom: 10px;">
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-3">Pengguna Layanan</h2>
                                                   <div class="position-relative form-group"><label>Pengguna Layanan Sistem Elektronik</label>
                                                       <input type="text" name="jenispengguna" placeholder="Jenis Pengguna" class="form-control" id="jenispengguna" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Keterangan</label>
                                                       <textarea name="ketjenis" placeholder="Keterangan" class="form-control" id="ketjenis"></textarea>
                                                   </div>
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
                                                       <input type="text" name="namask" placeholder="Nama Satuan Kerja" class="form-control" id="namask" style="margin-bottom: 10px;" class=" form-control">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Alamat</label>
                                                       <input type="text" name="alamatsk" placeholder="Alamat Satuan Kerja" class="form-control" id="alamatsk" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Provinsi</label>
                                                       <input type="text" name="prov" placeholder="Provinsi" class="form-control" id="prov" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kabupaten / Kota</label>
                                                       <input type="text" name="kabkot" placeholder="Kabupaten/Kota" class="form-control" id="kabkot" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kode Pos</label>
                                                       <input type="text" name="kdpos" placeholder="Kode Pos" class="form-control" id="kdpos" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nomor HP</label>
                                                       <input type="text" name="nohp" placeholder="Nomor HP" class="form-control" id="nohp" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Website</label>
                                                       <input type="text" name="website" placeholder="Website" class="form-control" id="website" style="margin-bottom: 10px;">
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
                                                   <div class="position-relative form-group"><label>Jenis Hardware</label> <select class="form-control" name="hardware???" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>PC</option>
                                                           <option>Server</option>
                                                           <option>Lainnya</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Jenis Hardware</label>
                                                       <input type="text" name="jenispku" placeholder="Jenis" class="form-control" id="jenispku" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Pemilik</label> <select class="form-control" name="pemilik???" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Milik Sendiri</option>
                                                           <option>Sewa</option>
                                                       </select>
                                                   </div>
                                                   <div class="position-relative form-group"><label>Pemilik</label>
                                                       <input type="text" name="pemilikpku" placeholder="Pemilik" class="form-control" id="pemilikpku" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Penyedia Data Centrer (Jika sewa)</label>
                                                       <input type="text" name="penyediadatacenter" placeholder="Penyedia Data Center" class="form-control" id="penyediadatacenter" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Bandwith</label>
                                                       <input type="text" name="bandwith" placeholder="Bandwith" class="form-control" id="bandwith" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Jumlah Hardware</label>
                                                       <input type="text" name="jmlhpku" placeholder="Jumlah" class="form-control" id="jmlpku" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tipe</label>
                                                       <input type="text" name="tipe" placeholder="Tipe" class="form-control" id="tipe" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Processor</label>
                                                       <input type="text" name="processor" placeholder="Processor" class="form-control" id="processor" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kapasitas Hardisk</label>
                                                       <input type="text" name="kapshdd" placeholder="Kapasitas HDD" class="form-control" id="kapshdd" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>RAM</label>
                                                       <input type="text" name="memori" placeholder="Memori" class="form-control" id="memori" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Lokasi</label>
                                                       <input type="text" name="lokasi" placeholder="Lokasi" class="form-control" id="lokasi" style="margin-bottom: 10px;">
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-4">Hardware Khusus</h2>
                                                   <div class="position-relative form-group"><label>Jenis Hardware</label>
                                                       <input type="text" name="jenispk" placeholder="Jenis Perangkat Khusus " class="form-control" id="jenispk" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tipe</label>
                                                       <input type="text" name="tipe" placeholder="Tipe Perangkat Khusus" class="form-control" id="tipe" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Keterangan</label>
                                                       <textarea type="text" name="ketpkhusus" placeholder="Keterangan" class="form-control" id="ketpkhusus" style="margin-bottom: 10px;"></textarea>
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
                                                       <input type="text" name="namapl" placeholder="Nama " class="form-control" id="namapl" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Jenis Software</label> <select class="form-control" name="jenispl" style="margin-bottom: 10px;">
                                                           <option hidden>Pilih</option>
                                                           <option>Apk Desktop</option>
                                                           <option>Apk Client/Server</option>
                                                           <option>Apk Web</option>
                                                           <option>Lainnya</option>
                                                       </select></div>
                                                   <div class="position-relative form-group"><label>Penyedia Software</label>
                                                       <input type="text" name="penyediapl" placeholder="Penyedia Perangkat Lunak" class="form-control" id="jenispl" style="margin-bottom: 10px;">
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-4">Software Pendukung</h2>
                                                   <div class="position-relative form-group"><label>Jenis Software Pendukung</label>
                                                       <input type="text" name="jenisplp" placeholder="Jenis Perangkat Lunak" class="form-control" id="jenisplp" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Deskripsi</label>
                                                       <textarea name="deskripsi" placeholder="Deskripsi" class="form-control" id="deskripsi" style="margin-bottom: 10px;"></textarea>
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
                                                   <h2 class="card-title mb-3 mt-4">Pengembang</h2>
                                                   <div class="position-relative form-group"><label>Nama Pengembang</label>
                                                       <input type="text" name="nama???" placeholder="Nama Pengembang" class="form-control" id="jenis" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nomor HP</label>
                                                       <input type="text" name="nohp???" placeholder="Nomor HP" class="form-control" id="jml" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>OPD</label>
                                                       <input type="text" name="opd???" placeholder="OPD" class="form-control" id="kompetensi" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Alamat</label>
                                                       <input type="text" name="alamat???" placeholder="Alamat" class="form-control" id="kompetensi" style="margin-bottom: 10px;">
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-4">Tenaga Ahli Yang dibutuhkan</h2>
                                                   <div class="position-relative form-group"><label>Jenis Tenaga Ahli</label>
                                                       <input type="text" name="jenis" placeholder="Jenis" class="form-control" id="jenis" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Jumlah</label>
                                                       <input type="text" name="jml" placeholder="Jumlah" class="form-control" id="jml" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kompetensi</label>
                                                       <input type="text" name="kompetensi" placeholder="Kompetensi" class="form-control" id="kompetensi" style="margin-bottom: 10px;">
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
                                                       </select></div>
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
                                                       <input type="text" name="namadasarhukum" placeholder="Nama Dasar Hukum" class="form-control" id="namadasarhukum" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nomor</label>
                                                       <input type="text" name="nomor" placeholder="Nomor" class="form-control" id="nomor" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tahun Terbit</label>
                                                       <input type="text" name="thterbit" placeholder="Tahun Terbit" class="form-control" id="thterbit" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Tentang</label>
                                                       <textarea name="tentang" placeholder="Tentang" class="form-control" id="tentang" style="margin-bottom: 20px;"></textarea>
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-4">SOP</h2>
                                                   <div class="position-relative form-group"><label>Nama SOP</label>
                                                       <input type="text" name="namasop" placeholder="Nama SOP" class="form-control" id="namasop" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Keterangan</label>
                                                       <textarea name="ketsop" placeholder="Keterangan" class="form-control" id="ketsop" style="margin-bottom: 10px;"></textarea>
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
                                                       <input type="text" name="namapj" placeholder="Nama PenanggungJawab" class="form-control" id="namapj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>NIP</label>
                                                       <input type="text" name="nip" placeholder="NIP" class="form-control" id="nip" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nama Satuan Kerja</label>
                                                       <input type="text" name="namaskpj" placeholder="Nama Satuan Kerja" class="form-control" id="namaskpj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Alamat Satuan Kerja</label>
                                                       <input type="text" name="alamatskpj" placeholder="Alamat Satuan Kerja" class="form-control" id="alamatskpj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Provinsi</label>
                                                       <input type="text" name="provpj" placeholder="Provinsi" class="form-control" id="provpj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kabupaten/Kota</label>
                                                       <input type="text" name="kabkotpj" placeholder="Kabupaten/Kota" class="form-control" id="kabkotpj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Kode POS</label>
                                                       <input type="text" name="kdpospj" placeholder="Kode Pos" class="form-control" id="kdpospj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nomor HP</label>
                                                       <input type="text" name="nohppj" placeholder="Nomor HP" class="form-control" id="nohppj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Email</label>
                                                       <input type="text" name="emailpj" placeholder="Email" class="form-control" id="emailpj" style="margin-bottom: 10px;">
                                                   </div>
                                                   <hr>
                                                   <h2 class="card-title mb-3 mt-4">HelpDesk</h2>
                                                   <div class="position-relative form-group"><label>Nama</label>
                                                       <input type="text" name="namahd" placeholder="Nama Lengkap" class="form-control" id="namahd" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Nomor Telepon</label>
                                                       <input type="text" name="notelp" placeholder="Nomor Telepon" class="form-control" id="notelp" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>PIC/Admin</label>
                                                       <input type="text" name="picadmin" placeholder="PIC / Admin" class="form-control" id="picadmin" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Email Helpdesk</label>
                                                       <input type="text" name="emailhd" placeholder="E-mail Helpdesk" class="form-control" id="emailhd" style="margin-bottom: 10px;">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- ########################### -->
                                   </div>
                                   <div class="tab-pane show" id="tab-eg7-7" role="tabpanel">
                                       <!-- ########################### -->
                                       <div class="col-md-10">
                                           <div class="main-card card">
                                               <div class="card-body" id="dynamic_field">
                                                   <h2 class="card-title mb-3 mt-4">Upload File</h2>
                                                   <div class="position-relative form-group"><label>Masukkan Versi</label>
                                                       <input type="text" name="versi[]" id="versi" placeholder="Versi Aplikasi" class="form-control" id="emailhd" style="margin-bottom: 10px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Document Perancangan</label><br>
                                                       <input type="file" name="doc[]" id="doc" style="margin-bottom: 10px;margin-top: 5px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Database Master</label><br>
                                                       <input type="file" name="db[]" id="db" style="margin-bottom: 10px;margin-top: 5px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Source Code</label><br>
                                                       <input type="file" name="sc[]" id="sc" style="margin-bottom: 10px;margin-top: 5px;">
                                                   </div>
                                                   <div class="position-relative form-group"><label>Lainnya</label><br>
                                                       <input type="file" name="lain[]" id="lain" style="margin-bottom: 10px;margin-top: 5px;">
                                                   </div>

                                               </div>
                                           </div>
                                           <button type="button" name="add" id="add" class="btn btn-success mt-3">Add Other Version</button>
                                           <input type="submit" name="submit" id="submit" class="btn btn-info mt-3" value="Upload" />
                                       </div>
                                       <!-- ########################### -->


                                   </div>
                               </div>
                           </div>
                       </div>

                   </form>
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