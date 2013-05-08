<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8">
	<!-- putting the boots on -->
	<link href="http://dougdragon.com/resources/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://dougdragon.com/resources/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="images_files/favicon.ico">
	<title>Cadec customer comments</title>
	<!--<link type="text/css" href="images_files/style000.css" rel="stylesheet"/>-->
	<script type="text/javascript" src="images_files/jquery00.js"></script>
	<script type="text/javascript" src="images_files/ticker00.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://dougdragon.com/resources/bootstrap/js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="http://dougdragon.com/resources/bootstrap/js/bootstrap-tab.js"></script>
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

<body>

<?php
// connect to the database
include('db-connect.php');

$id = $_GET['id'];

$sql = "SELECT * FROM  `cadecticker`.`ticker_data` WHERE id='$id'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);

?>
 
 <form action="edit_quote.php" method="post" class="form-horizontal" name="edit-form" id="edit-form">
	<fieldset>
		<legend>Edit the customer's quote below:</legend>
			<div class="control-group">
				<label class="control-label" for="customer">Customer name:</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="customer" name="customer" value="<?php echo $rows['customer']; ?>"/>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="text">Customer Quote:</label>
				<div class="controls">
					<textarea class="input-xlarge" id="text" rows="6" name="text"><?php echo $rows['text']; ?></textarea>
				</div>
			</div>
			
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Make it so!</button>
				<a href="index.php">Cancel</a>
			</div>
	</fieldset>
</form>
</body>
</html>