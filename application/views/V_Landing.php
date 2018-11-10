<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4'); ?>" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>"> 
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate"> <a class="navbar-brand" href="<?php echo base_url(''); ?>">
        Aplikasi Antrian Klinik </a> </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto"> </ul>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('DaftarDokter'); ?>"> <i class="material-icons">persons</i> Dokter </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('DaftarLayanan'); ?>"> <i class="material-icons">book</i> Layanan </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('JadwalDokter'); ?>"> <i class="material-icons">schedule</i> Jadwal </a>
            </li>
            <!--             <li class="nav-item">
              <a class="nav-link" href="Login">
                <i class="material-icons">lock</i> Masuk
              </a>
            </li> -->
          </ul>
        </div>
      </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url('assets/img/bg.webp'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4><?php echo date('l, d F Y'); ?></h4> </div>
        <div class="col-md-4 text-center">
          <h3 class="title">Sisa antrian</h3>
          <h1 id="sisa-antrian-ini"><?php 
            if ($sisa_antrian) {
              echo $sisa_antrian;
            } else {
              echo "0";
            } ?></h1>
          <br> </div>
        <div class="col-md-4 text-center">
          <h3 class="title">Antrian saat ini</h3>
          <h1 id="antrian-ini"><?php 
            if (is_array($list) && !empty($list)) {
              echo $list[0]['antrian'];
            } else {
              echo "0";
            } ?>
          </h1>
          <br> </div>
        <div class="col-md-4 text-center">
          <h3 class="title">Waktu tunggu</h3>
          <h1 id="waktu-tunggu-ini"><?php 
          if (is_array($list) && !empty($list)) {
            echo (int)($sisa_antrian*10) ." Menit";
          } else {
            echo "0 Menit";
          } ?></h1>
          <br> </div>
        <div class="col-md-12 text-center"> <a href="<?php echo base_url('Daftar'); ?>" class="btn btn-danger btn-raised btn-lg">Daftar</a> </div>
      </div>
    </div>
  </div>
  <div class="main main-raised" style="margin-top:1%;">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Petunjuk Penggunaan Aplikasi</h2>
            <h5 class="description">Informasi singkat tentang bagaimana cara menggunakan Aplikasi Antrian Klinik</h5> </div>
        </div>
        <!-- <div class="features">
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
        </div> --></div>
    </div>
    <div class="section section-contacts">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="text-center title">Kontak kami</h2>
          <h4 class="text-center description">Punya pertanyaan tentang aplikasi? Tanyakan kepada kami!<br>Anda juga dapat mengirim saran atau kritik tentang aplikasi</h4>
          <form class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama anda</label>
                  <input type="email" class="form-control"> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat surel anda</label>
                  <input type="email" class="form-control"> </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleMessage" class="bmd-label-floating">Pesan anda</label>
              <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
            </div>
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto text-center">
                <button class="btn btn-primary btn-raised">Kirim</button>
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
      <div class="copyright float-right"> &copy;
        <script>
        document.write(new Date().getFullYear())
        </script>, dibuat dengan <i class="material-icons">favorite</i> oleh <a href="#" target="_blank">TinyLab</a>. </div>
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
  <script type="text/javascript">
  var getUrl = window.location;
  var base_url = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
  $(document).ready(function() {
    checkAntrian();
    setInterval(function() {
      checkAntrian();
    }, 10000);
  });

  function checkAntrian() {
    $.ajax({
      url: base_url + "/getAntrian",
      type: "POST",
      dataType: 'json',
      success: function(result) {
        var hasil = result.sisa_antrian * 10;
        $("#sisa-antrian-ini").text(result.sisa_antrian);
        $("#antrian-ini").text(result.list[0].antrian);
        $("#waktu-tunggu-ini").text(hasil + " Menit");
        console.log(result.sisa_antrian);
      },
      error: function(jqXHR, textStatus, errorThrown) {}
    });
  }
  </script>
</body>
</html>