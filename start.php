<?php


// map redbean
Autoloader::map(array(
	'R' => Bundle::path('redbean').'redbean/rb.php'
));

// now our connector
Autoloader::directories(array(
	Bundle::path('redbean').'connector'
));

// and connect
Connector::setup();