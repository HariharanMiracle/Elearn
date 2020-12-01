		<!--// Footer \\-->
		<footer id="wm-footer" class="wm-footer-one">
            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-4">
                            <a href="index-2.html" class="wm-footer-logo"><img src="<?php echo base_url().'/design/images/logo-1.png'; ?>" alt=""></a>
                            <ul>
                                <li><i class="wm-color wmicon-pin"></i>
                                <?php
                                    foreach($setting as $settingObj){
                                        if($settingObj['tkey'] == 'address'){
                                            echo $settingObj['value'];
                                            break;
                                        }
                                    }
                                ?>    
                                </li>
                                <li><i class="wm-color wmicon-phone"></i>
                                <?php
                                    foreach($setting as $settingObj){
                                        if($settingObj['tkey'] == 'phone'){
                                            echo $settingObj['value'];
                                            break;
                                        }
                                    }
                                ?>
                                <br>
                                <?php
                                    foreach($setting as $settingObj){
                                        if($settingObj['tkey'] == 'phone1'){
                                            echo $settingObj['value'];
                                            break;
                                        }
                                    }
                                ?> 
                                </li>
                                <li><i class="wm-color wmicon-letter"></i>
                                <a href="
                                <?php
                                        foreach($setting as $settingObj){
                                            if($settingObj['tkey'] == 'email'){
                                                echo $settingObj['value'];
                                                break;
                                            }
                                        }
                                    ?> 
                                ">
                                    <?php
                                        foreach($setting as $settingObj){
                                            if($settingObj['tkey'] == 'text-email'){
                                                echo $settingObj['value'];
                                                break;
                                            }
                                        }
                                    ?>  
                                </a>
                                </li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_twitter col-md-5">
                            <div class="wm-footer-widget-title"> <h5><i class="wmicon-social2"></i> @enrollcampus</h5> </div>
                            <ul>
                                <li>
                                    <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_gallery col-md-3">
                            <div class="wm-footer-widget-title"> <h5>Our Instructors</h5> </div>
                            <ul class="gallery">
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-1.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-1.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-2.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-2.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-3.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-3.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-4.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-4.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-5.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-5.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-6.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-6.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-7.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-7.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-8.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-8.jpg'; ?>" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo base_url().'/design/extra-images/widget-galleryfull-9.jpg'; ?>"><img src="<?php echo base_url().'/design/extra-images/widget-gallery-9.jpg'; ?>" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="text-center text-white">Copyright <?php echo date('Y'); ?>
                            &copy;
                            <a class="text-white" target="_blank" href="#">
                            <?php
                                foreach($setting as $settingObj){
                                    if($settingObj['tkey'] == 'company'){
                                        echo $settingObj['value'];
                                        break;
                                    }
                                }
                            ?>
                            </a>. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

		</footer>
		<!--// Footer \\-->

	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form wm-login-popup">
                <span class="wm-color">Login to Your Account</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input id="password" type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                        <li> <input type="submit" value="Sign In"> </li>
                    </ul>
                </form>
                <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
                <span class="wm-color">create Your Account today</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Create Account"> </li>
                    </ul>
                </form>
                <span class="wm-color">or signup with your socials:</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form">
                <span class="wm-color">Search Your KeyWord</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Search"> </li>
                    </ul>
                </form>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalSearch Box -->

	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="<?php echo base_url().'/design/script/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'/design/script/modernizr.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/bootstrap.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/jquery.prettyphoto.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/jquery.countdown.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/fitvideo.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/skills.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/slick.slider.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/waypoints-min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/build/mediaelement-and-player.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/isotope.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/jquery.nicescroll.min.js'; ?>"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?php echo base_url().'/design/script/functions.js'; ?>"></script>

  </body>

<!--  15:20  -->
</html>