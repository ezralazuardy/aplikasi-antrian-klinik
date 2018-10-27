<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4'); ?>"/>
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url(''); ?>">
          Aplikasi Antrian Klinik </a>
<!-- <<<<<<< HEAD -->
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="Login">
              <i class="material-icons">person</i> Masuk
            </a>
          </li> --> 
        </ul>
<!-- ======= -->
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
<!-- >>>>>>> 971814a659fbc2cad2c9cdc30273c699ad497126 -->
      </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url('assets/img/bg.webp'); ?>')">
      <div class="container">
        <div class="row">
        <!-- <div class="col-md-6">
          <h1 class="title">Memudahkan manajemen klinik anda.</h1>
          <h4>Kami membuat aplikasi yang kaya akan fitur untuk memudahkan proses manajemen di klinik anda.</h4>
        </div> -->
        <div class="col-md-12 text-center">
             <h1 class="title">Aplikasi Antrian</h1>
             <h2><?php echo date('l,d F Y'); ?></h2>
          </div>
        <div class="col-md-4 text-center">
          <h2>Sisa Antrian :</h2>
          <h1 class="title"><?php 
            if($sisa_antrian){
              echo $sisa_antrian;
            }else{
              echo "0";
            }
            ?></h1>
            <br>

          </div>

          <div class="col-md-4 text-center">
            <h2>Antrian Saat Ini :</h2>
            <h1 class="title"><?php 

              if(is_array($list) && !empty($list)){

                echo $list[0]['antrian'];
              }else{
                echo "Belum ada antrian";
              }
              ?></h1>
              <br>

            </div>

            <div class="col-md-4 text-center">
            <h2>Waktu Tunggu : </h2>
            <h1 class="title"><?php 

              if(is_array($list) && !empty($list)){

                echo (int)($sisa_antrian*10) ." Menit";
              }else{
                echo "0 Menit";
              }
              ?></h1>
              <br>

            </div>
            <div class="col-md-12 text-center">
             <a href="<?php echo base_url('Daftar'); ?>" class="btn btn-danger btn-raised btn-lg">
              Daftar
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="main main-raised" style="margin-top:1%;">
      <div class="container">
        <div class="section text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">Mari bicara tentang fitur</h2>
              <h5 class="description">Kami membuat Aplikasi Antrian Klinik yang kaya akan fitur, mudah digunakan, dan juga handal dalam proses manajemen klinik.</h5>
            </div>
          </div>
          <div class="features">
            <div class="row">
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-info">
                    <i class="material-icons">schedule</i>
                  </div>
                  <h4 class="info-title">Lihat Jadwal</h4>
                  <p>Dapatkan informasi tentang jadwal dokter yang bersangkutan.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="material-icons">chat</i>
                  </div>
                  <h4 class="info-title">Hubungi Kami</h4>
                  <p>Kirim pertanyaan, pesan, kritik, ataupun saran dengan mudah dan cepat, diproses dan dibalas langsung oleh admin ke alamat surel anda.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="material-icons">person</i>
                  </div>
                  <h4 class="info-title">Manajemen Profil</h4>
                  <p>Ubah informasi profil, data diri, atau biodata anda dengan mudah.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- div class="section text-center">
          <h2 class="title">Tim pengembang aplikasi</h2>
          <div class="team">
            <div class="row">
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="<?php echo base_url('assets/img/person/ezra.webp'); ?>" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">Ezra Lazuardy
                      <br>
                      <small class="card-description text-muted">UI Designer & Front-End Programmer</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">You need a little rain to make a rainbow.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                      <a href="https://www.linkedin.com/in/ezralazuardy" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="<?php echo base_url('assets/img/person/aqshol.webp'); ?>" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">Muhammad Alifian Aqshol
                      <br>
                      <small class="card-description text-muted">Back-End Programmer</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">Jomblo Elite.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                      <a href="https://www.linkedin.com/in/alifian-aqshol-44969215a" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="<?php echo base_url('assets/img/person/bintang.webp'); ?>" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">Bintang Kumarasakti
                      <br>
                      <small class="card-description text-muted">Admin</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">Samlekom Mhank.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                      <a href="https://www.linkedin.com/in/bintang-kumarasakti-806b57169" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="section section-contacts">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="text-center title">Kontak kami</h2>
              <h4 class="text-center description">Tak usah malu untuk menanyakan sesuatu ke kami, dengan senang hati kami akan membalas secepatnya.</h4>
              <form class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama anda</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Alamat surel anda</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleMessage" class="bmd-label-floating">Pesan anda</label>
                  <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-4 ml-auto mr-auto text-center">
                    <button class="btn btn-primary btn-raised">
                      Kirim pesan
                    </button>
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
            <li>
              <a href="<?php echo base_url('TentangAplikasi'); ?>">
                Tentang Aplikasi
              </a>
            </li>
            <li>
              <a href="https://github.com/ezralazuardy/aplikasi-antrian-klinik/blob/master/LICENSE" target="_blank">
                Lisensi
              </a>
            </li>
          </ul>
        </nav>
      <!-- <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, dibuat dengan <i class="material-icons">favorite</i> oleh
        <a href="#" target="_blank">TinyLab</a>.
      </div> -->
    </div>
  </footer>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/moment.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery.sharrre.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/material-kit.js?v=2.0.4'); ?>"></script>
</body>
</html>