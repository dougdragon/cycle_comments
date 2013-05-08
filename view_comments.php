<!DOCTYPE html>
   
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8">
	<title>Cadec customer comments</title>
	<link type="text/css" href="images_files/style000.css" rel="stylesheet"/>
	<script type="text/javascript" src="images_files/jquery00.js"></script>
	<script type="text/javascript" src="images_files/ticker00.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#fade').list_ticker({
			speed:5000,
			effect:'fade'
		});
		$('#slide').list_ticker({
			speed:5000,
			effect:'slide'
		});
	})
	</script>
</head>
<body> <!-- bgcolor="#80C31C"> -->
	<center><br />
	<a href="bobbie.html"><img src="http://cadec.com/cg_img/logo.gif" alt="Cadec logo"></a>
	<!-- <h1>Cadec Customer Comments</h1> -->
	<br />
	
	<ul id="slide">
		<?php
			/* display data from the table */
			// connect to the db
			include('db-connect.php');
			
			$result=mysql_query("SELECT id, customer, text from `cadecticker`.`ticker_data`") or die(mysql_error());
			if (!result) {
				echo ("<p>Error performing query: " . mysql_error() . "</p>");
				exit();
			}
			while ( $row = mysql_fetch_array($result) ) {
				echo("<li>" . $row["text"] . "<br /><p align='right'>--" . $row["customer"] . "</p></li>");
			}
			// close db connection
			mysql_close($link);
		?>
	</ul>
</body>
</html>