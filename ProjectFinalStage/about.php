<!DOCTYPE html>
<?php
//must appear BEFORE the <html> tag
session_start();
include_once('confige.php');
?>
<html>
<head>
	<title></title>

</head>
<style type="text/css">
	

	body.homepage{

		display: inline-block;
		width: 100%
		height:2500px;
		box-sizing: border-box;
		background-color: gray;
		

	}
	.homepage .section{

		margin: 3% 5%;
		box-sizing: border-box;
		height: auto;

	}
		.homepage .section .box1{
		float: left;
		width: 100%;
		margin-right: 3%;
		background-color: white;
		border-radius: 15px;
		min-height: 950px;
		display: inline-block;
		margin-top: 3%;
		margin-bottom: 5%;
		border:3px solid black;
		box-sizing: border-box;
    box-shadow: 5px 5px 5px 5px #aaa;


	}
	.homepage .section .box1:hover{
		   -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
    -webkit-box-shadow: 15px 15px 40px 15px #aaa;
    -moz-box-shadow: 15px 15px 40px 15px #aaa;
    box-shadow: 15px 15px 40px 15px #aaa;

	}
.clearfix{

	clear: both;


}

.homepage .section .box1 h4{

	    font-size: 18px;
	    color: #ea1d5d;
	    line-height: 33px;
    	padding: 3%;
    	text-align: center;
    text-transform: uppercase;
}

.homepage .section .box1 h4:after {

    border-top: 3px solid black;

    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}
/*.homepage .section .box1 h4:before {

    border-top: 3px solid black;

    display: block;
    width: 300px;
    content: "";
    margin: 8px auto 0;
}*/
.homepage .section .box1 p{

		font-size: 12px;
	        font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
	    line-height: 33px;
    	padding: 3%;
    	text-align: center;
    	text-transform: uppercase;
}
.homepage .section .box1 p.border1:after {

    border-top: 3px solid black;

    display: block;
    width: 80%;
    content: "";
    margin: 8px auto 0;
}
</style>

<?php include('header.php'); ?>
<body>
<div class="homepage">
	<div class="section">
		<div class="box1">
			<h4>About Us</h4>
            		<p>Welcome to car sales website, a global leader in car, van and truck rental. At care sales website you can hire and rent a car for your leisure or business trips, as well as commercial vans or utes from over 116 locations across Australia or from any one of our 3835 agencies worldwide. With over 60 years of experience in the industry, you can be sure that whether you are looking for an economy, 4WD or luxury car in Sydney, Melbourne, Brisbane or the Gold Coast, or need to hire a minivan, ute or truck for a commercial job, Car sales website will not be beaten on service. There are more reasons than ever to rent with Car sales website, with popular models like the Toyota Corolla, Hyundai, Mitsubishi ASX or Toyota RAV4 available. Treat yourself with a premium rental experience and drive away with the premium car model you have booked. Need a vehicle to enjoy a self-drive campervan holiday for more than 28 days? Car sales website is offering great deals on car and van rental locally and overseas. Book your car hire online now!</p>
		</div>
	</div>
</div>
</body>
</html>
<?php include('footer.php'); ?>
