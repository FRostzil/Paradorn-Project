<?php
	header('Content-Type: application/json');

	
	$strSQL = "SELECT hotel_lat,hotel_long FROM hotel";

	$objQuery = mysql_query($strSQL);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);
?>