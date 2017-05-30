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
                                <!-- <div class="main_home_slider text-center"> -->
                                    <div class=" text-center">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms" align="center">
                                            <h1>SIGN UP</h1>
                                            <?php echo form_open_multipart('signup/new_user_registration'); ?>
                                                <fieldset>
                                                    <div class="form-group has-success" style="width:500px">
                                                        <input class="form-control" placeholder="Name" name="name" type="name" autofocus >
                                                    </div>
                                                    <div class="form-group has-success" style="width:500px">
                                                        <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                                    </div>
                                                    <div class="form-group has-success" style="width:500px">
                                                        <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                                                    </div>
                                                    <div class="form-group has-success" style="width:500px">
                                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <center><p>Profil Pic : </p><input placeholder="Gambar" name="gambar" type="file"></center>
                                                    </div>
                                                    <input style="width:200px" style="width: 100%" type="submit" value="SIGNUP" class="btn btn-success btn-outline" name="">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
<br>
<br>
<br>

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
