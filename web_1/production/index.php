<?php

include("geoip.inc"); 
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);

$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
geoip_close($gi);

// Redirect Based on country
if ($origin == 'ES'){
	header('Location: http://www.magicboxint.com/ES/index.php');
} else if ($origin == 'GB') {
	header('Location: http://www.magicboxint.com/UK/index.php');
} else {
	header('Location: http://www.magicboxint.com/INT/index.php');
}

?>