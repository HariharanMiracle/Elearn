<main class="container">
	<h3>Edit Vidoes</h3>
	<div class="container">
		<form action="<?php echo base_url('Videos/update');?>" name="videos_edit" id="videos_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $videos['id']; ?>" required>
            
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" value="<?php echo $videos['title']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="link">Link <span id="link_err" style="color:red;">Please enter the embeded link *</span></label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Please enter link" value="<?php echo $videos['link']; ?>" required>
            </div>
            
            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
            </div> 
        </form>
	</div>
</main>