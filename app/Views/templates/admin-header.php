<!DOCTYPE html>
<html lang="en">
<?php session()->start(); ?>  
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
                                <li><h6 class="text-white">ADMIN PANEL</h6></li>
                                <li>
                                    <a href="#">logout</a>
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
                                  <?php
                                    if($nav == "home"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a class="active-link" href="#">Home</a></li>
                                            <li><a href="#">User</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Event</a></li>
                                            <li><a href="#">Notice</a></li>
                                            <li><a href="#">Tags</a></li>
                                            <li><a href="#">E-Books</a></li>
                                            <li><a href="#">Youtube</a></li>
                                            <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "user"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Home</a></li>
                                            <li class="active"><a class="active-link" href="#">User</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Event</a></li>
                                            <li><a href="#">Notice</a></li>
                                            <li><a href="#">Tags</a></li>
                                            <li><a href="#">E-Books</a></li>
                                            <li><a href="#">Youtube</a></li>
                                            <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "news"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li class="active"><a class="active-link" href="#">News</a></li>
                                          <li><a href="#">Event</a></li>
                                          <li><a href="#">Notice</a></li>
                                          <li><a href="#">Tags</a></li>
                                          <li><a href="#">E-Books</a></li>
                                          <li><a href="#">Youtube</a></li>
                                          <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "event"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li><a href="#">News</a></li>
                                          <li class="active"><a class="active-link" href="#">Event</a></li>
                                          <li><a href="#">Notice</a></li>
                                          <li><a href="#">Tags</a></li>
                                          <li><a href="#">E-Books</a></li>
                                          <li><a href="#">Youtube</a></li>
                                          <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "notice"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li><a href="#">News</a></li>
                                          <li><a href="#">Event</a></li>
                                          <li class="active"><a class="active-link" href="#">Notice</a></li>
                                          <li><a href="#">Tags</a></li>
                                          <li><a href="#">E-Books</a></li>
                                          <li><a href="#">Youtube</a></li>
                                          <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "tags"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li><a href="#">News</a></li>
                                          <li><a href="#">Event</a></li>
                                          <li><a href="#">Notice</a></li>
                                          <li class="active"><a class="active-link" href="#">Tags</a></li>
                                          <li><a href="#">E-Books</a></li>
                                          <li><a href="#">Youtube</a></li>
                                          <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "ebooks"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li><a href="#">News</a></li>
                                          <li><a href="#">Event</a></li>
                                          <li><a href="#">Notice</a></li>
                                          <li><a href="#">Tags</a></li>
                                          <li class="active"><a class="active-link" href="#">E-Books</a></li>
                                          <li><a href="#">Youtube</a></li>
                                          <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "youtube"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li><a href="#">News</a></li>
                                          <li><a href="#">Event</a></li>
                                          <li><a href="#">Notice</a></li>
                                          <li><a href="#">Tags</a></li>
                                          <li><a href="#">E-Books</a></li>
                                          <li class="active"><a class="active-link" href="#">Youtube</a></li>
                                          <li><a href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else {
                                      ?>
                                        <ul class="nav navbar-nav">
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">User</a></li>
                                          <li><a href="#">News</a></li>
                                          <li><a href="#">Event</a></li>
                                          <li><a href="#">Notice</a></li>
                                          <li><a href="#">Tags</a></li>
                                          <li><a href="#">E-Books</a></li>
                                          <li><a href="#">Youtube</a></li>
                                          <li class="active"><a class="active-link" href="#">Courses</a></li>
                                        </ul>                                      
                                      <?php
                                    }                                                                            
                                  ?>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

		</header>
		<!--// Header \\-->