<?php
  // Create database connection
  $db = mysqli_connect("","","", "");

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

  	$sql = "INSERT INTO client (username,password,firstname,lastname,thumbnails) VALUES ('$email', '$password','$first_name','$last_name','$image')";
	
	// execute query
  	mysqli_query($db, $sql);
	mysqli_query($db, $query);

  	if (move_uploaded_file($_FILES["filename"]["tmp_name"], "../../uploads/" . $_FILES["filename"]["name"])) {
		echo '<script type="text/javascript">alert("Submission Successful");</script>';
		header('location : login.php');
  		$msg = "Submitted";
  	}else{
		echo '<script type="text/javascript">alert("Submission Failed");</script>';
  		$msg = "Submission Failed";
  	}
  }
  //$result = mysqli_query($db, "SELECT * FROM images");
?>
