<?php
	$mysqli = mysqli_connect("localhost", "crud", "qwerty", "test");

	$command = "INSERT INTO data (title, description, user_id, time) VALUES ('".$_POST['title']."', '".$_POST['description']."', 0, NOW())";
	$result = mysqli_query($mysqli, $command);

	if($result === true){
		echo "<p>It worked! Code is: ".$command."</p>";
	}
	else{
		echo "<p>Something went wrong!</p>".mysqli_error();
	}
	echo "<p><a href=\"sql.php\">Return to homepage</a></p>";
 ?>

