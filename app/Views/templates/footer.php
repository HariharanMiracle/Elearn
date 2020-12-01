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