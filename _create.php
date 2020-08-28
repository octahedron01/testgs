<?php
	$mysqli = mysqli_connect("localhost", "crud", "qwerty", "test");

	$command = "INSERT INTO data (title, description, user_id, time) VALUES ('".$_POST['title']."', '".$_POST['description']."', 0, NOW())";
	$result = mysqli_query($mysqli, $command);

	if($result === true){
		echo "<p>it worked!</p>";
	}
	else{
		echo "<p>Something went wrong!</p>";
	}
	echo "<p><a href=\"sql.php\">Click here to return to homepage</a></p>";
 ?>
