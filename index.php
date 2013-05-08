<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8">
	<!-- putting the boots on -->
	<link rel="shortcut icon" href="images_files/favicon.ico">
	<title>Cadec customer comments</title>
	<script type="text/javascript" src="images_files/jquery00.js"></script>
	<script type="text/javascript" src="images_files/ticker00.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	
	<style>
      body {
        padding-top: 60px; <!--/* 60px to make the container go all the way to the bottom of the topbar */ -->
    }
    </style>

</head>
<body> <!-- bgcolor="#80C31C"> -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav.collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span></a>
				<a class="brand" href="#">Customer Comments</a>
					<div class="nav-collapse">
						<ul class="nav">
						<li class="active"><a href="#">Admin Page</a></li>
						<li class="nav"><a href="view_comments.php" target="_blank">View Comments Page</a></li>
					</div><!--/.nav-collapse -->
			</div>
		</div> <!-- end of header container -->
	
	</div>

	<br />
	<div class="span9">
		<ul class="nav nav-tabs" id="myTab">
			<li clas="active"><a href="#view" data-toggle="tab">View Comments</a></li>
			<li><a href="#add" data-toggle="tab">Add Comments</a></li>
			
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane active" id="view">
			
			<?php
			include('db-connect.php');
			$result=mysql_query("SELECT id, customer, text from cadecticker.ticker_data") or die(mysql_error());
			if (!result) {
				echo ("<p>Error performing query: " .
					mysql_error() . "</p>");
					exit();
			}
			
			echo "<table class='table table-striped table table-bordered table table-condensed' border='1' align='left' width='750px'><tr><td align='center'>Customer:</td><td align='center'>Customer Quote:</td><td align='center'>&nbsp;</td></tr>";
			while ( $row = mysql_fetch_array($result) ) {
				echo "<tr>";
				echo '<td align="left">' . $row["customer"] . '</td>';
				echo '<td align="left">' . '"' . $row["text"] . '"' . '</td>';
				echo '<td align="center"><a href="edit.php?id=' . $row['id'] . '">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="delete.php?id='
					. $row['id'] . '">Delete</a></td>';
				echo '</tr>';
			}
			echo "</table>";
				// close db connection
				mysql_close($link);
			?>
			
			</div>
			<div class="tab-pane" id="add">
			<form class="form-horizontal" action="insert_new_quote.php" method="post" name="insert_form" id="insert_form">
			<fieldset>
			  <legend>Enter a new customer quote below:</legend>
			  <div class="control-group">
				<label class="control-label" for="customer">Customer name:</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" id="customer" name="customer">
				  <p class="help-block">Enter the customer's name here.</p>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="text">Customer Quote:</label>
				<div class="controls">
				  <textarea class="input-xlarge" id="text" rows="6" name="text"></textarea>
				  <p class="help-block">Enter the customer's quote here:</p>
				</div>
			  </div>
			  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Add new quote</button>
			  </div>
			  
			</fieldset>
			</form>
			
			</div>
			
			<script> // show the View Comments tab by default when page is loaded
			  $(function () {
				$('#myTab a:first').tab('show');
			  })
			</script>
			
		</div>
	</div>
	<img src="http://cadec.com/cg_img/logo.gif" alt="Cadec logo" align="right">
	<br />
</body>
</html>