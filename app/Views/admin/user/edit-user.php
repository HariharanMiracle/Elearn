<main class="container">
	<h3>Edit User</h3>
	<div class="container">
		<form action="<?php echo base_url('User/update');?>" name="user_edit" id="user_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $user['id']; ?>" required>
            
            <div class="form-group">
                <label for="password">Password <span id="password_err" style="color:red;">Keep it empty if you don't want to change.</span></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Please enter password">
            </div>

            <div class="form-group">
                <label for="email">Email <span id="email_err" style="color:red;">*</span></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Please enter email" value="<?php echo $user['email']; ?>" required>
            </div>

            <div class="form-group">
                <label for="fname">First name <span id="fname_err" style="color:red;">*</span></label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Please enter first name" value="<?php echo $user['fname']; ?>" required>
            </div>

            <div class="form-group">
                <label for="lname">Last name <span id="lname_err" style="color:red;">*</span></label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Please enter last name" value="<?php echo $user['lname']; ?>" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact <span id="contact_err" style="color:red;">*</span></label>
                <input type="text" name="contact" id="contact" class="form-control" value="<?php echo $user['contact']; ?>" required> 
            </div>

            <div class="form-group">
                <label for="privilege">Privilege <span id="privilege_err" style="color:red;">*</span></label>
                <select class="form-control" id="privilege" name="privilege">
                    <?php
                        if($user['privilege'] == "ADMIN"){
                            ?>
                                <option value="">choose an option...</option>
                                <option value="ADMIN" selected>ADMIN</option>
                                <option value="USER">USER</option>
                            <?php
                        }
                        else{
                            ?>
                                <option value="">choose an option...</option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER" selected>USER</option>
                            <?php
                        }
                    ?>                    
                </select>
            </div>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
            </div> 
        </form>
	</div>
</main>