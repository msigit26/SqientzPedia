<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/loginbtn.png" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SqientzPedia - Ensiklopedia Ilmuwan</title>
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SQIENTZ
        <img src="<?php echo base_url() ?>assets/img/logoawan.png" alt="" style="width: 62px; height: 68.69px; position: fit-content" />
        PEDIA</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">SqientzPedia</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
          Ensiklopedia Ilmuwan Berbasis Web
        </h2>
        <a class="btn-primary" href="<?php echo base_url() ?>account/login"><input type="image" src="<?php echo base_url() ?>assets/img/loginkecil.png" alt="Submit button" /></a>
      </div>
    </div>
  </header>
  <!-- About-->
  <section class="about-section text-center" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">
            Ensiklopedia Ilmuwan Berbasis Website
          </h2>
          <p class="text-white-50">
            Aplikasi ensiklopedia ilmuwan dunia berbasis web adalah aplikasi
            online yang digunakan untuk mencari informasi seputar ilmuwan
            dunia. Pada aplikasi ini, kami menyediakan berbagai fitur yang
            dapat mempermudah pengguna untuk mencari informasi.
          </p>
        </div>
      </div>
      <img class="img-fluid" src="<?php echo base_url() ?>assets/img/LogoPutih.png" alt="" />
    </div>
  </section>
  <!-- team-->
  <section class="page-section bg-light" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>assets/img/Sigit.jpg" alt="" />
            <h4><b>Muhammad Sigit Tri P.</b></h4>
            <p class="text-muted">Manager Project</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>assets/img/Ahmad.jpeg" alt="" />
            <h4><b>Ahmad Yani</b></h4>
            <p class="text-muted">Designer</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>assets/img/Rani.jpeg" alt="" />
            <h4><b>Rani Mahizah Nst</b></h4>
            <p class="text-muted">System Analyst</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact-->
  <section class="contact-section bg-black" id="signup">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4" />
              <div class="small text-black-50">
                <a href="#!">chanoppy@naver.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="footer bg-black small text-center text-white-50">
    <div class="container">&copy; 2020 All Right Reserved By SqientzPedia</div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Core theme JS-->
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>

</body>

</html>