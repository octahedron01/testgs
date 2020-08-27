<html>
<?php
	$mysqli = mysqli_connect("localhost", "crud", "qwerty", "test");
	$command = "
		INSERT INTO data(title, description, user_id)
		VALUES(
			'{$_POST['title']}',
			'{$_POST['description']}',
			0
		 );
	"
	$result = mysqli_query($mysqli, $command);

	if($result){
		echo "It worked! Code is: ".$command;
	}
	else{
		echo "Something went wrong!";
	}
	echo "<p><a href=\"sql.php\">Return to homepage</a></p>";
 ?>
</html>
