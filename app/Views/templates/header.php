<!DOCTYPE html>
<html lang="en">
  
<!--  13:28  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php
            foreach($setting as $settingObj){
                if($settingObj['tkey'] == 'title'){
                    echo $settingObj['value'];
                    break;
                }
            }
        ?>
    </title>

    <!-- Css Files -->
    <link href="<?php echo base_url().'/design/css/bootstrap.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/font-awesome.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/flaticon.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/slick-slider.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/prettyphoto.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/build/mediaelementplayer.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/style.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/color.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/color-two.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/color-three.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/color-four.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/design/css/responsive.css'; ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        
        <!--// Header \\-->
		<header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
			<div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-language">
                                <ul class="wm-stripinfo">
                                    <li><i class="wmicon-location"></i> 
                                        <?php
                                            foreach($setting as $settingObj){
                                                if($settingObj['tkey'] == 'address'){
                                                    echo $settingObj['value'];
                                                    break;
                                                }
                                            }
                                        ?>
                                    </li>
                                    <li><i class="wmicon-technology4"></i>
                                        <?php
                                            foreach($setting as $settingObj){
                                                if($settingObj['tkey'] == 'phone'){
                                                    echo $settingObj['value'];
                                                    break;
                                                }
                                            }
                                        ?>
                                    </li>
                                    <li><i class="wmicon-clock2"></i>
                                        <?php
                                            foreach($setting as $settingObj){
                                                if($settingObj['tkey'] == 'classTime'){
                                                    echo $settingObj['value'];
                                                    break;
                                                }
                                            }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <ul class="wm-adminuser-section">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img src="<?php echo base_url().'/design/images/logo-1.png'; ?>" alt=""></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">courses</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="courses-grid.html">Courses Grid</a></li>
                                            <li><a href="courses-list.html">Courses List</a></li>
                                            <li><a href="courses-detail.html">Courses Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">event</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="event-grid.html">Event Grid</a></li>
                                            <li><a href="event-detail.html">Event Detail</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="#">Dashboard</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="dashboard-courses.html">Courses</a></li>
                                            <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                            <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                            <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                            <li><a href="student-dashboard-settings.html">Settings</a></li>
                                            <li><a href="student-dashboard-statement.html">Statement</a></li>
                                        </ul>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Pages</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Link 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-list.html">Blog List</a></li>
                                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                                        <li><a href="faq-page.html">Faq Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 2</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="ourprofessors.html">Our Professors</a></li>
                                                        <li><a href="our-professsors-detail.html">Our Professsors Detail</a></li>
                                                        <li><a href="typography-elements.html">Typography Elements</a></li>
                                                        <li><a href="courses-list.html">Courses List</a></li>
                                                        <li><a href="courses-grid.html">Courses Grid</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 3</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="courses-detail.html">Courses Detail</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="<?php echo base_url().'/design/extra-images/megamenu-frame.jpg' ?>" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Shop</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-single-product.html">Shop Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Contact</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Links 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Artists text</h4>
                                                    <div class="wm-mega-text">
                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>sub category widget</h4>
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="<?php echo base_url().'/design/extra-images/mega-menuadd.jpg'; ?>" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                  </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <a href="#" class="wm-header-btn">get started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

		</header>
		<!--// Header \\-->