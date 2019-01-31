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
			<h4>car rental information</h4>
            <p>Need to rent a car for your vacation or business travels? Comparing prices online can save you a bundle. But make sure you compare the total cost — not just the advertised rate — because fees and options can increase the base price dramatically.</p>
<p>Keep these things in mind as you start your search for a rental car.</p>
            <p>The size of the rental car can impact the price you pay. Terms like "compact," "mid-size," and "luxury" can vary across rental car companies. To illustrate car sizes, companies usually provide car models or suggest how many passengers the car seats safely.</p>
            <p class="border1">Search across several websites for the type of car you’re interested in renting. To get an idea of the best price you can get, search for rates at individual rental car company websites and price comparison websites.</p>

		</div>
	</div>
</div>
<div class="clearfix"></div>
</body>
</html>
<?php include('footer.php'); ?>
