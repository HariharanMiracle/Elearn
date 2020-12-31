<br/>
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Article details</h3>
        </div>
    </div>
    <h5><b>Article name:</b> <?php echo $articles['title']; ?></h5>
    <h5><b>Pdf:</b> <?php echo '<a class="text-info" href="'.base_url().'/uploads/pdf/articles/'.$articles['pdf'].'">'.$articles['title'].'</a>'; ?></h5>
    <br/>
    <div class="row">
        <div class="col-12 text-center">
            <h3>Tags details</h3>
        </div>
    </div>
    <div class="row">
        <?php
            foreach($tag_article as $tag_articleObj){
                if($tag_articleObj['articleId'] == $articles['id']){
                    foreach($tags as $tagsObj){
                        if($tagsObj['id'] == $tag_articleObj['tagId']){
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