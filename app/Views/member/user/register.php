<br/>
<div class="container">
    <h2>register</h2>
    <span id="register_form_err" style="color:red;">*</span>
    <hr/>
    <!-- form begin -->
    <form action="<?php echo base_url('User/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8" onsubmit="return validateForm()">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Username <span id="username_err" style="color:red;"><?php echo $userErrMsg; ?>*</span></label>
                        <input type="text" name="username" id="username" class="form-control" required> 
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email <span id="email_err" style="color:red;">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" required> 
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="passwordS">Password <span id="sp-password" style="color:red;">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required onkeyup="chkPassword()">
                        <br/>
                        <button class="btn-link" onclick="f_pasword()">Show password</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="repassword">Re-type Password <span id="sp-repassword" style="color:red;">*</span></label>
                        <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-type password" required onkeyup="chkRePassword()">
                        <br/>
                        <button class="btn-link" onclick="f_re_pasword()">Show Re-type password</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname">First name <span id="fname_err" style="color:red;">*</span></label>
                        <input type="text" name="fname" id="fname" class="form-control" required> 
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lname">Last name <span id="lname_err" style="color:red;">*</span></label>
                        <input type="text" name="lname" id="lname" class="form-control" required> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact">Contact <span id="contact_err" style="color:red;">*</span></label>
                        <input type="text" name="contact" id="contact" class="form-control" required onkeyup="ifContact(this.value)"> 
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob">Date of birth <span id="dob_err" style="color:red;">*</span></label>
                        <input type="date" name="dob" id="dob" class="form-control" required> 
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <input class="btn btn-primary" type = "submit" value = "Register" name = "submit"/>
                </div>
            </div>   
        </div>
    </form> 
    <!-- form end -->
</div>
<br/>

<script type="text/javascript">
    
    var passwordS = false;
    var repasswordS = false;
    var contactS = false;
    
    function ifContact(contact){
        var numbers = /^[0-9]+$/;

        if(contact.match(numbers)){
            if(contact.length == 10){
                document.getElementById("contact_err").innerHTML = "*";
                contactS = true;
            }
            else{
                document.getElementById("contact_err").innerHTML = "Contact should be 10 digit and numeric only";
                contactS = false;
            }
        }
        else{
            document.getElementById("contact_err").innerHTML = "Contact should be 10 digit and numeric only";
            contactS = false;
        }
    }

    function f_pasword(){
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        }
        else {
            x.type = "password";
        } 
    }

    function f_re_pasword(){
        var x = document.getElementById("repassword");
        if (x.type === "password") {
            x.type = "text";
        }
        else {
            x.type = "password";
        }
    }

    function chkPassword(){
        var password = document.getElementById("password").value;
        var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

        if(password.match(strongRegex)){
            document.getElementById("sp-password").innerHTML = "*";
            passwordS = true;
        }
        else{
            document.getElementById("sp-password").innerHTML = "must contain at least one digit, one upper case, one special symbol and minimum of 8 character";
            passwordS = false;
        }

        chkRePassword();
    }

    function chkRePassword(){
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;

        if(password == repassword){
            document.getElementById("sp-repassword").innerHTML = "*";
            repasswordS = true;
        }
        else{
            document.getElementById("sp-repassword").innerHTML = "Re-typed password doesn't match";
            repasswordS = false;
        }
    }

    function validateForm(){
        if(passwordS == true && repasswordS == true && contactS == true){
            document.getElementById("register_form_err").innerHTML = "";
            return true;
        }
        else{
            document.getElementById("register_form_err").innerHTML = "Fields invalid !!!";
            return false;
        }
    }

</script>