<?php
	
	//header('Location: ../UK/index.php');
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://localhost:8888/mbi_2/web_1/debug/ES/zomlings/index.php') {
		//echo 'different';
		header('Location: http://localhost:8888/mbi_2/web_1/debug/ES/zomlings/index.php');
	}

	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	$origin = 'ES';
	// Redirect Based on country
	if ($origin == 'ES'){
		//header('Location: http://localhost:8888/mbi_2/web_1/debug/ES/zomlings/index.php');
	} else if ($origin == 'GB') {
		header('Location: http://localhost:8888/mbi_2/web_1/debug/UK/zomlings/index.php');
	} else {
		header('Location: http://localhost:8888/mbi_2/web_1/debug/INT/zomlings/index.php');
	}


?>