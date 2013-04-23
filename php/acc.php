<?php
	include('config.inc');
	$username=$_POST['name'];
	$books_acc = mysql_query("SELECT * FROM $username WHERE condn='req_acc' ORDER BY id DESC LIMIT 3");
	while ($row = mysql_fetch_array($books_acc))
	{
		echo "<li><a href='#'>".$row['fromby']." accepted your offer for \"".$row['book']."\""."</a><li>";
	} 
?>