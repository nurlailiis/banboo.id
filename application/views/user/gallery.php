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


        <section id="home" class="home_gallery">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Gallery Banboo.id</h1>
                                            <p>Edisi Taman Nasional Ujung Kulon</p>
                                            <div class="home_btn">
                                                <a href="<?php echo base_url('index.php/user/gallery');?>" class="btn btn-primary" style="font-size: 15px">READ MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Gallery Banboo.id</h1>
                                            <p>Edisi Taman Nasional Baluran</p>
                                            <div class="home_btn">
                                                <a href="<?php echo base_url('index.php/user/gallery');?>" class="btn btn-primary" style="font-size: 15px">READ MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_team sections">
                                <div class="row">
                                    <div class="head_title">
                                      <h3>  O OUR GALLERY</h3>
                                      <div class="separator"></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/kucingbakau.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>KUCING BAKAU</h4>
                                                <p>Kucing bakau <i>(Prionailurus viverrinus)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Kucing_bakau"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/ayamhutanmerah.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>AYAM HUTAN MERAH</h4>
                                                <p>Ayam Hutan Merah <i>(Gallus gallus )</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Ayam-hutan_merah"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/bantengjawa.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>BANTENG JAWA</h4>
                                                <p>Banteng Jawa <i>(Bos Javanicus)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Banteng"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/merakjawa.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>MERAK JAWA</h4>
                                                <p>Merak Jawa <i>(Pavo muticus)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Merak_hijau"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/anjinghutan.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>ANJING HUTAN</h4>
                                                <p>Anjing Hutan <i>(Cuon alpinus)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Ajak"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/owajawa.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>OWA JAWA</h4>
                                                <p>Owa Jawa <i>(Hylobates moloch)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Owa_jawa"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/badakbercula.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>BADAK BERCULA</h4>
                                                <p>Badak Bercula <i>(Rhinoceros sondaicus)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Badak_jawa"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="<?php echo base_url('assets/images/rusa.jpg')?>" style="max-height: 300px; height: 300px" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>RUSA</h4>
                                                <p>Rusa <i>(Rusa timorensis)</i></p>
                                                <div class="team_overlay_socail">
                                                    <a href="https://id.wikipedia.org/wiki/Rusa_jawa"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.instagram.com/banboo.id/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End of main team contant -->
                        </div>
                    </div><!-- End of row -->
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
