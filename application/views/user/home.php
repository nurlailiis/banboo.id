<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Banboo.id</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Courier:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css')?>" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>" />

        <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
        <div class='preloader'>
            <div class='loaded'>&nbsp;</div>
        </div>

        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <ul class="nav navbar-nav navbar-right">
                                                <a class="navbar-brand" href="">
                                                    <img style="opacity: 100%" width="60px" src="<?php echo base_url('assets/images/logobanboo.png')?>"/></a>
                                            </ul>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="<?php echo base_url('index.php/user');?>">HOME</a></li>
                                                <li><a href="<?php echo base_url('index.php/product');?>"> PRODUCT</a></li>
                                                <li><a href="<?php echo base_url('index.php/user/gallery');?>"> GALLERY</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?php
                                                        if ($this->session->has_userdata('path'))
                                                        {
                                                            echo '<img src="'.$this->session->userdata("path").'" width=25px;/>';
                                                        } else {
                                                   echo '<i class="glyphicon glyphicon-user"></i>';
                                                } ?></a>
                                                    <ul class="dropdown-menu">
                                                    <?php 
                                                        if ($this->session->has_userdata('username')) {
                                                            echo '
                                                                 <li>
                                                                    <a href="'.base_url('index.php/user').'">'.$this->session->userdata("nama").'
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=" '.base_url('index.php/user/setting').'">Setting
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=" '.base_url('index.php/user/email').'">Email
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=" '.base_url('index.php/login/logout').'">Logout
                                                                    </a>
                                                                </li>
                                                            ';
                                                        }
                                                        else{
                                                            echo '
                                                                 <li>
                                                                    <a href=" '.base_url('index.php/login').'">Login
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=" '.base_url('index.php/signup').'">Signup
                                                                    </a>
                                                                </li>
                                                            ';
                                                        }
                                                     ?>

                                                   
                                                    </ul>
                                                </li>
                                                <!-- <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="glyphicon glyphicon-shopping-cart"></i></a></li> -->
                                            </ul>
                                        </div>

                                    </div>
                                </nav>
                            </div>  
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->


        <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>The Original Banboo.id</h1>
                                            <p>This is just beginning, can't wait to meet you</p>
                                            <div class="home_btn">
                                                <a href="<?php echo base_url('index.php/user');?>" class="btn btn-primary" style="font-size: 15px">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>The Original Banboo.id</h1>
                                            <p>All variant is made by banboo.id</p>
                                            <div class="home_btn">
                                                <a href="<?php echo base_url('index.php/product');?>" class="btn btn-primary" style="font-size: 15px">PRODUCT</a>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="othersservice" class="othersservice">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_othersservice_area sections">
                                <div class="row">
                                    <div class="head_title">
                                        <h2><STRONG>    O OUR PRODUCT</STRONG></h2>
                                        <div class="separator"></div>
                                    </div>

                                    <div class="main_othersservice_content">
                                        <div class="col-sm-3">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4><span><i class="fa fa-clock-o"></i></span> <strong>BANTAL SOFA</strong></h4>
                                                </div>
                                                <div class="single_othersservice_content" align="center">
                                                     <img src="<?php echo base_url('assets/images/sarung-bantal.jpg')?>" style="max-height: 300px; height: 300px"/>
                                                    <p>Bantal Sofa made by banboo.id</p>
                                                    <a href="<?php echo base_url('index.php/product/readBantal/btls') ?>" class="btn btn-success btn-outline" style="font-size: 15px; padding-top: 10px">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-clock-o"></i></span> <strong>BANTAL LEHER</strong></h4>
                                                </div>
                                                <div class="single_othersservice_content" align="center">
                                                    <img src="<?php echo base_url('assets/images/bantal-leher.jpg')?>" style="max-height: 300px; height: 300px"/>
                                                    <p>Bantal Leher made by banboo.id</p>
                                                    <a href="<?php echo base_url('index.php/product/readBantal/btll') ?>" class="btn btn-success btn-outline" style="font-size: 15px; padding-top: 10px">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-clock-o"></i></span> <strong>SLAYER</strong></h4>
                                                </div>
                                                <div class="single_othersservice_content" align="center">
                                                     <img src="<?php echo base_url('assets/images/grande.jpg')?>" style="max-height: 300px; height: 300px"/>
                                                    <p>Slayer made by banboo.id</p>
                                                     <a href="<?php echo base_url('index.php/product/readBantal/sly') ?>" class="btn btn-success btn-outline" style="font-size: 15px; padding-top: 10px">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon" >
                                                    <h4> <span><i class="fa fa-clock-o"></i></span> <strong>BUFF</strong></h4>
                                                </div>
                                                <div class="single_othersservice_content" align="center">
                                                     <img src="<?php echo base_url('assets/images/lbag-masker.jpg')?>" style="max-height: 300px; height: 300px"/>
                                                    <p>Buff made by banboo.id.</p>
                                                     <a href="<?php echo base_url('index.php/product/readBantal/buff') ?>" class="btn btn-success btn-outline" style="font-size: 15px; padding-top: 10px">Read More</a>
                                                </div>
                                            </div>
                                        </div>


                                        
                                    </div>
                                </div> 
                            </div>
                        </div
                                            </div>
                </div>
            </section>


            

            

<section id="testimonial" class="testimonial">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="main_testimonial sections text-center">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    <div class="main_teastimonial_slider text-center">

                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>Siapa yang tak kenal Taman Nasional Ujung Kulon? Areal seluas sekitar 122.956 hektar ini menjadi taman nasional pertama yang diresmikan oleh pemerintah Indonesia pada tahun 1992, setelah ditetapkan sebagai Warisan Dunia oleh UNESCO pada 1991. Tempat ini merupakan habitat asli sekaligus sanctuary bagi satwa badak Jawa yang jumlahnya tinggal puluhan ekor saja.</p>
                                                    <div class="single_test_author">
                                                        <h4><strong>BANBOO.ID</strong></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>Indonesia punya hamparan savana terluas di Pulau Jawa yakni Taman Nasional Baluran di Jawa Timur.
                                                    Taman Nasional Baluran merupakan perwakilan ekosistem hutan kering di Pulau Jawa, terdiri dari tipe vegetasi savana, hutan mangrove, hutan musim, hutan pantai, hutan pegunungan bawah, hutan rawa, dan hutan yang selalu hijau sepanjang tahun. Berikut adalah hewan hewan yang ada di Taman Nasional Baluran</p>
                                                    <div class="single_test_author">
                                                        <h4><strong>BANBOO.ID</strong></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text" style="font-color: black">
                                            <h3 class=" wow fadeInRight" data-wow-duration="1s"><strong>CONTACT : </strong></h3>
                                            <h5 class=" wow fadeInRight" data-wow-duration="1s"><strong>Ade Nobi Miranto (line : adenobim)</strong></h5>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-xs-12">
                                        <div class="flowus">
                                            <a href="https://www.facebook.com/banboo.id"><i class="fa fa-facebook"></i></a>
                                            <a href="https://www.twitter.com/banboo.id"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                            <p>Made with <i class="fa fa-heart"></i> by <a href="https://www.instagram.com/banboo.id/">Banboo.id</a>2017. All Rights Reserved</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="<?php echo base_url('assets/js/vendor/jquery-1.11.2.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js')?>"></script>

        <script src="<?php echo base_url('assets/js/jquery.magnific-popup.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.mixitup.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.masonry.min.js')?>"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="<?php echo base_url('assets/js/gmaps.min.js')?>"></script>


        <script>

                                            function showmap() {
                                                var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(-34.397, 150.644),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                            }
        </script>

        <script src="<?php echo base_url('assets/js/plugins.js')?>"></script>
        <script src="<?php echo base_url('assets/js/main.js')?>"></script>
        
        <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
    </body>
</html>
