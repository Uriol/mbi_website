<?php

	//$country = 'UK';
	
	//header('Location: ../UK/index.php');
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://localhost:8888/mbi_2/debug/UK/company/index.php') {
		//echo 'different';
		header('Location: http://localhost:8888/mbi_2/debug/UK/company/index.php');
	}

	// Get location by ip
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	$origin = 'GB';
	// Redirect Based on country
	if ($origin == 'ES'){
		header('Location: http://localhost:8888/mbi_2/debug/ES/company/index.php');
	} else if ($origin == 'GB') {
		//header('Location: http://localhost:8888/mbi_2/debug/UK/company/index.php');
	} else {
		header('Location: http://localhost:8888/mbi_2/debug/INT/company/index.php');
	}


?>