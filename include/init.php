<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
//header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Content-Type: application/json");


date_default_timezone_set('Africa/Lagos');

require_once "Database.php";
$db = new Database();

require_once "tables.php";

require_once "jwt.php";

require_once "constant.php";


require_once "myClass.php";
// $user = new myClass();


// require_once "Config.php";

require_once "auth.php";
$authorization = new Authorization();

?>


