<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>No Antrian</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
  <link href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4');?>" rel="stylesheet" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.css'); ?>">
  <style type="text/css">
    @media print {
      body * {
        visibility: hidden;
      }
      #section-to-print, #section-to-print * {
        visibility: visible;
      }
      #section-to-print {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
  </style>
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar  fixed-top navbar-expand-lg" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          Aplikasi Antrian Klinik </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="Login">
                <i class="material-icons">person</i> Masuk
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/" target="_blank" data-original-title="Ikuti kami di Facebook">
                <i class="fa fa-facebook-square"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/" target="_blank" data-original-title="Ikuti kami di Instagram">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php foreach ($list as $value) { ?>
    <div class="main main-raised" id="section-to-print" style="margin-top: 1%;">
      <div class="container">
        <div class="section text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h3 class="title">Nomor Antrian Anda</h3>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h1 class="title"><?php echo $value['antrian']; ?></h1>
            </div>
          </div>
          <div class="features">
            <div class="row">
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-info">
                    <i class="material-icons">schedule</i>
                  </div>
                  <h4 class="info-title"><?php echo $value['nama_dokter']; ?></h4>
                  <h5 class="description"><?php echo $value['tanggal_besuk']; ?></h5>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="material-icons">person</i>
                  </div>
                  <h4 class="info-title"><?php echo $value['nama']; ?></h4>
                  <div class="row">
                    <div class="col-md-5"><h5 class="description">Umur : <?php echo $value['umur']; ?></h5></div>
                    <div class="col-md-2"><h5 class="description">|</h5></div>
                    <div class="col-md-5"><h5 class="description">Berat : <?php echo $value['berat_badan']; ?> Kg</h5></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="material-icons">chat</i>
                  </div>
                  <h4 class="info-title">Hubungi Kami</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 ml-auto mr-auto">
              <button class="btn button btn-warning" onclick="window.print();">Cetak</button>
              <button class="btn button btn-success" onclick="printToImage()">Export</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <footer class="footer footer-default">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="#">
                Tentang Aplikasi
              </a>
            </li>
            <li>
              <a href="https://github.com/ezralazuardy/aplikasi-antrian-klinik/blob/master/LICENSE">
                Lisensi
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, dibuat dengan <i class="material-icons">favorite</i> oleh
          <a href="#" target="_blank">TinyLab</a>.
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/plugins/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.sharrre.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/material-kit.js?v=2.0.4'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/html2canvas.min.js'); ?>"></script> 
    <script type="text/javascript">

      function printToImage(){
        html2canvas(document.querySelector("#section-to-print")).then(canvas => {
          // document.body.appendChild(canvas)
          // console.log(canvas.toDataURL("image/png"));
          window.open(canvas.toDataURL("image/png"),'_blank');
        });  
      }


    </script>

  </body>
  </html>