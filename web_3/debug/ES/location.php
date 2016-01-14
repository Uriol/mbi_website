<?php

	//header('Location: ../UK/index.php');
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://localhost:8888/mbi_2/web_3/debug/ES/index.php') {
		//echo 'different';
		header('Location: http://localhost:8888/mbi_2/web_3/debug/ES/index.php');
	}

	// Redirect Based on country
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	$origin = 'ES';
	// Redirect Based on co	untry
	if ($origin == 'ES'){
		
	} else if ($origin == 'GB') {
		header('Location: http://localhost:8888/mbi_2/web_3/debug/UK/index.php');
	} else {
		header('Location: http://localhost:8888/mbi_2/web_3/debug/INT/index.php');
	}

?>