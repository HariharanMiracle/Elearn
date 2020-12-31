<main class="container">
    <h3>Edit News</h3>
	<div class="container">
		<form action="<?php echo base_url('News/update');?>" name="news_edit" id="news_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $news['id']; ?>" required>

            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" value="<?php echo $news['title']; ?>" required>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="image_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="container">
                <h5 class="text-danger">If you want to change the picture upload another one...</h5>
                <img src="<?php echo base_url().'/uploads/images/news/'.$news['image']; ?>" height="400" width="400"/>
            </div>
            <br/>

            <div class="form-group">
                <label for="description">Description <span id="description_err" style="color:red;">*</span></label>
                <textarea id="editor" name="description"><?php echo $news['description']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link <span id="link_err" style="color:red;">*</span></label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Please enter link" value="<?php echo $news['link']; ?>" required>
            </div>

            <div class="form-group">
                <label for="newsDate">News Date <span id="newsDate_err" style="color:red;">*</span></label>
                <p><?php echo $news['newsDate']; ?></p>
                <input type="date" name="newsDateX" class="form-control" id="newsDateX">
                <input type="hidden" name="newsDate" class="form-control" id="newsDate" value="<?php echo $news['newsDate']; ?>" required>
            </div>

            <div class="form-group">
                <label for="newsTime">News Time <span id="eventTime_err" style="color:red;">*</span></label>
                <input type="time" name="newsTime" class="form-control" id="newsTime" value="<?php echo $news['newsTime']; ?>" required>
            </div>

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