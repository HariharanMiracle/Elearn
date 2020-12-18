<main class="container">
    <h3>Edit Notice</h3>
	<div class="container">
		<form action="<?php echo base_url('Notice/update');?>" name="notice_edit" id="notice_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $notice['id']; ?>" required>

            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" value="<?php echo $notice['title']; ?>" required>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="image_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="container">
                <h5 class="text-danger">If you want to change the picture upload another one...</h5>
                <img src="<?php echo base_url().'/uploads/images/notice/'.$notice['image']; ?>" height="400" width="400"/>
            </div>
            <br/>

            <div class="form-group">
                <label for="description">Description <span id="description_err" style="color:red;">*</span></label>
                <textarea name="description" class="form-control" id="description" placeholder="Please enter description" required onkeyup="countChar(this)"><?php echo $notice['description']; ?></textarea>
                <span id="charNum" class="text-danger">5000 characters</span>
            </div>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
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