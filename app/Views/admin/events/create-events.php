<main class="container">
    <h3>Add Events</h3>
	<div class="container">
		<form action="<?php echo base_url('Events/store');?>" name="videos_create" id="videos_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" required>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="image_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>

            <div class="form-group">
                <label for="link">Link <span id="link_err" style="color:red;">*</span></label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Please enter link" required>
            </div>

            <div class="form-group">
                <label for="eventDate">Event Date <span id="eventDate_err" style="color:red;">*</span></label>
                <input type="date" name="eventDate" class="form-control" id="eventDate" required>
            </div>
            
            <div class="form-group">
                <label for="eventTime">Event Time <span id="eventTime_err" style="color:red;">*</span></label>
                <input type="time" name="eventTime" class="form-control" id="eventTime" required>
            </div>
            
            <div class="form-group">
                <label for="meetingId">Meeting Id <span id="meetingId_err" style="color:red;">*</span></label>
                <input type="text" name="meetingId" class="form-control" id="meetingId" placeholder="Please enter meeting id"  required>
            </div>
            
            <div class="form-group">
                <label for="passcode">Passcode <span id="passcode_err" style="color:red;">*</span></label>
                <input type="text" name="passcode" class="form-control" id="passcode" placeholder="Please enter passcode"  required>
            </div>
            
            <div class="form-group">
                <label for="timeZone">Time Zone <span id="timeZone_err" style="color:red;">*</span></label>
                <input type="text" name="timeZone" class="form-control" id="timeZone" placeholder="Please enter time zone"  required>
            </div>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Save</button>
            </div> 
        </form>
	</div>
</main>