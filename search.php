<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("","","");
    $db=mysql_select_db("",$con);
    $query=mysql_query("select * from movie_details where name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['name'];
	  $image[] = $row['image'];
    }
    echo json_encode($array);
	
?>
