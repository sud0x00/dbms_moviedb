<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "movie");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$act_id = $_REQUEST['act_id'];
		$act_name = $_REQUEST['act_name'];
		$act_gender = $_REQUEST['act_gender'];
		$dir_id = $_REQUEST['dir_id'];
		$dir_name = $_REQUEST['dir_name'];
		$dir_phone = $_REQUEST['dir_phone'];
		$movie_id = $_REQUEST['movie_id'];
		$movie_title = $_REQUEST['movie_title'];
		$movie_year = $_REQUEST['movie_year'];	
		$movie_lang = $_REQUEST['movie_lang'];		
		$role = $_REQUEST['role'];	
		$rat = $_REQUEST['rat'];	
		
		
			
		mysqli_query($conn, $sql1)
		mysqli_query($conn, $sql2)
		mysqli_query($conn, $sql3)
		mysqli_query($conn, $sql4)
		mysqli_query($conn, $sql5)
	

		echo nl2br("\n$act_id\n $act_name\n $act_gender\n $dir_id\n $dir_name\n $dir_phone\n $movie_id\n $movie_title\n $movie_year\n $movie_lang\n $role\n $rat\n ");		
	
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
