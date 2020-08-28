<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>SQL CRUD test</title>
		<h1><a href="sql.php">Welcome to SQL CRUD test website!</a></h1>
	</head>
	<body>

		<p>
			CRUD means Create, Read, Update, and Delete of data. <br>You can only write and see the data now. <br> Still I'm working on it. Have fun!
		</p>
		<a href="create.php">Wanna write?</a>
		<br> <br> <br>
		<?php
			$mysqli = mysqli_connect("localhost", "crud", "qwerty", "test");
			if(!isset($_GET['id'])){
				$command = "SELECT * FROM data";
				$result = mysqli_query($mysqli, $command);
				$row = mysqli_fetch_array($result);
				while(isset($row)){
					echo "<h3><a href=\"sql.php?id=".$row['id']."\">".$row['title']."</a></h3>";
					$row = mysqli_fetch_array($result);
				}
			}
			else{
				$command = "SELECT * FROM data WHERE id=".$_GET['id'].";";
				$result = mysqli_query($mysqli, $command);
				$row = mysqli_fetch_array($result);
				echo "<h1>".$row['title']."</h1>";
				echo "<p>".$row['description']."</p>";
			}
		 ?>

	</body>
</html>
