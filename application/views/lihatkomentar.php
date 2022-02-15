<!DOCTYPE html>
<html lang="en">

<head>
    <?php $nama = $this->session->userdata('username'); ?>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/loginbtn.png" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SqientzPedia</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/css/owl.theme.default.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?php echo base_url() ?>assets/img/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_white_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_information">
                                <ul>
                                    <li><img src="<?php echo base_url() ?>assets/images/1.png" alt="#" /> UIN JAKARTA</li>
                                    <li><img src="<?php echo base_url() ?>assets/images/2.png" alt="#" /> +6281282124120</li>
                                    <li><img src="<?php echo base_url() ?>assets/images/3.png" alt="#" /> chanoppy@naver.com</li>
                                    <li><img src="<?php echo base_url() ?>assets/images/User.png" alt="#" /><?php echo $nama ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="<?php echo base_url() ?>index.html"><img src="<?php echo base_url() ?>assets/img/LogoPutih.png" alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="<?php echo base_url() ?>berandaadmin">Home</a> </li>
                                        <li class="active"><a href="#">Admin</a>
                                            <ul class="dropdown-bar">
                                                <li><a href="<?php echo base_url() ?>berandaadmin/tambahdata">Tambah Data</a></li>
                                                <li><a href="<?php echo base_url() ?>berandaadmin/tampil_komentar#">Lihat Komentar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url() ?>account/logout">Log Out</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="<?php echo base_url() ?>assets/img/coverdepan1.png" class="d-block w-100" alt="#">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="<?php echo base_url() ?>assets/img/coverdepan2.png" class="d-block w-100" alt="#">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>assets/img/coverdepan3.png" class="d-block w-100" alt="#">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">


        </div>
        </div>
    </section>
    <!-- Tabel -->
    <table class="table">
        <thead class="thead-light">
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = "1"; ?>
            <?php foreach ($tampilkomen as $komen) : ?>
                <tr style="text-align: center;">
                    <th scope="row"><?php echo $nomor ?></th>
                    <td><?php echo $komen->username ?></td>
                    <td><?php echo $komen->email ?></td>
                    <td><?php echo $komen->tanggal ?></td>
                    <td><?php echo $komen->komentar ?></td>
                    <?php $nomor++ ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- endtabel -->
    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="copyright">
                <div class="container">
                    <p>&copy; 2020 All Right Reserved By SqientzPedia</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery-3.0.0.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url() ?>js/custom.js"></script>
    <!-- javascript -->
    <script src="<?php echo base_url() ?>js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

</body>

</html>