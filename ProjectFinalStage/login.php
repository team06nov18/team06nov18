<?php
//must appear BEFORE the <html> tag
session_start();
include_once('confige.php');

if (isset($_SESSION['valid_user'])) {
    header("location: member_only.php");
}
//make the database connection
$conn  = db_connect();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);

    //make a query to check if user login successfully
    $sql = "select * from users where email='$email' and password='$password'";
    $result = $conn -> query($sql);
    $numOfRows = $result -> num_rows;
    $row = $result -> fetch_assoc();
    if ($numOfRows == 1) {
        $_SESSION['valid_user'] = $email;
        //get the first word of the name and uppercase the first letter
        $tempStr = trim($row["name"]);
        $tempArr = explode(' ',$tempStr);
        $_SESSION['name'] = ucwords($tempArr[0]);
        header("location: member_only.php");
    }else {
        $error = 'Your Login Name or Password is invalid';
    }
}
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
<body>
	<div class="feedback">
	<div class="wthree_head_section">
      <h3 class="w3l_header">Login<span>Form</span></h3>


      
<form class="form-w3ls" action="#" method="post">
<h1 style="text-align: center;">Login</h1>
            <p style="text-align: center;">Please enter your email and password</p>
            <div class="row">
            	<div class="col">
                	<label for="email">Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Email';}" required="required" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="password">Password:</label>
                    <input type="password" id="password" name="password"
                           size="20" maxlength="20" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required" />
                </div>
           	</div>
			<div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input class="sign-in" type="submit" id="submit" value="Submit" />
                    <input class="sign-in"  type="reset" id="reset" value="Clear" />
                    <?php
                    if(isset($error)) {
                        echo "<p style=\"color: red;\">$error</p>";
                        unset($error);
                    }
                    ?>
                </div>
            </div>            
        </div>
        </form>
    </div>

</body>
</html>
<?php include('footer.php'); ?>
