<html>
	<head>
		<title> Test Server on Google </title>
		<a href="index.php"><h1> Welcome! </h1></a>
	</head>
	<body>
		
			<?php
				$filelist = scandir("./data");
				foreach($filelist as $file){
					if($file[0]!="."){
						echo "<p>".$file."</p>";
					}
				};
			?>
		

		<p>
			<?php
				if(isset($_GET['id'])){
					echo $_GET['id'];
				}
				else{
					echo "What?";
				}
			?>
		</p>
	</body>
</html>
