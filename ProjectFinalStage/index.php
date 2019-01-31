<?php
//must appear BEFORE the <html> tag
session_start();
include_once('confige.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>car selling </title>
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
		width: 47%;
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
.homepage .section .box1 p:after {

    border-top: 3px solid black;

    display: block;
    width: 80%;
    content: "";
    margin: 8px auto 0;
}
</style>
<?php include('header.php'); ?>
<body onLoad="run_first()">
	<div class="clearfix"></div>
<div class="homepage">
<div class="section">
	<div class="box1 bg-light">
		<h4>About Us</h4>
                    <p>Welcome to car sales website, a global leader in car, van and truck rental. At care sales website you can hire and rent a car for your leisure or business trips, as well as commercial vans or utes from over 116 locations across Australia or from any one of our 3835 agencies worldwide. With over 60 years of experience in the industry, you can be sure that whether you are looking for an economy, 4WD or luxury car in Sydney, Melbourne, Brisbane or the Gold Coast, or need to hire a minivan, ute or truck for a commercial job, Car sales website will not be beaten on service. There are more reasons than ever to rent with Car sales website, with popular models like the Toyota Corolla, Hyundai, Mitsubishi ASX or Toyota RAV4 available. Treat yourself with a premium rental experience and drive away with the premium car model you have booked. Need a vehicle to enjoy a self-drive campervan holiday for more than 28 days? Car sales website is offering great deals on car and van rental locally and overseas. Book your car hire online now!</p>

                        <h4>Car Research</h4>
                    <p>When buying a car, it's best to start out by creating a list of must have features then do your homework and narrow down a list of suitable options. Once narrowed down do some research on the remaining options; Tradingpost offers some helpful reviews and detailed information for some of the top selling Australian make & models. Also, reference the Tradingpost blog automotive section which will be updated with the latest advice and car buying tips during the purchase process. With the average length of vehicle ownership being almost 5 years now it's importance to do as much research as possible for this long term investment. This preparedness will lead to a sense of confidence and security during the car buying process. </p>

	</div>
	<div class="box1 bg-light">
		<h4>A marketplace where everyone wins</h4>
                    <p>Autotrader believes in deals that benefit buyers and sellers making everything better – for everybody.<br>
                      Building buyer and seller confidence -
We have created tools and features that help build trust and make trading auto easier for buyers and sellers.<br>
Faster and more powerful search - 
Search and filtering options allow buyers to find the car they want faster on any device.</p>
                    <p>Always know you car's Towing Capacity<br>
What is your car’s towing capability? We all have different things we can tow with our utes, SUVs, vans or cars. Whether it is a heavy trailer, caravan, boat or a horse float, understanding a car’s towing capacity, braked and unbraked is important for safety. For your convenience, our database will also give you each car’s max torque and power. </p>

                        <h4>How much should you pay?</h4><br> <p>Finding out the average price you should pay for a used or new car can be a real puzzle. By leveraging the Tradingpost car valuation tool you can get an idea about how much you should be paying for a given year, 
                            <a id="expand-p-click" href="javascript:;" style="text-decoration: none; text-transform: lowercase;"
                           onClick="show_text('expand-p-click', 'expand-p', 'block')">Read more ...</a>
                        </p>

                        <p style="display: none;" id="expand-p">make and model. Always be sure to factor in mileage and the condition of the vehicle, beyond normal wear and tear, when deciphering the value of the automobile.</p>
                        

                        <h4>Where to find a car?<h4>
                            <p>After you have done your research and valuation to narrow down the options for your ideal vehicle, start browsing Tradingpost which has thousands of cars listed for sale. Tradingpost has a large variety of new and used cars to filter through from both dealers and private parties. Private sellers don't legally have to provide proof of clear title of a car,<span style="display: none;" id="expand-text">
                             so it makes sense to get a full background check of a car before committing to purchase. Make sure to check the legal situation in your state or territory, including how to make sure there's no money owed on the car before buying from a private seller. You can also use the Tradingpost dealer directory to find dealership inventory in your area. Car dealerships legally offer a three-month warranty on all sold vehicles for additional peace of mind.</span>
                            <a id="expand-click" href="javascript:;" style="text-decoration: none; text-transform: lowercase;"
                               onClick="show_text('expand-click', 'expand-text', 'inline')">Read more ...</a>
                        </p>
	</div>
	

</div>
</div>
<div class="clearfix"></div>
</body>
</html>
<?php include('footer.php'); ?>
