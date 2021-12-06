<!DOCTYPE html> 
<html lang="en" class="no-js"> 
<head> 
		<meta charset="UTF-8"/> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Risha's Food Blog</title> 
		<meta name="author" content="Team Risha"/> 
		<link rel="shortcut icon" href="img/favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/normalize.css"/> 
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"/> 
		<link rel="stylesheet" type="text/css" href="modern-blog.css"/> 
		<script> 
			if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) { var root = document.getElementsByTagName('html')[0]; root.setAttribute('class', 'ff'); } 
		</script> 

		<style>
			html {
 				 scroll-behavior: smooth;
			}
			

			body{
				background: url('img/back.jpg');
				font-family: Verdana, sans-serif;
			}
			.header_div {
				margin-top: 0px;
				background-color: rgba(0,0,0,0.0);
			}
			.article {
				background-color: rgba(0,0,0,0.0);
				text-align: center;
				margin: auto;
			}

		</style>
		<script type="text/javascript">
			function myScript(){document.getElementById("mya").style.color="white";}
		</script>
		
</head>
<body>
	<a style="text-align: left;font-size:19px;color: black;" href="index.html"><div class="header_div"><img src=img/left.png width="8" height="15">&nbsp;Risha's Home</div></a>
	<div class="article">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webproj";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: ".mysqli_connect_error());
			}
			$sql = "SELECT url,text,image FROM articles";
			$result = $conn->query($sql); 
			if($result->num_rows>0)
			{
				while($row = $result->fetch_assoc())
				{	
					echo "<br><a id='mya' href=".$row['url']." style='color:rgba(0,0,0,0.8);font-size:22px;font-style: italic;text-decoration: underline;' >".$row['text']."<br><br><img src='".$row['image']."' width='450' height='250' style='border-radius: 8%;'>"."<br><br></a>";
				}
			}
			?>
	</div>
</body> 
</html>
