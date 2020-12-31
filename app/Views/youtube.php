<div style="padding: 25px; background-color: #dee0e3;">
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
    <?php
        $count = 1;
        foreach ($videos as $videosObj) {
            ?>
                <div class="col-md-3" style="padding: 10px; border: 1px solid blue; border-radius: 10px; margin-top: 10px;">
                    <iframe height="250" src="<?php echo $videosObj['link']; ?>" allowfullscreen></iframe>
                    <div class="row">
                        <div class="col-md-8">
                            <?php echo '<h5 class="text-left">'.$videosObj['title'].'</h5>'; ?>
                        </div>
                        <div class="col-md-4">
                            <?php echo '<h5 class="text-right">'.$videosObj['postedOn'].'</h5>'; ?>
                        </div>
                    </div>
                </div>
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
    </div>
</div>