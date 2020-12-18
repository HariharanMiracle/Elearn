<main class="container">
    <h3>Add News</h3>
	<div class="container">
		<form action="<?php echo base_url('News/store');?>" name="news_create" id="news_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
                <div name="description" id="editor"></div>
            </div>

            <div class="form-group">
                <label for="link">Link <span id="link_err" style="color:red;">*</span></label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Please enter link" required>
            </div>

            <div class="form-group">
                <label for="newsDate">News Date <span id="newsDate_err" style="color:red;">*</span></label>
                <input type="date" name="newsDate" class="form-control" id="newsDate" required>
            </div>
            
            <div class="form-group">
                <label for="newsTime">News Time <span id="eventTime_err" style="color:red;">*</span></label>
                <input type="time" name="newsTime" class="form-control" id="newsTime" required>
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