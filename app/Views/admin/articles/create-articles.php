<main class="container">
    <h3>Add Articles</h3>
	<div class="container">
		<form action="<?php echo base_url('Articles/store');?>" name="tags_create" id="tags_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" required>
            </div>

            <div class="form-group">
                <label for="pdf">Pdf <span id="pdf_err" style="color:red;">*</span></label>
                <input type="file" name="pdf" class="form-control" id="pdf" required>
            </div>

            <br/>
            <div class="bg-info" style="padding: 25px;">
                <div class="row">
                    <div class="col-md-12 text-center"><h3>Assign tags</h3></div>
                </div>
                <hr/>
                <br/>
                <input type="hidden" value="" id="tags" name="tags"/>
                <div class="form-group text-center">
                    <?php
                        foreach($tags as $tagsObj){
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="button" id="btnAdd_<?php echo $tagsObj['id']; ?>" class="btn btn-success" value="ADD" style="border-radius: 100%" onclick="addTag(<?php echo $tagsObj['id']; ?>)"/>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="text-danger" id="tagText<?php echo $tagsObj['id']; ?>"><b><?php echo $tagsObj['name']; ?></b></h5>
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
            </div>
            <br/>
            
            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>

<script>
    function addTag(tagId){
        var tags = document.getElementById("tags").value;
        var tagsArr = tags.split(',');
        console.log(tagsArr);

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
        console.log(tagsArr);

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