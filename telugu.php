<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Movies</title>

	
    <meta charset="utf-8">
    <meta name="description" content="Movies">
    <meta name="author" content="Prasad Bobby">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
		<link rel="icon" href="img/myappslogo.jpg" type="image/x-icon" />
		
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/raphael-min.js"></script>
	<script type="text/javascript" src="js/DevSolutionSkill.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<style>
		
		* {
    box-sizing: border-box;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}


		
		</style>

</head>
<body oncontextmenu="return false" >

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">Mo<span>vies</span></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="megadrop"><a class="" href="index.php">Home</a>
								
							</li>
							<li class="drop"><a href="#">Language</a>
								<ul class="drop-down">
													<li><a href="#">Telugu</a></li>
													<li><a href="hindi.php">Hindi</a></li>
													<li><a href="english.php">English</a></li>
													<li><a href="other.php">Other</a></li>
								</ul>
							</li>
							<li class="megadrop"><a class="" href="login.php">Login</a>
								
							</li>
							
							<li class="search drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- End Header -->

		
<br/>
<br/><br/>
	
		<!-- portfolio-section 
			================================================== -->
		<section id="portfolio-section" class="portfolio-section masonry-style">
			<div class="container">
				<div class="title-section">
					<h1>Telugu Movies</h1>
					<span></span>
				</div>
			</div>
			
			
				
							<div class="row">
							<?php
												$connect = mysqli_connect("sql306.byethost9.com", "b9_21646915", "bobby@123", "b9_21646915_movies");  

												$sql = "SELECT * FROM movie_details WHERE language = 'telugu' ORDER BY id DESC";
												$resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
												while( $record = mysqli_fetch_assoc($resultset) ) 
												{
											?>
							  <div class="column nature">
								<div class="content">
								
									<a href="movies_details.php?id=<?php echo $record['id']; ?>" ><img src="<?php echo $record['image']; ?>" alt="Movie Image" style="width:100%"></a>
						
									<h5><a href="movies_details.php?id=<?php echo $record['id']; ?>" ><?php echo $record['name']; ?></a></h5>
									<p><?php echo $record['rating']; ?></p>
								
								</div>
							  </div>
												<?php } ?>
							
							</div>  
				
			
		</section>
		<!-- End portfolio section -->
		
		

		<!-- news-section 
			================================================== -->
		<section id="news-section">
			<div class="title-section white">
				<h1>Latest Movies</h1>
				<span></span>
			</div>

			<div class="news-box">

				<div class="carousel-arrows owl-arrows">
					<a href="#" class="prev-link"><i class="fa fa-angle-left"></i></a>
					<a href="#" class="next-link"><i class="fa fa-angle-right"></i></a>
				</div>	
				<div id="owl-demo" class="owl-carousel">
					<?php
							$connect = mysqli_connect("sql306.byethost9.com", "b9_21646915", "bobby@123", "b9_21646915_movies");  

							$sql = "SELECT * FROM movie_details ORDER BY id DESC LIMIT 6";
							$resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
							while( $record = mysqli_fetch_assoc($resultset) ) 
							{
						?>
					<div class="item news-post">
						<a href="movies_details.php?id=<?php echo $record['id']; ?>" ><img src="<?php echo $record['image']; ?>" alt="Movie Image"></a>
						<div class="news-content">
							<div class="date-post">
								<span><?php echo $record['rating']; ?></span>
								
							</div>
							<div class="news-content-text">
								<h2><a href="movies_details.php?id=<?php echo $record['id']; ?>" ><?php echo $record['name']; ?></a></h2>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End news section -->

		

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				
				
				<p class="copyright">
					&copy; Copyright 2018. "Movies" by Prasad Bobby. All rights reserved.
					<br/>
				<center>
						<?php 		
							$handle = fopen("visitors.txt", "r"); 		
							if(!$handle)
						{ 
							echo "could not open the file" ; 		
						} 		
						else
						{ 			
							$counter = ( int ) fread ($handle,20) ; 
							fclose ($handle) ;
							$counter++ ; 		
							echo " <p class='mb-2'><small> Total Visitors ". $counter . "" ;
							echo "</small></p>";
							$handle = fopen("visitors.txt", "w" ) ;
							fwrite($handle,$counter) ; 		
							fclose ($handle) ;
						} 
					  ?>
					</center>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	
	<script>
			document.onkeydown = function(e) {
				if(e.keyCode == 123) {
				 return false;
				}
				if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
				 return false;
				}
				if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
				 return false;
				}
				if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
				 return false;
				}

				if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
				 return false;
				}      
			 }
	</script>
	
	<!-- Revolution slider -->
	<script type="text/javascript">

		jQuery(document).ready(function() {
						
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:10000,
				startwidth:960,
				startheight:740,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				navigationArrows:"none",
				
				touchenabled:"on",
				onHoverStop:"off",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:60,
						
				shadow:0,

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
										
										
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});
							
		});	//ready

		// skills section
		jQuery(function(){
			$('.skills-box').appear(function() {
				DevSolutionSkill.init('circle1'); 
				DevSolutionSkill.init('circle2'); 
				DevSolutionSkill.init('circle3'); 
				DevSolutionSkill.init('circle4');
				DevSolutionSkill.init('circle5');
				DevSolutionSkill.init('circle6');
			});
		});
		
	</script>
	
	
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
