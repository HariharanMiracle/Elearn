<div style="padding: 25px; background-color: #dee0e3;">
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
    </div>
    <br/>
    <div class="row">
    <?php
        $count = 1;
        foreach ($books as $booksObj) {
            if($count % 2 == 0){
                ?>
                    <div class="col-md-3 text-center" style="border: 1px solid blue; border-radius: 10px;">
                        <h5><?php echo $booksObj['title']; ?></h5>
                        <a href="<?php echo base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" class="btn btn-danger" download>Download</a>
                        <img src = "<?php echo base_url().'/uploads/images/1.png'; ?>" height="150px" width="150px"/>
                        <a href="http://flowpaper.com/flipbook/https://darktestdark.000webhostapp.com/CondoLiving.pdf" class="btn btn-success">Read Me!</a>
                    </div>
                <?php
            }
            else{
                ?>
                    <div class="col-md-3 text-center" style="border: 1px solid blue; border-radius: 10px;">
                        <h5><?php echo $booksObj['title']; ?></h5>
                        <a href="<?php echo base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" class="btn btn-danger" download>Download</a>
                        <img src = "<?php echo base_url().'/uploads/images/2.png'; ?>" height="150px" width="150px"/>
                        <a href="<?php echo 'http://flowpaper.com/flipbook/'.base_url().'/uploads/pdf/books/'.$booksObj['pdf']; ?>" class="btn btn-success">Read Me!</a>
                    </div>
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