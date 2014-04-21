<?php
	if ( isset($_POST["email"]) )
    {
    	if ( $_POST["email"] != "" )
    	{
    		require('db.php');
	        $db = new ActivateDatabase();
	        $db->selectDatabase();
	        $db->addEmail($_POST["email"]);
    	}
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About Us</title>
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/styles.css">
	</head>

	<body>
		<div class="page-container">
  
			<!-- top navbar -->
		    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
		       <div class="container">
		    	<div class="navbar-header">
		           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
		             <span class="icon-bar"></span>
		             <span class="icon-bar"></span>
		             <span class="icon-bar"></span>
		           </button>		           
		    	</div>
		    	<div class="logo"><a href="index.php"><img src="images/logo.png" /></a></div>
		       </div>
		    </div>
		      
		    <div class="container">
		      <div class="row row-offcanvas row-offcanvas-left">
		        
		        <!-- sidebar -->
		        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
		            <ul class="nav">
		              <li class="active"><a href="aboutus.php">ABOUT</a><div class="mark"></div></li>
		              <li><a href="company.php">Company</a><div class="mark"></div></li>
		              <li><a href="faq.php">FAG</a><div class="mark"></div></li>
		              <li><a href="legal.php">Legal</a><div class="mark"></div></li>              
		              <li><a href="contact.php">Contact Us</a><div class="mark"></div></li>
		            </ul>
		        </div>
		  	
		        <!-- main area -->
		        <div class="col-xs-12 col-sm-9">
		          <h1>About Us</h1>
		          <h2>The Team</h2>
		          <p>We're a team of environmentalists, digital media activists, developers and graphic designers who are passionate about solving environmental problems. We're not just talking about the issues; we're building a mobile tool to solve them. ACTIVATE connects people with active environmental groups in their neighborhoods, cities and even nations. We believe that by giving the right tools to people, we can affect positive change for our planet. This is one of those tools! </p>
		          <div class='person-container'>
		          	<div class='person'>
		          		<div class='photo-container'>
		          			<img class='photo' src='images/Emily Hunter.jpg' />
		          		</div>
		          		<div class='description-container'>
		          			<h3>Emily Hunter</h3>
		          			<h4>Creator & Content Manager </h4>
		          			<p>Emily Hunter is a media activist and second-generation environmentalist. Born into the environmental movement, her father was the first president of Greenpeace, the late Robert Hunter. For nearly a decade Emily has campaigned on global environmental issues, from saving whales in Antarctica to organizing digital campaigns against climate change. She published her first book titled  The Next Eco-Warriors and her current campaign is launching the ACTIVATE APP to encourage online to offline environmental advocacy. </p>
		          		</div>
		          	</div>
		          	<div class='person'>
		          		<div class='photo-container'>
		          			<img class='photo' src='images/Dustin Titus.png' />
		          		</div>
		          		<div class='description-container'>
		          			<h3>Dustin Titus</h3>
		          			<h4>Co-Founder & App Manager</h4>
		          			<p>Dustin Titus makes sense of the digital revolution. As the Founder of rGenta, a digital marketing agency based in Toronto, Canada, Dustin has worked with prevailing Marketing and Advertising agencies leading and executing digital strategy. Dustin has worked with for profit, not-for-profit and high profile personal brands, including Dan Aykroyd, S Magazine, Ski Television, the Center for Living Peace and more. </p>
		          		</div>
		          	</div>
		          	<div class='person'>
		          		<div class='photo-container'>
		          			<img class='photo' src='images/Paul Wildman.jpg' />
		          		</div>
		          		<div class='description-container'>
		          			<h3>Paul Wildman</h3>
		          			<h4>Co-Founder &Graphic Designer</h4>
		          			<p>Paul Wildman is a world-class creative strategist and talented artist, capable of not only envisioning and designing, but producing cutting edge new media efforts across any channel – on screen, on paper, and online. A classical artist turned digital savant, Paul utilizes graphic design, social media and technology, cinematography and photography as his canvas to deliver his work. With over 13 years of production, new media and Internet experience, leading commercial, non-profit and small independent projects, he has worn many different hats and has a wealth of experience from which to draw upon – for any type of media campaign.</p>
		          		</div>
		          	</div>
		          </div>
		          <!-- <h3>My Name is and im CEO</h3>
		          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
		    	  <h3>My Name is and im CEO</h3>
		          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>           -->
		        </div><!-- /.col-xs-12 main -->
		      </div><!--/.row-->
		  	</div><!--/.container-->
		</div><!--/.page-container-->
        
	    <script type='text/javascript' src="js/jquery.1.9.1.min.js"></script>
	    <script type='text/javascript' src="js/bootstrap.min.js"></script>
	    <!-- JavaScript jQuery code from Bootply.com editor -->
	    
	    <script type='text/javascript'>        
	        $(document).ready(function() {
			  $('[data-toggle=offcanvas]').click(function() {
			    $('.row-offcanvas').toggleClass('active');
			  });
			});        
	    </script>
	</body>
</html>