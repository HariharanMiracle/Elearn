<main class="container">
    <h3>Add Tags</h3>
	<div class="container">
		<form action="<?php echo base_url('Tags/store');?>" name="tags_create" id="tags_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tag name <span id="name_err" style="color:red;">*</span></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter tag name" required>
            </div>
                            
            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>