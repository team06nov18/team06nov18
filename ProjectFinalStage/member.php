<?php

session_start();
include_once('confige.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<style type="text/css">
	.feedback{

		width: 90%;
		margin:3% 5%;
		display: inline-block;
		position: initial;
		border:1px solid black;
		height: auto;
		border-radius: 15px;
	}

.w3l_header {
    font-size: 3em;
    color: #262c38;
    letter-spacing: 1px;
    position: relative;
    font-weight: 600;
    text-align: center;
}
.w3l_header span {
    color: #545151;
    font-weight: 200;
}
.w3l_header:after {
    border-top: 2px solid blue;
    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
input[type="text"], input[type="password"], input[type="text"], input[type="email"], input[type="password"],textarea {
	padding: 10px;
    width: 100%;
    border-bottom: 2px solid #a0da4f;
    border-top: none;
    border-left: none;
    border-right: none;
    color: #212121;
    text-align: left;
    outline: none;
    letter-spacing: 1px;
    font-size: 16px;
    margin-top: 1em;
    margin-bottom: 2em;
    font-weight: 600;
    font-family: 'Poiret One', cursive;
    background: none;
}
input[type="text"]:focus,textarea:focus, input[type="password"]:focus{
	background-color:#e5f3d1;
	border-color:r#a0da4f;
}
.form-w3ls {
    background: transparent;
    padding: 40px 50px;
    width: 50%;
    margin: 5% auto;
    border:6px double #212121;
    border-radius: 20% 0 20% 0;
}
label {
    font-size: 16px;
    font-weight: 500;
    color: #212121;
    letter-spacing: 1px;
    text-transform: uppercase;
}




.sign-in {
	font-size: 20px;
	font-weight: 600;
	text-transform: uppercase;
	width: 100%;
	cursor: pointer;
	letter-spacing: 1px;
	padding: 10px;
	margin-top: 30px;
	border: none;
	outline: none;
	color: #212121;
	background-color: #a0da4f;
	font-family: 'Sansita', sans-serif;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
}
.sign-in:hover {
	background-color: #84bf31;
	font-family: 'Sansita', sans-serif;
	
	color: #000000;
}

</style>
<?php include('header.php'); ?>
<body onLoad="run_first()">
<div class="clearfix"></div>

<div class="feedback">
	<div class="wthree_head_section">
      <h3 class="w3l_header">Membership<span>Form</span></h3>
      
</div>
      
<form class="form-w3ls" action="member_process.php" method="post">
	
            <h2 style="text-align: center;">Please enter your profile</h2>
            <p style="text-align: center;"><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="name">* Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50"placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required="required"  />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">* Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" placeholder="User Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Email';}" required="required"  />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="password">* Password:</label>
                    <input type="password" id="password" name="password" size="20" maxlength="20" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required"  />
                    <span id="pwd_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="rePassword">* Re-try:</label>
                    <input type="password" id="rePassword" size="20" maxlength="20"
                  	placeholder="Re-Type Password"             onChange="checkRePassword(document)" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="zip">* Postcode:</label>
                    <input type="text" id="zip" name="zip" size="10" maxlength="10" placeholder="4 digits"
                               onChange="checkZIPCode(document)"  />
                    <span class="error_msg" id="zip_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input class="sign-in" type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />
                    <input class="sign-in" type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
                </div>
            </div>
        </div>
        </form>
    </div>
<div class="clearfix"></div>


</body>
</html>
<?php include('footer.php'); ?>
