<html>
	<head>
		<title> Test Server on Google </title>
		<a href="index.php"><h1> Welcome! </h1></a>
	</head>
	<body>

		<p>
			This link works by using directory and file. I can make file to make more links!
		</p>

		<ol>
			<?php
				$filelist = scandir("./data");
				foreach($filelist as $file){
					if($file[0]!="."){
						echo "<li><a href=\"index.php?id=".$file."\">".$file."</a></li>";
					}
				};
			?>
		</ol>

		<p>
			<?php
				if(isset($_GET['id'])){
					echo file_get_contents("data/".$_GET['id']);
				}
				else{
					echo "But, it is not good to save some data types in a file. <br><a href=\"sql.php\">So, I'm still trying to use SQL.</a>";
				}
			?>
		</p>
	</body>
</html>
