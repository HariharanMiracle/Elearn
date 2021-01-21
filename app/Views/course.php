<div style="padding: 25px;" class="bgstyle">
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
    <div class="wm-fancy-title"> <h2>Popular <span>Courses</span></h2> </div>
    <div class="wm-courses wm-courses-popular">
    <ul class="row">
    <?php
        $count = 1;
        foreach ($course as $courseObj) {
            $desc1 = substr($courseObj['description'],0,100);
            $desc2 = substr($courseObj['description'],100,strlen($courseObj['description']));
            
            ?>
                <li class="col-md-3">
                    <div class="wm-courses-popular-wrap">
                        <div style="height:200px; position: relative;">
                            <div class="col-md-12 text-center" style="top:50%;  margin: 0; position: absolute; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                                <img src = "<?php echo base_url().'/uploads/images/course/'.$courseObj['image']; ?>" alt="" height="200px" width="200px"> 
                            </div>
                        </div>
                        <figure> <a href="#"><span class="wm-popular-hover"> <small><?php echo $courseObj['name']; ?></small> </span> </a>
                            <figcaption>
                                <h6><a href="#" disabled><h5><?php echo $courseObj['name']; ?></h5></a></h6>
                            </figcaption>
                        </figure>
                        <div class="wm-popular-courses-text readLessDiv" id="myDIV<?php echo $count; ?>">
                            <ul>
                                <?php
                                    echo '<td><p>'.$desc1.'<span id="dots'.$count.'">...</span><span id="more'.$count.'" class="more">'.$desc2.'</span></p><button onclick="myFunction('.$count.')" class="btn btn-primary" id="myBtn'.$count.'">Read more</button></td>';
                                ?>          
                            </ul>
                        </div>
                    </div>
                </li>
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
    </ul>
    </div>
    </div>
</div>

<style>
    .readLessDiv {
        height:250px;
    }

    .readMoreDiv {
        height:100%;
    }
</style>

<script>
    function myFunction(idVal) {
        var dots = document.getElementById("dots" + idVal);
        var moreText = document.getElementById("more" + idVal);
        var btnText = document.getElementById("myBtn" + idVal);

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
            var element = document.getElementById("myDIV" + idVal);
            element.classList.remove("readMoreDiv");
            element.classList.add("readLessDiv");

        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
            var element = document.getElementById("myDIV" + idVal);
            element.classList.remove("readLessDiv");
            element.classList.add("readMoreDiv");
        }
    }
</script>
<style>
    .more {display: none;}
</style>