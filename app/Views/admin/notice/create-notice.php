<main class="container">
    <h3>Add Notice</h3>
	<div class="container">
		<form action="<?php echo base_url('Notice/store');?>" name="notice_create" id="notice_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" required>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="image_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>

            <div class="form-group">
                <label for="description">Description <span id="description_err" style="color:red;">*</span></label>
                <textarea name="description" class="form-control" id="description" placeholder="Please enter description" required onkeyup="countChar(this)"></textarea>
                <span id="charNum" class="text-danger">5000 characters</span>
            </div>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>
<script type="text/javascript">
      function countChar(val) {
        var len = val.value.length;
        if (len >= 5000) {
          val.value = val.value.substring(0, 5000);
        } else {
          $('#charNum').text(5000 - len + " characters");
        }
      };
</script>