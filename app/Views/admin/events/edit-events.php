<main class="container">
    <h3>Edit Events</h3>
	<div class="container">
		<form action="<?php echo base_url('Events/update');?>" name="events_edit" id="events_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $events['id']; ?>" required>

            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" value="<?php echo $events['title']; ?>" required>
            </div>

            <div class="form-group">
                <label for="image">Image <span id="eventDate_err" style="color:red;">*</span></label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="container">
                <h5 class="text-danger">If you want to change the picture upload another one...</h5>
                <img src="<?php echo base_url().'/uploads/images/events/'.$events['image']; ?>" height="400" width="400"/>
            </div>
            <br/>

            <div class="form-group">
                <label for="link">Link <span id="link_err" style="color:red;"></span></label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Please enter link" value="<?php echo $events['link']; ?>" required>
            </div>

            <div class="form-group">
                <label for="eventDate">Event Date <span id="eventDate_err" style="color:red;">*</span></label>
                <p><?php echo $events['eventDate']; ?></p>
                <input type="date" name="eventDateX" class="form-control" id="eventDateX">
                <input type="hidden" name="eventDate" class="form-control" id="eventDate" value="<?php echo $events['eventDate']; ?>" required>
            </div>

            <div class="form-group">
                <label for="eventTime">Event Time <span id="eventTime_err" style="color:red;">*</span></label>
                <input type="time" name="eventTime" class="form-control" id="eventTime" value="<?php echo $events['eventTime']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="meetingId">Meeting Id <span id="meetingId_err" style="color:red;">*</span></label>
                <input type="text" name="meetingId" class="form-control" id="meetingId" value="<?php echo $events['meetingId']; ?>" placeholder="Please enter meeting id" required>
            </div>
            
            <div class="form-group">
                <label for="passcode">Passcode <span id="passcode_err" style="color:red;">*</span></label>
                <input type="text" name="passcode" class="form-control" id="passcode" value="<?php echo $events['passcode']; ?>" placeholder="Please enter passcode" required>
            </div>
            
            <div class="form-group">
                <label for="timeZone">Time Zone <span id="timeZone_err" style="color:red;">*</span></label>
                <input type="text" name="timeZone" class="form-control" id="timeZone" value="<?php echo $events['timeZone']; ?>" placeholder="Please enter time zone" required>
            </div>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
            </div> 
        </form>
	</div>
</main>