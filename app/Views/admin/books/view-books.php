<br/>
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Book details</h3>
        </div>
    </div>
    <h5><b>Book name:</b> <?php echo $books['title']; ?></h5>
    <h5><b>Pdf:</b> <?php echo '<a class="text-info" href="'.base_url().'/uploads/pdf/books/'.$books['pdf'].'">'.$books['title'].'</a>'; ?></h5>
    <br/>
    <div class="row">
        <div class="col-12 text-center">
            <h3>Tags details</h3>
        </div>
    </div>
    <div class="row">
        <?php
            foreach($tag_book as $tag_bookObj){
                if($tag_bookObj['bookId'] == $books['id']){
                    foreach($tags as $tagsObj){
                        if($tagsObj['id'] == $tag_bookObj['tagId']){
                            ?>
                                <div class="col-md-3 bg-warning text-center" style="padding: 5px; border: 2px solid orange;">
                                    <?php echo '<h5>'.$tagsObj['name'].'</h5>' ?>
                                </div>
                            <?php
                        }
                    }
                }
            }
        ?>
    </div>
</div>
<br/>
<br/>
<br/>