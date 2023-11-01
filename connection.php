<?php

	echo "<h1>Hi</h1>";
	$conn = mysqli_connect('localhost:3307','root','','musical_world');
	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>