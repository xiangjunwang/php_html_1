<!DOCTYPE html>
<html>
	<head>
		<title>Our Company</title>
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
		              <li><a href="aboutus.php">ABOUT</a><div class="mark"></div></li>
		              <li><a href="company.php">Company</a><div class="mark"></div></li>
		              <li><a href="faq.php">FAG</a><div class="mark"></div></li>
		              <li><a href="legal.php">Legal</a><div class="mark"></div></li>              
		              <li class="active"><a href="contact.php">Contact Us</a><div class="mark"></div></li>
		            </ul>
		        </div>
		  	
		        <!-- main area -->
		        <div class="col-xs-12 col-sm-9">
					<h1>Contact Us</h1>
					<form class='contact-us-container' action="#" method="POST">
						<input type='text' id='contact-name' name='name' placeholder='Enter your name please.' />
						<input type='text' id='contact-email' name='email' placeholder='Enter your email address please.' />
						<textarea id='contact-comment' name='comment' placeholder='Put your comment here please.'></textarea>
						<input type='submit' id='contact-submit' name='submit' value='Submit' />
					</form>
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