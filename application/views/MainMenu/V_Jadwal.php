<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Jadwal Dokter</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
  <link href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4');?>" rel="stylesheet" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.css'); ?>">
  <style type="text/css">
  tr {
    text-align: center;
  }
  </style>
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar  fixed-top navbar-expand-lg" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate"> <a class="navbar-brand" href="<?php echo base_url(''); ?>">
          Aplikasi Antrian Klinik </a>
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
  <div class="main main-raised" style="margin-top: 5%;">
    <div class="container">
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center title">Jadwal Dokter</h2>
            <h4 class="text-center description">Berikut adalah daftar jadwal dokter yang terdapat pada puskesmas</h4>
            <div class="panel">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-10"> </div>
                  <div class="col-md-2">
                    <div class="float-right" style="padding:10px;margin:5px;">
                      </a>
                    </div>
                  </div>
                </div>
                <table class="table" id="doctor-table">
                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>Dokter</th>
                      <th>Bagian</th>
                      <th>Hari</th>
                      <th>Jam</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $i = 1;
                  if($jadwal){
                    foreach ($jadwal as $value) {

                      /* Encrypt ID */
                      $encrypted_string = $this->encrypt->encode($value['id_jadwal']);
                      $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

                      ?>
                      <tr>
                        <td>
                          <?php echo $i++; ?>
                        </td>
                        <td>
                          <?php echo $value['nama_dokter']; ?>
                        </td>
                        <td>
                          <?php echo $value['bagian']; ?>
                        </td>
                        <td>
                          <?php echo $value['hari']; ?>
                        </td>
                        <td>
                          <?php echo $value['jam']; ?>
                        </td>
                        <td>
                          <a href="<?php echo base_url('Jadwal/jadwalDetail/'.$id); ?>" class="btn btn-sm btn-primary"> <span class="fa fa-search"></span> </a>
                        </td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
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
      <div class="copyright float-right"> &copy;
        <script>
        document.write(new Date().getFullYear())
        </script>, dibuat dengan <i class="material-icons">favorite</i> oleh <a href="#" target="_blank">TinyLab</a>. </div>
    </div>
  </footer>
  <script src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/plugins/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>" type="text/javascript'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/jquery.sharrre.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/material-kit.js?v=2.0.4'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/scripts/klorofil-common.js');  ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/sweetalert.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/toastr/toastr.min.js'); ?>"></script>
</body>
</html>