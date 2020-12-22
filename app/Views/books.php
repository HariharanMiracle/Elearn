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
                                    ?>
                                        <input type="button" class="btn btn-primary" value="<?php echo $tagObj['name']; ?>">
                                    <?php
                                }
                                else{
                                    ?>
                                        <input type="button" class="btn btn-warning" value="<?php echo $tagObj['name']; ?>">
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