<main class="container">
	<h3>Edit Articles</h3>
	<div class="container">
		<form action="<?php echo base_url('Articles/update');?>" name="articles_edit" id="articles_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $articles['id']; ?>" required>
            
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" value="<?php echo $articles['title']; ?>" required>
            </div>

            <div class="form-group">
                <label for="pdf">Pdf <span id="pdf_err" style="color:red;"> If you want to change the pdf please choose one... *</span></label>
                <input type="file" name="pdf" class="form-control" id="pdf">
            </div>

            <div class="text-info">
                <?php echo '<a href="'.base_url().'/uploads/pdf/articles/'.$articles['pdf'].'">'.$articles['title'].'</a>'; ?> 
            </div>
            <br/>

            <div class="bg-info" style="padding: 25px;">
                <div class="row">
                    <div class="col-md-12 text-center"><h3>Assign tags</h3></div>
                </div>
                <hr/>
                <br/>
                <div class="form-group text-center">
                    <?php
                        $text = "";
                        $count = 1;
                        foreach($tags as $tagsObj){
                            $status = false;
                            foreach($tag_article as $tag_articleObj){
                                if($tag_articleObj['tagId'] == $tagsObj['id']){
                                    $status = true;
                                }
                            }
    
                            
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="button" id="btnAdd_<?php echo $tagsObj['id']; ?>" class="btn btn-success" value="ADD" style="border-radius: 100%" onclick="addTag(<?php echo $tagsObj['id']; ?>)"/>
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                            if($status == false){
                                                // Un Marked
                                                ?><h5 class="text-danger" id="tagText<?php echo $tagsObj['id']; ?>"><b><?php echo $tagsObj['name']; ?></b></h5><?php
                                            }
                                            else{
                                                // Marked
                                                if($count == 1){
                                                    $text = $tagsObj['id'];
                                                }
                                                else{
                                                    $text = $text.",".$tagsObj['id'];
                                                }
                                                ?><h5 class="text-success" id="tagText<?php echo $tagsObj['id']; ?>"><b><?php echo $tagsObj['name']; ?></b></h5><?php
                                                $count++;
                                            }                                        
                                        ?>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <input type="button" id="btnRemove_<?php echo $tagsObj['id']; ?>" class="btn btn-danger" value="REMOVE" style="border-radius: 100%" onclick="removeTag(<?php echo $tagsObj['id']; ?>)"/>
                                    </div>
                                </div>
                                <br/>
                            <?php
                        }
                    ?>
                </div>
                <input type="hidden" value="<?php echo $text; ?>" id="tags" name="tags"/>
            </div>
            <br/>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
            </div> 
        </form>
	</div>
</main>

<script>
    function addTag(tagId){
        var tags = document.getElementById("tags").value;
        var tagsArr = tags.split(',');

        var hasTag = false;
        // Check tag in the list
        for(var i = 0; i < tagsArr.length; i++){
            if(tagsArr[i] == tagId){
                hasTag = true;
            }
        }

        if(hasTag == false){
            // can add to the list
            if(tags == ""){
                tags = tagId;
            }
            else{
                tags = tags + "," + tagId;
            }
            var element = document.getElementById("tagText" + tagId);
            element.classList.remove("text-danger");
            element.classList.add("text-success");
            document.getElementById("tags").value = tags;
        }
        else{
            alert("Tag already added");
        }
    }

    function removeTag(tagId){
        var tags = document.getElementById("tags").value;
        var tagsArr = tags.split(',');

        var hasTag = false;
        var hasTwoTags = false;
        // Check tag in the list
        for(var i = 0; i < tagsArr.length; i++){
            if(tagsArr[i] == tagId){
                hasTag = true;
                break;
            }
        }

        // Check if there are 2 tags
        if(tagsArr.length == 2){
            hasTwoTags = true;
        }

        if(hasTag == true){
            // tag is there
            var res = "";
            for(var i = 0; i < tagsArr.length; i++){
                if(tagsArr[i] != tagId){
                    if(hasTwoTags == true){
                        res += tagsArr[i];
                    }
                    else{
                        res += tagsArr[i] + ",";
                    }
                }
            }
            var element = document.getElementById("tagText" + tagId);
            element.classList.remove("text-success");
            element.classList.add("text-danger");
            document.getElementById("tags").value = res;
        }
        else{
            // tag is not there
            alert('tag is not there in the list to remove');
        }
    }
</script>