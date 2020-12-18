<main class="container">
    <h3>Edit Course</h3>
	<div class="container">
		<form action="<?php echo base_url('Course/update');?>" name="course_edit" id="course_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $course['id']; ?>" required>
            <div class="form-group">
                <label for="name">Name <span id="name_err" style="color:red;">*</span></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name" value="<?php echo $course['name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Description <span id="description_err" style="color:red;">*</span></label>
                <textarea id="editor" name="description"><?php echo $course['description']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="image_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="container">
                <h5 class="text-danger">If you want to change the picture upload another one...</h5>
                <img src="<?php echo base_url().'/uploads/images/course/'.$course['image']; ?>" height="400" width="400"/>
            </div>
            <br/>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
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