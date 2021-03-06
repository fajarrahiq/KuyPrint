<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KUY PRINT</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url();?>asset/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">

  <nav class="navbar navbar-expand-lg orange pt-2">
      <a class="navbar-brand" href="<?php echo base_url();?>Home.html">Kuy Print</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="topnav navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>Home.html">Home <span class="sr-only">(current)</span></a>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="<?php echo base_url();?>#order">How to Order</a>
        </li>
      </ul>
    </div>
    <div class="btn-group">
  <button type="button" class="btn btn-warning" disabled><i class="fa fa-user-circle">Login</i></button>
  <button type="button" class="btn btn-warning dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
    <div class="dropdown-menu">
    <button class="dropdown-item" type="button" href="#">USER</button>
    <button class="dropdown-item" type="button" href="#">MITRA</button>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-warning" disabled><i class="fa fa-user-circle">REGISTER</i></button>
  <button type="button" class="btn btn-warning dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
  <span class="sr-only">Toggle Dropdown</span></button>
  <div class="dropdown-menu">
    <button class="dropdown-item" type="button" href="#">USER</button>
    <button class="dropdown-item" type="button" href="#">MITRA</button>
  </div>
</div>
  </nav>
</head>

<body>
  <!-- Main Layout -->
  <div class="jumbotron-fluid">
    <img src="home.jpg" alt="home" width="100%" height="500px";>
    <div class="content">
      <h1>WELCOME TO KUY PRINT</h1>
      <p>KuyPrint adalah sebuah program berbasis web apps print, dengan difasilitasinya user untuk terhubung dengan orang lain / jasa printing yang nanti akan membantu user untuk mencetak dokumennya</p>
      <button class="btn btn-loc dropdown-toggle" type="button" id="location" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SEARCH LOCATION</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
          <button class="dropdown-item" type="button">Ciseke</button>
          <button class="dropdown-item" type="button">Sayang</button>
          <button class="dropdown-item" type="button">Caringin</button>
      </div>
    </div>
  </div>
  <div class="how text-center text-md-none mt-2">
    <div class="Row">
      <div class="col-md-12 mb-4 mt-3">
        <h1>OUR MITRA</h1>
      </div>
    </div>
  </div>
<!-- Mitra -->
  <div class="row">
  <div class="col-lg-3 col-md-12 mb-4">
    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/fariz.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Muhammad Fariz</strong></h4>
        <h5 class="indigo-text"><strong>Carigin</strong></h5>

        <p class="card-text"> Mahasiswa Teknik Informatika 2016. The Aya kost,depan futsal 88,Caringin,Jatinangor
        </p>

      </div>
      <!--/.Card content-->

    </div>
  </div>

  <div class="col-lg-3 col-md-12 mb-4">
    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/niya.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Hilya Tsaniya</strong></h4>
        <h5 class="indigo-text"><strong>Ciseke</strong></h5>

        <p class="card-text">Mahasiswa Teknik Informatika 2016. Pondok Siera,Ciseke Besar no.160,Jatinangor
        </p>
      </div>
      <!--/.Card content-->

    </div>
  </div>
  <div class="col-lg-3 col-md-12 mb-4">
    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/intan.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Intan Pratiwi</strong></h4>
        <h5 class="indigo-text"><strong>Ciseke</strong></h5>

        <p class="card-text">Mahasiswa Teknik Informatika 2016. Pondok Geulis,Ciseke Besar,Jatinangor
        </p>

      </div>
      <!--/.Card content-->

    </div>
  </div>

  <div class="col-lg-3 col-md-12 mb-4">

    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/fajar.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Fajar A. Rahiq</strong></h4>
        <h5 class="indigo-text"><strong>Ciseke</strong></h5>

        <p class="card-text">Mahasiswa Teknik Informatika 2016. Pondok Al-Amin,Ciseke Besar,Jatinangor
        </p>

      </div>
      <!--/.Card content-->

    </div>
  </div>

</div>
<!-- Mitra -->

<!-- Mitra -->
  <div class="row">
  <div class="col-lg-3 col-md-12 mb-4">
    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/fikri.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Fikri Ikhsan</strong></h4>
        <h5 class="indigo-text"><strong>Sayang</strong></h5>

        <p class="card-text"> Mahasiswa Teknik Informatika 2016. Pondok Abah Uni,Sayang,Jatinangor
        </p>

      </div>
      <!--/.Card content-->

    </div>
  </div>

  <div class="col-lg-3 col-md-12 mb-4">
    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/taeyon.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Kim Taeyeon</strong></h4>
        <h5 class="indigo-text"><strong>Caringin</strong></h5>

        <p class="card-text">Mahasiswa Ilmu Komunikasi 2015. Pondok GG,Caringin,Jatinangor
        </p>
      </div>
      <!--/.Card content-->

    </div>
  </div>
  <div class="col-lg-3 col-md-12 mb-4">
    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/mark.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Mark Lee</strong></h4>
        <h5 class="indigo-text"><strong>Sayang</strong></h5>

        <p class="card-text">Mahasiswa Kedokteran 2018.Dream Kost,Sayang,Jatinangor
        </p>

      </div>
      <!--/.Card content-->

    </div>
  </div>

  <div class="col-lg-3 col-md-12 mb-4">

    <!--Card-->
    <div class="card card-cascade wider mb-4">

      <!--Card image-->
      <div class="view view-cascade">
        <img src="<?php echo base_url();?>asset/images/yoona.jpg" class="card-img-top">
        <a href="<?php echo base_url();?>#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Im Yoon A</strong></h4>
        <h5 class="indigo-text"><strong>Sayang</strong></h5>

        <p class="card-text">Mahasiswa Farmasi 2015.Pondok Beauty,Sayang,Jatinangor
        </p>

      </div>
      <!--/.Card content-->

    </div>
  </div>

</div>
<!-- Mitra -->

  <!-- Main Layout -->
</body>

<!-- Footer -->
<div class="how text-center text-md-none mt-2">
  <div class="Row">
    <div class="col-md-12">
      <h3>HOW TO ORDER</h3>
    </div>
  </div>
</div>
<div class="jumbotron-fluid text-center">
    <div class ="icon" id="order">
      <i class="fa fa-home fa-3x" aria-hidden="true">----------</i>
      <i class="fa fa-credit-card fa-3x" aria-hidden="true">----------</i>
      <i class="fa fa-truck fa-3x" aria-hidden="true">----------</i>
        <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
      </div>
  </div>

<footer class="page-footer font-small orange pt-5">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-none">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid Column -->
        <div class="col-md-12">
        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold" id="contact"> Contact Us</h5>
      </div>
      <!-- Grid Column -->
    </div>
    <!-- Grid Row -->

    <div class="container-fluid text-center text-md-none mt-3">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Our Company</h5>
          <p>Sayang,Kecamatan Jatinangor, Kabupaten Sumedang,Jawa Barat,Indonesia</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Kuy Print</h5>
          <a href="<?php echo base_url();?>#!">About Us</a>

      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="copyright col-md-12 py-3">© 2018 Copyright:
      <a href="<?php echo base_url();?>https://mdbootstrap.com/bootstrap-tutorial/"> MISARA COMPANY</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-3.3.1.min.js" media="all" ></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/popper.min.js"  media="all"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js" media="all"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/mdb.min.js" media="all"></script>
</body>

</html>