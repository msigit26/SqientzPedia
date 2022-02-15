<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/loginbtn.png" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SqientzPedia Login</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Varela Round;
      background: url("<?php echo base_url() ?>assets/img/Cover.png");
      background-size: 100%;
    }

    .box {
      width: 100%;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      background: #191919;
      text-align: center;
      transition: 0.25s;
      margin-top: 100px;
    }

    .box input[type="text"],
    .box input[type="password"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #3498db;
      padding: 10px 10px;
      width: 250px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }

    .box h1 {
      color: white;
      text-transform: uppercase;
      font-weight: 500;
    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus {
      width: 300px;
      border-color: #2ecc71;
    }

    .box input[type="submit"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }

    .box input[type="submit"]:hover {
      background: #2ecc71;
    }

    .forgot {
      text-decoration: underline;
    }

    ul.social-network {
      list-style: none;
      display: inline;
      margin-left: 0 !important;
      padding: 0;
    }

    ul.social-network li {
      display: inline;
      margin: 0 5px;
    }

    .social-network a.icoFacebook:hover {
      background-color: #3b5998;
    }

    .social-network a.icoTwitter:hover {
      background-color: #33ccff;
    }

    .social-network a.icoGoogle:hover {
      background-color: #bd3518;
    }

    .social-network a.icoFacebook:hover i,
    .social-network a.icoTwitter:hover i,
    .social-network a.icoGoogle:hover i {
      color: #fff;
    }

    a.socialIcon:hover,
    .socialHoverClass {
      color: #44bcdd;
    }

    .social-circle li a {
      display: inline-block;
      position: relative;
      margin: 0 auto 0 auto;
      border-radius: 50%;
      text-align: center;
      width: 50px;
      height: 50px;
      font-size: 20px;
    }

    .social-circle li i {
      margin: 0;
      line-height: 50px;
      text-align: center;
    }

    .social-circle li a:hover i,
    .triggeredHover {
      transform: rotate(360deg);
      transition: all 0.2s;
    }

    .navbar-brand {
      display: inline-block;
      padding-top: 0.3125rem;
      padding-bottom: 0.3125rem;
      margin-right: 1rem;
      font-size: 1.25rem;
      line-height: inherit;
      white-space: nowrap;
    }

    .social-circle i {
      color: #fff;
      transition: all 0.8s;
      transition: all 0.8s;
    }
  </style>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/scripts.js"></script>
</head>

<body oncontextmenu="return false" class="snippet-body">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() ?>account/index">SQIENTZ
        <img src="<?php echo base_url() ?>assets/img/logoawan.png" alt="" style="width: 62px; height: 68.69px; position: fit-content" />
        PEDIA</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <form class="box" action="<?php echo base_url() ?>account/proses_login" method="post">
            <img src="<?php echo base_url() ?>assets/img/LogoPutih.png" alt="" style="width: 400px; height: 112.97px; position: fit-content" />

            <p class="text-white"><?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php endif ?> </p>

            <p class="text-muted">Please Enter Your Username and Password</p>

            <input type="text" name="username" id="username" placeholder="username" />
            <?php
            if ($this->session->flashdata('message1')) { ?>
              <div class="alert alert-danger">
                <?php echo $this->session->flashdata('message1'); ?>
              </div>
            <?php } ?>

            <input type="password" name="password" id="password" placeholder="Password" />
            <?php
            if ($this->session->flashdata('message2')) { ?>
              <div class="alert alert-danger">
                <?php echo $this->session->flashdata('message2'); ?>
              </div>
            <?php } ?>

            <a class="forgot text-muted" href="<?php echo base_url() ?>account/daftar">Don't have account?</a>
            <input type="submit" name="" value="Login" href="#" />
            <div class="col-md-12"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>