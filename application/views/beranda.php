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
                                        <li class="active"> <a href="#">Home</a> </li>
                                        <li> <a href="#about">About</a> </li>
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
            <form class="main-form" action="<?php echo base_url() ?>beranda/cari" action="GET">
                <h3>Find Your Scientist</h3>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label>Keywords</label>
                                <input class="form-control" placeholder="Masukkan Kata Kunci" type="text" name="keywords" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <button style="background-color: white;"><a style="color: white;">Search</a></button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About SQIENTZPEDIA</h2>
                        <span> Project Aplikasi Ilmuwan Dunia Berbasis Web Kelompok 5 Mata Kuliah Analisis dan Desain Sistem serta Rekayasa Perangkat Lunak.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="about-box">
                            <p> <span>Aplikasi ensiklopedia ilmuwan dunia berbasis web adalah aplikasi online yang digunakan untuk mencari informasi seputar ilmuwan dunia. Pada aplikasi ini, kami menyediakan berbagai fitur yang dapat mempermudah pengguna untuk mencari informasi. Tidak hanya informasi berupa bacaan tapi pada aplikasi ini kami juga menyediakan berbagai gambar yang dapat memperjelas informasi dan tentunya akan menjadi salah satu daya tarik aplikasi terhadap pengguna agar saat membaca ensiklopedia pengguna tidak merasa bosan saat menggunakan aplikasi. Kami akan membuat sistem dan cara aplikasi yang lebih efektif dan efisien pada saat pemakaian aplikasi.
                                </span></p>
                            <div class="palne-img-area">
                                <img src="<?php echo base_url() ?>assets/img/logoresmi.png" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- traveling -->
    <div id="travel" class="traveling">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>Ilmuwan Terkemuka Di Dunia</h2>
                        <span>Ilmuwan di bawah ini adalah yang paling berjasa dalam memajukan peradaban dunia, lho. Penasaran? Yuk, kenali siapa mereka.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="traveling-box">
                        <i><img src="<?php echo base_url() ?>assets/icon/travel-icon.png" alt="icon" /></i>
                        <h3>Albert Einstein</h3>
                        <p> Penemu jenius teori relativitas. </p>
                        <div class="read-more">
                            <a href="<?php echo base_url() ?>beranda/biodata/2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="traveling-box">
                        <i><img src="<?php echo base_url() ?>assets/icon/travel-icon2.png" alt="icon" /></i>
                        <h3>Nikola Tesla</h3>
                        <p> Sangat berjasa dalam mekanisme kelistrikan. </p>
                        <div class="read-more">
                            <a href="<?php echo base_url() ?>beranda/biodata/13">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="traveling-box">
                        <i><img src="<?php echo base_url() ?>assets/icon/travel-icon3.png" alt="icon" /></i>
                        <h3>Thomas Alva Edison</h3>
                        <p> Penemu terkemuka yang menemukan lampu pilar. </p>
                        <div class="read-more">
                            <a href="<?php echo base_url() ?>beranda/biodata/15">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="traveling-box">
                        <i><img src="<?php echo base_url() ?>assets/icon/travel-icon4.png" alt="icon" /></i>
                        <h3>Sir Isaac Newton</h3>
                        <p> Bapak Ilmu Fisika Klasik penemu hukum gravitasi. </p>
                        <div class="read-more">
                            <a href="<?php echo base_url() ?>beranda/biodata/14">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end traveling -->
    <!--Tours -->
    <div class="Tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Landasan Untuk Menjadi Seorang Ilmuwan</h2>
                        <span>Kamu juga bisa menjadi seorang ilmuan! Cukup dalami beberapa cabang ilmu berikut ini sebagai bekal kamu melangkah, semangat!</span>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item" class="img-responsive">
                                <iframe width="363.32" height="245.8" src="https://www.youtube.com/embed/eQv10AP5BG0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3>Matematika</h3>
                                <p>Matematika atau sebelumnya disebut ilmu hisab adalah ilmu yang mempelajari besaran, struktur, ruang, dan perubahan.</p>
                            </div>
                            <div class="item" class="img-responsive">
                                <iframe width="363.32" height="245.8" src="https://www.youtube.com/embed/4HrweW4IqJc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3>Fisika</h3>
                                <p>Fisika adalah sains atau ilmu alam yang mempelajari materi beserta gerak dan perilakunya dalam lingkup ruang dan waktu, bersamaan dengan konsep yang berkaitan seperti energi dan gaya.</p>
                            </div>
                            <div class="item" class="img-responsive">
                                <iframe width="363.32" height="245.8" src="https://www.youtube.com/embed/CrlVgxuaTWk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3>Biologi</h3>
                                <p>Biologi atau ilmu hayat adalah kajian tentang kehidupan, dan organisme hidup, termasuk struktur, fungsi, pertumbuhan, evolusi, persebaran, dan taksonominya.</p>
                            </div>
                            <div class="item" class="img-responsive">
                                <iframe width="363.32" height="245.8" src="https://www.youtube.com/embed/WAE3-XPclE4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3>Kimia</h3>
                                <p>Kimia adalah cabang dari ilmu fisik yang mempelajari tentang susunan, struktur, sifat, dan perubahan materi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end Tours -->
    <!-- Amazing -->
    <div class="amazing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="amazing-box">
                        <h2>Ingin Mengenal Lebih Dalam Sosok Ilmuwan Favoritmu?</h2>
                        <span>Kamu dapat membaca karya ilmiah dan juga penelitian - penelitian yang mereka kembangkan di sini. Banyak buku - buku yang memuat ilmu yang mereka kembangkan dan menjadi bakal pengetahuanmu, lho!</span>
                        <a href="https://books.google.com/" target="_blank">Visit Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Amazing -->
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
                    <p>&copy; 2020 All Right Reserved By SqientzPedia</a></p>
                </div>
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