<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="assets/img/loginbtn.png" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SqientzPedia SignUp</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Varela Round;
      background: url("../assets/img/Cover.png");
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

    .social-circle i {
      color: #fff;
      transition: all 0.8s;
      transition: all 0.8s;
    }
  </style>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body oncontextmenu="return false" class="snippet-body">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">SQIENTZ
        <img src="assets/img/logoawan.png" alt="" style="width: 62px; height: 68.69px; position: fit-content" />
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
          <form class="box">
            <img src="assets/img/LogoPutih.png" alt="" style="width: 400px; height: 112.97px; position: fit-content" />
            <p class="text-muted">Please Fill The Form Correctly</p>
            <input type="text" name="" placeholder="Full Name" />
            <input type="text" name="" placeholder="Username" />
            <input type="password" name="" placeholder="Password" id="password" required />
            <input type="password" name="" placeholder="Confirm Password" id="confirm_password" required />
            <a class="forgot text-muted" href="login.html">Already have an Account?</a>
            <input type="submit" name="" value="Sign Up" href="#" />
            <div class="col-md-12"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>