<main class="container">
	<h3>Edit Tags</h3>
	<div class="container">
		<form action="<?php echo base_url('Tags/update');?>" name="tags_edit" id="tags_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $tags['id']; ?>" required>
            <div class="form-group">
                <label for="name">Tags name<span id="name_err" style="color:red;">*</span></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter tags name" value="<?php echo $tags['name']; ?>" required>
            </div>
                            
            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
            </div> 
        </form>
	</div>
</main>
</body>
</html>