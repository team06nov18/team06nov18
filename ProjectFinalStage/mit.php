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
<body onLoad="run_first()">

<div class="homepage">
	<div class="section">
		<div class="box1">
			<h4>MIT</h4>
        <p>Eget volutpat id donec ac <em>pede</em> convallis. Tincidunt taciti nam mi inceptos 
         dis lorem, suspendisse arcu per sociosqu. Orci. Mus nunc mi inceptos lobortis habitasse 
         sapien orci a enim a scelerisque duis ridiculus diam adipiscing pellentesque, quis ante 
         tristique. Nulla volutpat Tempor lorem Netus. Nascetur erat torquent a. Curabitur morbi 
         ultrices praesent nunc nostra vestibulum rutrum.</p>
        <p>Tempor interdum. Per curae; pellentesque ridiculus consectetuer auctor, eu fringilla 
         placerat ipsum auctor <em>curabitur</em> a nulla, ante erat tincidunt facilisis. Lorem 
         nisl vel curae; eu ornare.</p>
        <p>Est. Etiam potenti convallis elementum rutrum aliquet vestibulum cubilia ac per. 
          Fermentum conubia Feugiat phasellus, rhoncus auctor sapien molestie placerat mi aliquet 
          posuere lobortis, quisque magna feugiat tempor amet auctor imperdiet nonummy At 
          <strong>a</strong> nulla congue, litora dis cras sodales varius tempor conubia. Semper. 
          Praesent netus pretium <em>placerat</em> sapien libero Dis ligula lorem augue ornare sociis 
          nascetur cum felis vitae enim tempor. Natoque conubia Nulla mus <strong>pede</strong> pharetra.</p>
         <p class="border1">Est cum accumsan condimentum parturient, rutrum penatibus eget ligula Laoreet dolor 
          tellus hendrerit sed potenti purus vulputate amet sociis. Egestas rutrum sodales. Dolor. 
          Volutpat, tortor Euismod congue tempor neque risus natoque taciti pede gravida bibendum 
          ligula accumsan vulputate suscipit gravida volutpat mus. Lorem. <strong>Mi</strong> vitae 
          Duis. Id facilisis lacus donec.</p>
      




</div>
</div>
</div>
<div class="clearfix"></div>
</body>
</html>
<?php include('footer.php'); ?>
