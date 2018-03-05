<html>
<head>
<title>Registration Page</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
        
       	<link href="../../img/myappslogo.jpg" rel="icon" type="image">
<!------ Include the above in your HEAD tag ---------->

<style>
body{
   
	 background-image: linear-gradient(180deg, #ff7d78, #673ab7);
}
.centered-form{
	margin-top: 60px;
	
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
	 background-image: url(http://youandsaturation.com/wp-content/uploads/2012/11/4-580x386.jpg);
}
</style>

</head>


   <body  oncontextmenu="return false">

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign up for Movies <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form class="form-horizontal" method="post" action="reg.php" enctype="multipart/form-data">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									<label for="firstname" style="color:white;">First Name</label>
										<input type="text" name="firstname" id="firstname" class="form-control input-sm" required placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="lastname" style="color:white;">Last Name</label>
			    						<input type="text" name="lastname" id="lastname" class="form-control input-sm" required placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
								<label for="username" style="color:white;">Email</label>
			    				<input type="email" name="username" id="username" class="form-control input-sm" required placeholder="Email Address">
			    			</div>

			    					<div class="form-group">
										<label for="password" style="color:white;">Password</label>
			    						<input type="password" name="password" id="password" class="form-control input-sm" required placeholder="Password">
			    					</div>
			    				
			    		
							<label name="filename" for="filename" style="color:white;">Profile Picture</label>
			    			<input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Upload Image" required />
							<br/>
			    			<input type="submit" value="Register" name="upload" class="btn btn-info btn-block">
							<br/>
							<center>
								<a href="login.php"><h4 style="color:white;">Already Registered ? </h4></a>
							</center>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
	
	
	
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

			<?php
			  // Create database connection
			  $db = mysqli_connect("sql306.byethost9.com","b9_21646915","bobby@123", "b9_21646915_movies");

			  // Initialize message variable
			  $msg = "";

			 // If upload button is clicked ...
			  if (isset($_POST['upload'])) {
				// Get image name
				//$image = $_FILES['filename']['name'];
				// Get text
				$first_name = mysqli_real_escape_string($db, $_POST['firstname']);
				$last_name = mysqli_real_escape_string($db, $_POST['lastname']);
				$email = mysqli_real_escape_string($db, $_POST['username']);
				$password = mysqli_real_escape_string($db, $_POST['password']);
				

				 $image = addslashes(file_get_contents($_FILES['filename']['tmp_name']));
											$image_name = addslashes($_FILES['filename']['name']);
											$image_size = getimagesize($_FILES['filename']['tmp_name']);

											
											$target = "../../uploads/" . $_FILES["filename"]["name"];
											
				// image file directory
				//$target = "../../uploads/".basename($image);
		
				$sql = mysqli_query($db, "SELECT username FROM client where username = '$email' ");
					if(mysqli_num_rows($sql) > 0){
						echo '<script type="text/javascript">alert("Username Already Existed!");</script>';
					}
					else{
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$query = "INSERT INTO client (username,password,firstname,lastname,thumbnails) VALUES ('$email', '$password','$first_name','$last_name','$target')";
				
						// execute query
						mysqli_query($db, $query);

						if (move_uploaded_file($_FILES["filename"]["tmp_name"], "uploads/" . $_FILES["filename"]["name"])) {
							echo '<script type="text/javascript">alert("Submission Successful");</script>';
							header('Location: login.php');
							$msg = "Submitted";
						}else{
							echo '<script type="text/javascript">alert("Submission Failed");</script>';
							$msg = "Submission Failed";
						}
					}
						echo('Record Entered Successfully');
					}

				
			  }
			  //$result = mysqli_query($db, "SELECT * FROM images");
			?>



	</body>
	
	</html>
	