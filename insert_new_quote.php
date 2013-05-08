<?php
// connect to the database
include('db-connect.php');
$sql="INSERT INTO `cadecticker`.`ticker_data` (customer, text)
	VALUES ('$_POST[customer]','$_POST[text]')";

// display message if successful 
if (!mysql_query($sql,$link)) {
	die('Error: ' . mysql_error());
	}
echo '1 record added<br /><br />';
echo "You can close this page or click <a href='http://www.zombo.com'> here</a>.";
echo "<br /><p><a href='index.php'>Click here to go back to the Admin page</a></p>";
header("Location: index.php");

// close db connection
mysql_close($link);

?>