<div style="padding: 25px;" class="bgstyle">
    <div class="row" style="padding: 25px;">
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="col-12" style="margin-top: 30px;">
            <form action="<?php echo base_url('/Home/youtubeSearch'); ?>" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10"><input type="text" id="title" name="title" placeholder="Search" class="form-control"/></div>
                        <div class="col-md-2"><input type="submit" class="btn btn-info" value="Search"/></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="wm-fancy-title"> <h2>Our <span>Videos</span></h2> </div>
    <!-- <div class="col-md-12"> -->
    <div class="wm-news wm-news-grid">
        <ul class="row">
        <?php
            $count = 1;
            foreach ($videos as $videosObj) {
                ?>
                <li class="col-md-3">
                    <figure>
                    <iframe height="250" src="<?php echo $videosObj['link']; ?>" allowfullscreen></iframe>
                            <figcaption class="wm-bgcolor">
                                <img src="<?php echo base_url().'/design/images/vclip.png'; ?>" height="50px" width="50px" alt="">
                                <div class="row">
                                        <?php echo '<h6 class="text-right">~ '.$videosObj['title'].'</h6>'; ?>
                                        <?php echo '<h6 class="text-right">~ '.$videosObj['postedOn'].'</h6>'; ?>
                                </div>
                            </figcaption>
                    </figure>
                </li>
                <?php
                $count++;
            }

            if($count == 1){
                echo '<div class="col-md-12">';
                    echo '<div class="alert alert-warning" role="alert">';
                        echo 'No Videos Found!';
                    echo '</div>';
                echo '</div>';
            }
        ?>
        </ul>
    </div>
    <!-- </div> -->
    </div>
</div>