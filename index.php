<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/styles.css">
		<script type="text/javascript" src="js/jquery.1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	</head>
	<body>
		<div class='background'></div>
		<div class="container main">
			<div class="col-md-5">
				<!-- <img src="images/iphone.png"> -->
				<div class="iphone_slider">
					<ul class="bxslider">
						<li><img src="images/2.png"></li>
						<li><img src="images/1.png"></li>
						<li><img src="images/3.png"></li>
						<li><img src="images/4.png"></li>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<img src="images/logo.png">
				<div class="content">
					<h1>Changing the World one Smartphone at a Time. </h1>
					<!-- <h1>Saving the World in an App!</h1> -->
					<p>Want to affect positive change for the planet but don't know where to start?  Millions if not billions of us are concerned about the state of world, from climate change to species extinction and food justice.  We all want to do more if only we had the tools. Activate is that tool!</p><p>Activate will put the power of change-making in the hands of the user.  Through geo-mapping technology, you'll find environmental groups and campaigns near you. Selecting the causes that matter most, you'll get up-to-date news about actions that you can plug-into.  Everything from petition alerts, starting your own campaigns, to joining a "global day of action" like a flash mob in your city.  This is more than an app, this is Activation!</p> </h3>
					<form method='POST' action='aboutus.php'>
						<p>Become a Beta tester, sign-up to get alerts: </p>
						<p>Mailing List sign-up here</p>
						<input type="input" name="email" placeholder="email address" />
						<input type="submit" name="submit" value="Register" />
					</form>
				</div>
				<a href="#"><img src="images/app_button.png"></a>
				<a href="#"><img src="images/play_button.png"></a>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="col-md-7">
					<ul>
						<li><a href="aboutus.php">ABOUT US</a></li>
						<li><a href="#">SUPPORT</a></li>
						<li><a href="#">BLOG</a></li>
						<li><a href="contact.php">CONTACT US</a></li>
					</ul>
				</div>
				<div class="col-md-5">&#169;2014 ACTIVIST 2.0</div>
			</div>
		</footer>
	</body>
	<script type="text/javascript">
		function validateForm() {
		var x=document.forms["myForm"]["fname"].value;
		if (x==null || x=="")
		  {
		  alert("First name must be filled out");
		  return false;
		  }
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.bxslider').bxSlider({
		  	 mode: 'fade',
  			 captions: true,
  			 auto: true,  			 
  			 speed: 500,
  			 pause: 3000
		  });
		});
	</script>
</html>
<?
?>