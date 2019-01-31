<?php
//must appear BEFORE the <html> tag
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
.w3l_header p{

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
p{
    text-align: center;
}
</style>
<?php include('header.php'); ?>
<body onLoad="run_first()">
<?php
if(isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['zip'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);
    $postcode = $conn -> real_escape_string($_POST['zip']);
    //create an insert query
    $sql = "insert into users (name, email, password, postcode) 
			VALUES ('$name', '$email', '$password', '$postcode')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"feedback\">";
        echo "<h1 class=\"w3l_header\" >Welcome to Car selling website</h1>";
        echo "<p>Hi <b>$name</b></p>";
        echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">You can login now</a></p>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>


</body>
</html>
<?php include('footer.php'); ?>
