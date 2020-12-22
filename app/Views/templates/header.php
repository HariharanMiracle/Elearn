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

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

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
                                    <?php
                                        if($_SESSION['isLoggedIn'] == 1){
                                            ?><a href="<?php echo base_url('User/logout'); ?>">logout</a><?php
                                        }
                                        else{
                                            ?><a href="#" data-toggle="modal" data-target="#ModalLogin">login</a><?php
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

    <br/>
    <!-- <br/> -->
    <!-- error message start -->
    <?php
        if($_SESSION['errLoginMsg'] != ""){
            ?>
                <div id="loginError" class="bg-danger row" style="border: 1px solid red; margin-top: 33px;">
                    <div class="col-md-10" style="margin-top: 7px;">
                        <h5 class="text-danger">&nbsp;&nbsp;&nbsp;Error: <?php echo $_SESSION['errLoginMsg']; ?></h5>
                    </div>
                    <div class="col-md-2" style="margin-top: 7px;">
                        <h5 onclick="closeLoginError()" class="close">x</h5>
                    </div>
                </div>      
            <?php
        }
    ?>
    <!-- error message end -->

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
                                            <li class="active"><a class="active-link" href="<?php echo base_url(); ?>">Home</a></li>
                                            <li><a href="<?php echo base_url('/Home/books'); ?>">E-Books</a></li>
                                            <li><a href="<?php echo base_url('/Home/youtube'); ?>">Youtube</a></li>
                                            <li><a href="<?php echo base_url('/Home/course'); ?>">Courses</a></li>
                                            <li><a href="<?php echo base_url('/Home/contact'); ?>">Contact</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "books"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                            <li class="active"><a class="active-link" href="<?php echo base_url('/Home/books'); ?>">E-Books</a></li>
                                            <li><a href="<?php echo base_url('/Home/youtube'); ?>">Youtube</a></li>
                                            <li><a href="<?php echo base_url('/Home/course'); ?>">Courses</a></li>
                                            <li><a href="<?php echo base_url('/Home/contact'); ?>">Contact</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "youtube"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                            <li><a href="<?php echo base_url('/Home/books'); ?>">E-Books</a></li>
                                            <li class="active"><a class="active-link" href="<?php echo base_url('/Home/youtube'); ?>">Youtube</a></li>
                                            <li><a href="<?php echo base_url('/Home/course'); ?>">Courses</a></li>
                                            <li><a href="<?php echo base_url('/Home/contact'); ?>">Contact</a></li>
                                        </ul>                                      
                                      <?php
                                    }
                                    else if($nav == "course"){
                                      ?>
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                            <li><a href="<?php echo base_url('/Home/books'); ?>">E-Books</a></li>
                                            <li><a href="<?php echo base_url('/Home/youtube'); ?>">Youtube</a></li>
                                            <li class="active"><a class="active-link" href="<?php echo base_url('/Home/course'); ?>">Courses</a></li>
                                            <li><a href="<?php echo base_url('/Home/contact'); ?>">Contact</a></li>
                                        </ul>
                                      <?php
                                    }
                                    else {
                                      ?>
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                            <li><a href="<?php echo base_url('/Home/books'); ?>">E-Books</a></li>
                                            <li><a href="<?php echo base_url('/Home/youtube'); ?>">Youtube</a></li>
                                            <li><a href="<?php echo base_url('/Home/course'); ?>">Courses</a></li>
                                            <li class="active"><a class="active-link"    href="<?php echo base_url('/Home/contact'); ?>">Contact</a></li>
                                        </ul>
                                      <?php
                                    }
                                  ?>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <?php
                                if($_SESSION['isLoggedIn'] == 1){
                                    ?><a href="#" class="wm-header-btn">My Profile</a><?php
                                }
                                else{
                                    ?><a href="<?php echo base_url('User/register') ?>" class="wm-header-btn">Register</a><?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

		</header>
		<!--// Header \\-->