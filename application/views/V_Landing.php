<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Landing Page</title>
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-icons.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material-kit.css?v=2.0.4');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.css'); ?>">
  <style type="text/css">
    .toast { opacity: 1 !important; }
  </style>  
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate"><a class="navbar-brand" href="#">Aplikasi Antrian Klinik</a></div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto"> </ul>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('DaftarDokter'); ?>"><i class="material-icons">people</i>Dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('DaftarLayanan'); ?>"><i class="material-icons">book</i>Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('JadwalDokter'); ?>"><i class="material-icons">schedule</i>Jadwal</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url('assets/img/bg.webp'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center" style="margin-bottom: 60px;">
          <h4>
          <?php
          $hari = date('D');
          switch ($hari) {
            case 'Sun':
              $hari = "Minggu";
            break;
         
            case 'Mon':     
              $hari = "Senin";
            break;
         
            case 'Tue':
              $hari = "Selasa";
            break;
         
            case 'Wed':
              $hari = "Rabu";
            break;
         
            case 'Thu':
              $hari = "Kamis";
            break;
         
            case 'Fri':
              $hari = "Jumat";
            break;
         
            case 'Sat':
              $hari = "Sabtu";
            break;
            
            default:
              $hari = "";   
            break;
          }
          $tanggal = date('d');
          $bulan = date('n');
          switch ($bulan) {
            case 1:
              $bulan = "Januari";
            break;

            case 2:
              $bulan = "Februari";
            break;

            case 3:
              $bulan = "Maret";
            break;

            case 4:
              $bulan = "April";
            break;

            case 5:
              $bulan = "Mei";
            break;

            case 6:
              $bulan = "Juni";
            break;

            case 7:
              $bulan = "Juli";
            break;

            case 8:
              $bulan = "Agustus";
            break;

            case 9:
              $bulan = "September";
            break;

            case 10:
              $bulan = "Oktober";
            break;

            case 11:
              $bulan = "November";
            break;

            case 12:
              $bulan = "Desember";
            break;
            
            default:
              $bulan = "";   
            break;
          }
          $tahun = date('Y');
          echo $hari . ", ". $tanggal . " " . $bulan . " " . $tahun;
          ?>
          </h4> 
        </div>
        <div class="col-md-4 text-center">
          <div class="card">
            <div class="card-header card-header-text card-header-primary">
              <h4 class="card-title">Sisa antrian</h4>
            </div>
            <div class="card-body">
              <h2 id="sisa-antrian-ini" style="color: #000000; margin: 0px;">
                <?php 
                if ($sisa_antrian) {
                  echo $sisa_antrian;
                } else {
                  echo "0";
                } ?>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="card">
            <div class="card-header card-header-text card-header-success">
              <h4 class="card-title">Antrian saat ini</h4>
            </div>
            <div class="card-body">
              <h2 id="antrian-ini" style="color: #000000; margin: 0px;"><?php 
                if (is_array($list) && !empty($list)) {
                  echo $list[0]['antrian'];
                } else {
                  echo "-";
                } ?>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <h4 class="card-title">Waktu tunggu</h4>
            </div>
            <div class="card-body">
              <h2 id="waktu-tunggu-ini" style="color: #000000; margin: 0px;">
                <?php 
                if (is_array($list) && !empty($list)) {
                  echo (int)($sisa_antrian*10) ." Menit";
                } else {
                  echo "0 menit";
                } 
                ?>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 40px;"><a href="<?php echo base_url('Daftar'); ?>" class="btn btn-danger btn-raised btn-lg">Daftar</a></div>
      </div>
    </div>
  </div>
  <div class="main main-raised" style="margin-top: 0.5%;">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Petunjuk Penggunaan Aplikasi</h2>
            <h5 class="description">Informasi singkat tentang bagaimana cara menggunakan Aplikasi Antrian Klinik</h5> 
          </div>
        </div>
        <div class="info info-horizontal" style="margin-top: -50px;">
          <div class="icon icon-danger">
            <i class="material-icons">edit</i>
          </div>
          <div class="description">
            <h4 class="info-title">Daftar</h4>
            <p>Pada bagian halaman atas, klik tombol <i><a href="#">Daftar</a></i>, lalu isi form biodata anda dengan lengkap dan benar.</p>
          </div>
        </div>
        <div class="info info-horizontal" style="margin-top: -80px;">
          <div class="icon icon-primary">
            <i class="material-icons">people</i>
          </div>
          <div class="description">
            <h4 class="info-title">Lihat daftar dokter</h4>
            <p>Pada bagian menu di pojok kanan atas, klik tombol <i><a href="<?php echo base_url('DaftarDokter'); ?>">Dokter</a></i>, untuk melihat siapa saja dokter yang hadir dan tersedia untuk pasien sekarang.</p>
          </div>
        </div>
        <div class="info info-horizontal" style="margin-top: -80px;">
          <div class="icon icon-success">
            <i class="material-icons">book</i>
          </div>
          <div class="description">
            <h4 class="info-title">Lihat daftar layanan</h4>
            <p>Pada bagian menu di pojok kanan atas, klik tombol <i><a href="<?php echo base_url('DaftarLayanan'); ?>">Layanan</a></i>, untuk melihat apa saja layanan medis yang disediakan puskesmas.</p>
          </div>
        </div>
        <div class="info info-horizontal" style="margin-top: -80px;">
          <div class="icon icon-warning">
            <i class="material-icons">schedule</i>
          </div>
          <div class="description">
            <h4 class="info-title">Lihat jadwal dokter</h4>
            <p>Pada bagian menu di pojok kanan atas, klik tombol <i><a href="<?php echo base_url('JadwalDokter'); ?>">Jadwal</a></i>, untuk melihat apa saja jadwal dokter.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-contacts">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="text-center title">Kontak kami</h2>
          <h4 class="text-center description">Punya pertanyaan tentang aplikasi? Tanyakan kepada kami!<br>Anda juga dapat mengirim saran atau kritik disini</h4>
          <form class="contact-form" method="POST" action="<?php echo base_url('LandingPage/insertMessage'); ?>">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama lengkap</label>
                  <input type="text" name="nama" class="form-control" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Alamat surel</label>
                  <input type="email" name="email" class="form-control" required="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleMessage" class="bmd-label-floating">Pesan, kritik, atau saran</label>
              <textarea type="text" name="pesan" class="form-control" rows="4" id="exampleMessage" required=""></textarea>
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
          <li><a href="<?php echo base_url('TentangAplikasi'); ?>">Tentang Aplikasi</a></li>
          <li><a href="https://github.com/ezralazuardy/aplikasi-antrian-klinik/blob/master/LICENSE" target="_blank">Lisensi</a></li>
        </ul>
      </nav>
      <div class="copyright float-right"> &copy;
        <script>
        document.write(new Date().getFullYear())
        </script>, dibuat dengan <i class="material-icons">favorite</i> oleh <a href="https://tinylab.tk/about/" target="_blank">TinyLab</a>. </div>
    </div>
  </footer>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/material-kit.js?v=2.0.4'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/vendor/toastr/toastr.min.js'); ?>"></script>
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
  <script type="text/javascript">
  <?php
  if ($this
      ->session
      ->flashdata('success'))
    {
  ?>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  Command: toastr["success"]("<?php echo $this
        ->session
        ->flashdata('success'); ?>")
  <?php
  } ?>
  <?php
  if ($this
      ->session
      ->flashdata('error'))
    {
  ?>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  Command: toastr["error"]("<?php echo $this
        ->session
        ->flashdata('error'); ?>")
  <?php
  } ?>
  </script>
</body>
</html>