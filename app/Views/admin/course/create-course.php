<main class="container">
    <h3>Add Course</h3>
	<div class="container">
		<form action="<?php echo base_url('Course/store');?>" name="course_create" id="course_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name <span id="name_err" style="color:red;">*</span></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name" required>
            </div>

            <div class="form-group">
                <label for="description">Description <span id="description_err" style="color:red;">*</span></label>
                <textarea id="editor" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="image_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>
<script type="text/javascript">
      new FroalaEditor('textarea#froala-editor')

      function () {
        // set the startup mode
        CKEDITOR.config.startupMode = 'source';
        CKEDITOR.replace('editor');
      }
</script>