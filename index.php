<?php

include("geoip.inc"); 
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);

$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
geoip_close($gi);

// Redirect Based on country
if ($origin == 'ES'){
	header('Location: http://localhost:8888/mbi_2/ES/index.php');
} else if ($origin == 'GB') {
	header('Location: http://localhost:8888/mbi_2/UK/index.php');
} else {
	header('Location: http://localhost:8888/mbi_2/INT/index.php');
}

//header('Location: UK/index.php');

?>