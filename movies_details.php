<?php
$db = mysql_connect("","","") or die("Database Error");
mysql_select_db("",$db);

$id = $_GET['id'];
$id = mysql_real_escape_string($id);
$query = "SELECT * FROM `movie_details` WHERE `id`='" . $id . "'";
$result = mysql_query($query);

echo $record['id']; while($record = mysql_fetch_array( $result )) {


?>
 
<!doctype html>


<html lang="en" class="no-js">
<head>
	<title><?php echo $record['name']; ?></title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="icon" href="<?php echo $record['image']; ?>" type="image/x-icon" />

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body oncontextmenu="return false">

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

		<!-- content
				================================================== -->
		<div id="content">

			<!-- page-banner-section 
				================================================== -->
			<section class="page-banner-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2><span>Movie</span> Details</h2>
						</div>
						<div class="col-md-6">
							<ul class="page-pagin">
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Movie Details</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- End page-banner section -->

			<!-- single-project 
				================================================== -->
			<section class="single-project-section">
				<div class="container">
					<div class="title-project">
						<h1  class="url-link"><?php echo $record['name']; ?></h1>
					</div>
					<div class="project-gallery">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img alt="Movie Image" src="<?php echo $record['image']; ?>" />
								</li>
								<li>
									<img alt="Movie Image" src="<?php echo $record['image']; ?>" />
								</li>
								<li>
									<img alt="Movie Image" src="<?php echo $record['image']; ?>" />
								</li>
							</ul>
						</div>
						<a class="likes" href="#"><i class="fa fa-star"></i><span><?php echo $record['rating']; ?></span></a>
					</div>
					<div class="project-content">
						<div class="row">
							<div class="col-md-9">
								<h1><i class="fa fa-book"></i>Story</h1>
								<p style="color:black;"><?php echo $record['story']; ?></p>
								</div>
							<div class="col-md-3">
								<h2>Movie Info</h2>
								<p>Director: <a  class="url-link" href="#"><?php echo $record['director']; ?></a></p>
								<p>Producer: <a  class="url-link" href="#"><?php echo $record['producer']; ?></a></p>
								<p>Music Director: <a  class="url-link" href="#"><?php echo $record['musicdirector']; ?></a></p>
								<p>Cast: <a class="url-link" href="#"><?php echo $record['starring']; ?></a></p> 
								<p>Language: <a class="url-link" href="#"><?php echo $record['language']; ?></a></p> 
								<p>Release Date: <a class="url-link" href="#"><?php echo $record['date']; ?></a></p> 
								<p>Duration: <a class="url-link" href="#"><?php echo $record['duration']; ?></a></p> 
								<p>Rating: <a class="url-link" href="#"><?php echo $record['rating']; ?></a></p> 
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End single-project -->

			<!-- single-project 
				================================================== -->
			<section class="related-project-section">
				<div class="container">
					<div class="title-section">
						<h1>Related Movies</h1>
						<span></span>
					</div>
					<div class="portfolio-box">
						<div id="owl-demo" class="owl-carousel">
							<?php
								$connect = mysqli_connect("", "", "", ""); 
								$sql = "SELECT * FROM movie_details ORDER BY date DESC LIMIT 6";
								$resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
								while( $record = mysqli_fetch_assoc($resultset) ) 
								{
							?>
							<div class="item project-post">
								<a href="movies_details.php?id=<?php echo $record['id']; ?>" ><img src="<?php echo $record['image']; ?>" alt="Movie Image"></a>
								<div class="hover-box">
									<a class="zoom" href="upload/portfolio/1.jpg"><i class="fa fa-arrows-alt"></i></a>
									<a class="link" href="movies_details.php?id=<?php echo $record['id']; ?>" ><i class="fa fa-eye"></i></a>
									<div class="inner-hover">
										<h2><?php echo $record['name']; ?></h2>
										<p><?php echo $record['rating']; ?></p>
									</div>						
								</div>
							</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<!-- End single-project -->
			
		</div>
		<!-- End content -->
		
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
				</p>
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
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>
<?php } ?>	
