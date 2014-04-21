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
		              <li class="active"><a href="company.php">Company</a><div class="mark"></div></li>
		              <li><a href="faq.php">FAG</a><div class="mark"></div></li>
		              <li><a href="legal.php">Legal</a><div class="mark"></div></li>              
		              <li><a href="contact.php">Contact Us</a><div class="mark"></div></li>
		            </ul>
		        </div>
		  	
		        <!-- main area -->
		        <div class="col-xs-12 col-sm-9 company-container">
		          <h1>Company</h1>
		          <br />
		          <p><span class='bold'>ACTIVATE</span><span> is a collective project by companies with a concern or mandate in sustainability. These companies range in digital media, journalism, marketing and graphic design industries. Combining efforts to develop this innovative app, these companies include: </span></p><br />
		    	  <img class='companies-logo' src='images/rgenta-logo.png' />
		          <p><span class='bold'>rGenta</span><span> is an innovative digital mediadevelopment firm with core competencies in web development, digital marketing and community management strategies. Our experience covers a wide range of products, services, brand and organizations. Our current client roster features Crystal Head Vodka, Dan Aykroyd and The Allan Candy Company among others.</span></p><br /><br />
		          <img class='companies-logo' src='images/builtByWildman-logo.png' />
		          <p><span class='bold'>Built By Wildman</span><span> design studio is an expert in interactive, branding, video, social media and design – both online and offline. With a combined experience of 25 years, working for clients that include the likes of Volkswagen, Sony, Virgin, Porsche and Citibank, we bring that expertise to you.</span></p><br /><br />
		          <img class='companies-logo' src='images/ecoWarriorProductions-logo.png' />
		          <p><span class='bold'>Eco-Warrior Productions</span><span> is a cross-media production company that focuses on critical environmental issues. Specializing in documentary, print and new media projects that aim to inspire a new generation into environmentalism. Creating and producing projects, our company has published books, broadcasted TV-documentaries on MTV Canada and TVO, as well as, successfully launched social media campaigns for various non-profits.</span></p>
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