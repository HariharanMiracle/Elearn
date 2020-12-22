<div style="padding: 25px; background-color: #dee0e3;">
    <div class="row" style="padding: 25px;">
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="col-12" style="margin-top: 30px;">
            <form action="<?php echo base_url('/Home/courseSearch'); ?>" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10"><input type="text" id="name" name="name" placeholder="Search" class="form-control"/></div>
                        <div class="col-md-2"><input type="submit" class="btn btn-info" value="Search"/></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
    <?php
        $count = 1;
        foreach ($course as $courseObj) {
            ?>
                <div class="col-md-3 text-center" style="border: 1px solid blue; border-radius: 10px;">
                    <h5><?php echo $courseObj['name']; ?></h5>
                    <img src = "<?php echo base_url().'/uploads/images/course/'.$courseObj['image']; ?>" height="150px" width="150px"/>
                    <p><?php echo $courseObj['description']; ?></p>
                </div>
            <?php        
            $count++;
        }
        if($count == 1){
            echo '<div class="col-md-12">';
                echo '<div class="alert alert-warning" role="alert">';
                    echo 'No Course Found!';
                echo '</div>';
            echo '</div>';
        }
    ?>
    </div>
</div>