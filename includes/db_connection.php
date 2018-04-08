<?php
define("DB_SERVER", "localhost");
define("DB_USER", "looplab_corp");
define("DB_PASS", "secretpassword");
define("DB_NAME", "looplab_corp");
	//1.create a database connection
$dbhost = "localhost";
$dbuser = "looplab_corp";
$dbpass = "secretpassword";
$dbname = "looplab_corp";
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	//test if connection succeed
if (mysqli_connect_errno()) {
	die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")");
}

?>
