<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Daftar</title>
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.css'); ?>">
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar  fixed-top navbar-expand-lg bg-rose" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate"> <a class="title">Aplikasi Antrian Klinik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(''); ?>"> <i class="material-icons">arrow_back</i> Kembali </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main main-raised" style="margin-top: 0.5%;">
    <div class="container">
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Daftar Antrian</h2>
            <h4 class="text-center description">Untuk mendapatkan nomor antrian, mohon untuk mengisi form dibawah ini. Pastikan biodata diisi dengan benar.</h4>
            <form class="contact-form" method="POST" action="<?php echo base_url('Daftar/insertDaftar'); ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama lengkap</label>
                    <input type="text" name="nama" class="form-control" required=""></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Umur</label>
                      <input type="text" name="umur" class="form-control" required=""></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Berat Badan</label>
                        <input type="text" name="berat_badan" class="form-control" required=""></div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control" required="">
                            <option value="Laki-Laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="bmd-label-floating">Alamat</label>
                      <textarea class="form-control" rows="4" id="alamat" name="alamat" required=""></textarea>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="">Penyakit yang diderita</label>
                          <input type="text" name="penyakit" class="form-control" required=""></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Jenis Layanan Medis</label>
                            <select name="jenis_layanan" class="form-control" onchange="selectDokter(this)" >
                              <?php 
                              if(is_array($layanan) && !empty($layanan)){
                                foreach ($layanan as $value) {  
                                  ?>

                          <option value="<?php echo $value['id_layanan']; ?>"><?php echo $value['nama']; ?></option>

                                  <?php
                                }
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Dokter</label>
                            <select name="id_dokter" class="form-control"  id="id_dokter" required="">
                              
                      <!-- <?php foreach ($list as $value) { ?>
                        <option value="<?php echo $value['id_dok']; ?>">
                          <?php echo $value['nama_dokter']; ?>
                        </option>
                        <?php }; ?> -->
                      </select>
                    </div>
                  </div>
                </div>
             <!--  <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="">Tanggal Periksa</label>
                    <input type="text" name="tanggal_besuk" class="form-control tanggal-lahir" required=""></div>
                </div>
              </div> -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Jaminan Kesehatan</label>
                    <select name="id_jamkes" class="form-control" required="">
                      <option>Tidak Ada</option>
                      <?php foreach ($jamkes as $value) { ?>
                      <option value="<?php echo $value['id_jamkes']; ?>">
                        <?php echo $value['singkatan']; ?>&nbsp;(
                        <?php echo $value['nama_jamkes']; ?>)</option>
                        <?php }; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4 ml-auto mr-auto text-center">
                    <button class="btn btn-rose btn-raised">Daftar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-default">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li> <a href="<?php echo base_url('TentangAplikasi'); ?>">Tentang Aplikasi</a> </li>
            <li> <a href="https://github.com/ezralazuardy/aplikasi-antrian-klinik/blob/master/LICENSE" target="_blank">Lisensi</a> </li>
          </ul>
        </nav>
        <div class="copyright float-right">&copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, dibuat dengan <i class="material-icons">favorite</i> oleh <a href="#" target="_blank">TinyLab</a>.</div>
        </div>
      </footer>
      <script type="text/javascript" src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/material-kit.js?v=2.0.4'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.js'); ?>"></script>  
      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    </body>
    </html>