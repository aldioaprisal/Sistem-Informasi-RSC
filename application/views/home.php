<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>RSCD</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/isotope.css');?>" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/fancybox/jquery.fancybox.css');?>"" type="text/css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/gaya.css');?>">
  <!-- skin -->
  <link rel="stylesheet" href="<?php echo base_url('assets/skin/default.css');?>">
  <style type="text/css">
    body {
    font-family: 'Varela Round', sans-serif;
  }
  .modal-login {
    color: #636363;
    width: 350px;
  }
  .modal-login .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
  }
  .modal-login .modal-header {
    border-bottom: none;
    position: relative;
    justify-content: center;
  }
  .modal-login h4 {
    text-align: center;
    font-size: 26px;
  }
  .modal-login  .form-group {
    position: relative;
  }
  .modal-login i {
    position: absolute;
    left: 13px;
    top: 11px;
    font-size: 18px;
  }
  .modal-login .form-control {
    padding-left: 40px;
  }
  .modal-login .form-control:focus {
    border-color: #00ce81;
  }
  .modal-login .form-control, .modal-login .btn {
    min-height: 40px;
    border-radius: 3px; 
  }
  .modal-login .hint-text {
    text-align: center;
    padding-top: 10px;
  }
  .modal-login .close {
        position: absolute;
    top: -5px;
    right: -5px;
  }
  .modal-login .btn {
    background: #00ce81;
    border: none;
    line-height: normal;
  }
  .modal-login .btn:hover, .modal-login .btn:focus {
    background: #00bf78;
  }
  .modal-login .modal-footer {
    background: #ecf0f1;
    border-color: #dee4e7;
    text-align: center;
    margin: 0 -20px -20px;
    border-radius: 5px;
    font-size: 13px;
    justify-content: center;
  }
  .modal-login .modal-footer a {
    color: #999;
  }
  .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }
</style>
</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
        <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">Rumah Sakit Ceria
                    </a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="<?php echo base_url('Welcome/login');?>">Admin</a></li>
          <li><a href="#section-works">Portfolio</a></li>
          <li><a href="<?php echo base_url('pendaftaran/daftar')?>">Pendaftaran Pasien</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured" id="home">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-6 col-md-offset-3">

          <div class="align-center">
            <i class="fa fa-medkit fa-5x mar-bot20"></i>
            <h2 class="slogan">Welcome to RS.Ceria</h2>
            <p>Dalam upaya menjadi salah satu rumah sakit terkemuka di Jawa Barat, Rumah Sakit Ceria berangkat dari awal yang sangat sederhana. Sejak dibentuk pada tahun 2017, antusiasme masyarakat terhadap pelayanan kami sangat tinggi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="align-center">
            <i class="  fa fa-stethoscope fa-5x mar-bot20"></i>
            <h4 class="text-bold">Pelayanan Medis</h4>
            <p>Mulai dari fasilitas kesehatan mendasar hingga unit-unit perawatan khusus, RS Ceria dikenal sebagai pusat medis aneka guna yang terus tumbuh untuk memenuhi tuntutan zaman
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-heart fa-5x mar-bot20"></i>
            <h4 class="text-bold">Rawat Inap</h4>
            <p>Kami berupaya memberikan pelayanan keperawatan yang menyeluruh yaitu bio-psiko sosio kultural dan spiritual sesuai kebutuhan pasien berdasarkan visi, misi dan falsafah keperawatan serta tanpa melupakan kode etik keperawatan
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-medkit fa-5x mar-bot20"></i>
            <h4 class="text-bold">Penunjang Medis</h4>
            <p>Kami menyediakan ruang-ruang khusus kepada para pasien untuk menjalankan berbagai kenyamanan dan senantiasa menyediakan kebutuhan yang senantiasa menjaga performa mereka.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                                        “Rumah Sakit yang memberikan pelayanan kesehatan perseorangan yang berdasarkan keramahtamahan” 
                                    </h5>
              <br/>
              <span class="author">&mdash;  <a href="#"></a></span>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- about -->
  <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Dokter</h2>
            <p>Rumah Sakit Ceria menyediakan Dokter-Dokter spesialis dalam bidangnya masing-masing</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member1.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Raden</h4>
              <span>Dokter Mata</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member2.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Aldio</h4>
              <span>Dokter Gigi</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member3.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Haris</h4>
              <span>Dokter Kulit</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member4.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Irfan</h4>
              <span>Dokter Gizi</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="align-center pad-top40 pad-bot40">
        <blockquote class="bigquote color-white">“Rumah Sakit Ceria Daerah Cianjur Menjadi Rumah Sakit Unggulan di Wilayah Cianjur Jawabarat”
</blockquote>
        <p class="color-white">– VISI RSCD Cianjur –</p>
      </div>
    </div>
  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p>Rumah Sakit Ceria memiliki beberapa Poliklinik denganm fasilitas yang baik</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".gigi">Poliklinik Gigi</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".kulit">Poliklinik Kulit</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".mata">Poliklinik Mata</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem gigi">
                <div class="portfolio-item">
                  <img src="<?php echo base_url('assets/img/portfolio/gigi1.jpg');?>" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Poliklinik Gigi</a></h5>
                      <a href="<?php echo base_url('assets/img/portfolio/gigi.jpg');?>" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem mata">
                <div class="portfolio-item">
                  <img src="<?php echo base_url('assets/img/portfolio/mata1.jpg');?>" style="height: 240px" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Poliklinik Mata</a></h5>
                      <a href="<?php echo base_url('assets/img/portfolio/mata.png');?>" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem kulit">
                <div class="portfolio-item">
                  <img src="<?php echo base_url('assets/img/portfolio/kulit2.jpg');?>" style="height: 240px" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Poliklinik Kulit</a></h5>
                      <a href="<?php echo base_url('assets/img/portfolio/kulit.jpg');?>" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot40">
      <blockquote class="bigquote color-white">Meningkatkan kualitas pelayanan individu yang prima secara berkesinambungan
Melakukan pengelolaan Rumah Sakit dengan menggunakan prinsip bisnis sehat</blockquote>
      <p class="color-white">-Misi RSCD Cianjur-</p>
    </div>
  </section>

 

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; 2018</p>
          <div class="credits">

            <a href="#">RUMAH SAKIT CERIA</a> by <a href="https://bootstrapmade.com/">RUMH SAKIT CIANJUR</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo base_url('assets/js/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.nicescroll.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/fancybox/jquery.fancybox.pack.js');?>"></script>
  <script src="<?php echo base_url('assets/js/skrollr.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.scrollTo.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.localScroll.js');?>"></script>
  <script src="<?php echo base_url('assets/js/stellar.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.appear.js');?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>
  <script src="<?php echo base_url('assets/contactform/contactform.js');?>"></script>

</body>

</html>
