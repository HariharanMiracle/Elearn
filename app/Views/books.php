<div style="padding: 25px;" class="bgstyle">
    <div class="row" style="padding: 25px;">
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="col-12" style="margin-top: 30px;">
            <form action="<?php echo base_url('/Home/booksSearch'); ?>" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10"><input type="text" id="title" name="title" placeholder="Search" class="form-control"/></div>
                        <div class="col-md-2"><input type="submit" class="btn btn-info" value="Search"/></div>
                    </div>
                    <br/>
                    <div class="row">
                        <?php
                            $i = 1;
                            foreach($tags as $tagObj){
                                if($i % 2 == 0){
                                    // even primary
                                    ?>
                                        <input type="button" id="<?php echo 'tagBtn'.$tagObj['id']; ?>" class="btn btn-primary" value="<?php echo $tagObj['name']; ?>" onclick="addOrRemove(<?php echo $tagObj['id']; ?>)">
                                        <input type="hidden" name="<?php echo 'tagOpt'.$tagObj['id']; ?>" id="<?php echo 'tagOpt'.$tagObj['id']; ?>" value="0"/>
                                    <?php
                                }
                                else{
                                    // odd warning
                                    ?>
                                        <input type="button" id="<?php echo 'tagBtn'.$tagObj['id']; ?>" class="btn btn-warning" value="<?php echo $tagObj['name']; ?>" onclick="addOrRemove(<?php echo $tagObj['id']; ?>)">
                                        <input type="hidden" name="<?php echo 'tagOpt'.$tagObj['id']; ?>" id="<?php echo 'tagOpt'.$tagObj['id']; ?>" value="0"/>
                                    <?php
                                }
                                $i++;
                            }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    <br/>
    <div class="bgstyle">
        <div class="wm-fancy-title"> <h2>Our <span>Books</span></h2> </div>
        <div class="wm-courses wm-courses-popular">
            <ul class="row">
                <?php
                    $count = 1;
                    foreach ($books as $booksObj) {
                        if($count % 2 == 0){
                            ?>
                                <li class="col-md-3" style="margin-top: 10px;">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="<?php echo base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" download><img src="<?php echo base_url().'/design/extra-images/papular-courses-3.jpg'; ?>" alt=""> <span class="wm-popular-hover"> <small>Download</small> </span> </a>
                                            <figcaption>
                                            <img src = "<?php echo base_url().'/uploads/images/2.png'; ?>" height="60px" width="60px"/>
                                                <h6><?php echo $booksObj['title']; ?></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <a href="<?php echo 'http://flowpaper.com/flipbook/'.base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" class="btn btn-success" target="_blank">Read Me!</a>
                                        </div>
                                    </div>
                                </li>
                            <?php
                        }
                        else{
                            ?>
                                <li class="col-md-3" style="margin-top: 10px;">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="<?php echo base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" download><img src="<?php echo base_url().'/design/extra-images/papular-courses-4.jpg'; ?>" alt=""> <span class="wm-popular-hover"> <small>Download</small> </span> </a>
                                            <figcaption>
                                            <img src = "<?php echo base_url().'/uploads/images/1.png'; ?>" height="60px" width="60px"/>
                                                <h6><?php echo $booksObj['title']; ?></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <a href="<?php echo 'http://flowpaper.com/flipbook/'.base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" class="btn btn-success" target="_blank">Read Me!</a>
                                        </div>
                                    </div>
                                </li>
                            <?php
                        }
                        $count++;
                    }
                    if($count == 1){
                        echo '<div class="col-md-12">';
                            echo '<div class="alert alert-warning" role="alert">';
                                echo 'No Books Found!';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
</div>


<script>
    function addOrRemove(tagId){
        var tagOpt = document.getElementById('tagOpt'+tagId).value;
        var element = document.getElementById("tagBtn" + tagId);

        if(tagOpt == "0"){
            // not selected
            document.getElementById('tagOpt'+tagId).value = "1";
            var x = parseInt(tagId);
            if(x % 2 == 0){
                // even primary
                element.classList.remove("btn-primary");
                element.classList.add("btn-danger");
            }
            else{
                // odd warning
                element.classList.remove("btn-warning");
                element.classList.add("btn-danger");
            }
        }
        else{
            // selected
            document.getElementById('tagOpt'+tagId).value = "0";
            var x = parseInt(tagId);
            if(x % 2 == 0){
                // even primary
                element.classList.remove("btn-danger");
                element.classList.add("btn-primary");
            }
            else{
                // odd warning
                element.classList.remove("btn-danger");
                element.classList.add("btn-warning");
            }
        }
    }
</script>