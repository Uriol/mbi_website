<?php

include("geoip.inc"); 
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);

$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
geoip_close($gi);

$origin == 'ES';
// Redirect Based on country
if ($origin == 'ES'){
	header('Location: http://localhost:8888/mbi_2/star_monsters/debug/ES/index.php');
} else if ($origin == 'GB') {
	header('Location: http://localhost:8888/mbi_2/star_monsters/debug/UK/index.php');
} else {
	header('Location: http://localhost:8888/mbi_2/star_monsters/debug/INT/index.php');
}

?>