<main class="container">
    <h3>Add Books</h3>
	<div class="container">
		<form action="<?php echo base_url('Books/store');?>" name="tags_create" id="tags_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" required>
            </div>

            <div class="form-group">
                <label for="pdf">Pdf <span id="pdf_err" style="color:red;">*</span></label>
                <input type="file" name="pdf" class="form-control" id="pdf" required>
            </div>
                            
            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>