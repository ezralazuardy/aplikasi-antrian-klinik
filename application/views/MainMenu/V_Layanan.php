<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Daftar Layanan</title>
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.css'); ?>">
  <style type="text/css">
  tr { text-align: center; }
  </style>
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar  fixed-top navbar-expand-lg bg-success" id="sectionsNav">
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
          <div class="col-md-12">
            <h2 class="text-center title">Daftar Layanan</h2>
            <h4 class="text-center description" style="margin-bottom: 40px;">Berikut adalah daftar layanan yang terdapat pada puskesmas</h4>
            <div class="panel">
              <div class="panel-body">
                <table class="table" id="doctor-table" style="width: 100%;">
                  <thead class="title">
                    <tr>
                      <th>No.</th>
                      <th>Kode Layanan</th>
                      <th>Nama Penyakit</th>
                      <th>Layanan Medis</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i = 1;
                    if($layanan){
                      foreach ($layanan as $value) {
                        $encrypted_string = $this->encrypt->encode($value['id_layanan']);
                        $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
                        ?>
                        <tr>
                          <td>
                            <?php echo $i++ . "."; ?>
                          </td>
                          <td>
                            <?php echo $value['code_layanan']; ?>
                          </td>
                          <td>
                            <?php echo $value['nama']; ?>
                          </td>
                          <td>
                            <?php echo $value['layanan_medis']; ?>
                          </td>
                          <td>
                            <a href="" data-toggle="modal" data-target="#modal" class="btn btn-sm btn-success"><span class="fa fa-search"></span></a>
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
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
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
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/material-kit.js?v=2.0.4'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.js'); ?>"></script>  
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>