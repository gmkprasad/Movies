<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("sql306.byethost9.com","b9_21646915","bobby@123");
    $db=mysql_select_db("b9_21646915_movies",$con);
    $query=mysql_query("select * from movie_details where name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['name'];
	  $image[] = $row['image'];
    }
    echo json_encode($array);
	
?>
