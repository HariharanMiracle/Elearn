<main class="container">
    <h3>Add Vidoes</h3>
	<div class="container">
		<form action="<?php echo base_url('Videos/store');?>" name="videos_create" id="videos_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" required>
            </div>

            <div class="form-group">
                <label for="link">Link <span id="link_err" style="color:red;">Please enter the embeded link *</span></label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Please enter link" required>
            </div>
                            
            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>