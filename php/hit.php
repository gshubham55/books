<?php
	include('config.inc');
	$username=$_POST['name'];
	$books_hit = mysql_query("SELECT * FROM $username WHERE condn='requested' ORDER BY id DESC LIMIT 3");
	while ($row = mysql_fetch_array($books_hit))
	{
		echo "<li><a href='#'>".$row['fromby']." hit you for \"".$row['book']."\""."</a><li>";

	} 
?>