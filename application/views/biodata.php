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

    <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />

    <link href="//s.w.org/wp-includes/css/dashicons.css?20150710" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/favorit.css" />
    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>



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
                                        <li> <a href="<?php echo base_url() ?>beranda">Home</a> </li>
                                        <li><a href="#">Scientist List</a>
                                            <ul class="dropdown-bar">
                                                <li><a href="<?php echo base_url() ?>beranda/Favorit">Favorite List</a></li>
                                                <li><a href="<?php echo base_url() ?>beranda/all_list">All List</a></li>
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
        <div class="banner-main">

            <?php foreach ($tampildata as $data) : ?>
                <img src=" <?php echo base_url('assets/kotak/' . $data->foto) ?>" alt="<?php echo base_url() ?>assets/kotak/default.png" />
                <div class=" container">
                    <div class="text-bg">
                        <div class="container">
                        </div>
                    </div>
                </div>
                <!-- <?php endforeach ?> -->
        </div>
    </section>

    <br>
    <br>
    <!-- about -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <?php foreach ($tampildata as $data) : ?>
                        <h2><?php echo $data->namailmuwan ?></h2>
                        <span><?php echo $data->desksingkat ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="titlepage">
                        <h2>Biodata <?php echo $data->namailmuwan ?></h2><br>
                        <span><?php echo $data->biodata ?></span>
                    </div>

                    <div class="titlepage">
                        <h2>Biografi <?php echo $data->namailmuwan ?></h2><br>
                        <span><?php echo $data->biografi ?></span>
                    </div>

                    <div class="titlepage">
                        <h2>Segala Karya <?php echo $data->namailmuwan ?></h2><br>
                        <span><?php echo $data->karya ?></span>
                    </div>

                    <div class="titlepage">
                        <h2>Penghargaan <?php echo $data->namailmuwan ?></h2><br>
                        <span><?php echo $data->penghargaan ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="titlepage">
        <h2>Video Biografi <?php echo $data->namailmuwan ?></h2>

        <iframe style="align-items: center;" width="1080" height="720" src="<?php echo $data->link ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<?php endforeach ?>

<!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <d class="row pdn-top-30">
                <div class="Follow">
                    <h3>Ada Masalah Dengan SqientzPedia? Tinggalkan Pesan, Kritik, atau Saran.</h3>
                    <form action="<?php echo base_url() ?>beranda/komentar" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" name="username" placeholder="Username" maxlength="30" type="text" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" name="email" placeholder="example@mail.com" maxlength="30" type="text" required>
                            </div>
                            <?php date_default_timezone_set('Asia/Jakarta'); ?>
                            <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y h:i:sa"); ?>">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" name="komentar" placeholder="comment" maxlength="5000" type="text" required></textarea>
                            </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                    </form>
                </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2020 All Right Reserved By SqientzPedia</a></p>
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