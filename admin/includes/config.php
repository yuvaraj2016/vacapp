<?php

//local DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','vacapp');

//prod db
// define('DB_HOST','sql154.main-hosting.eu.');
// define('DB_USER','u968130738_vacapp');
// define('DB_PASS','14!Salem');
// define('DB_NAME','u968130738_vacapp');

//// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'","SET GLOBAL time_zone = 'Asia/Calcutta'"));

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $dbh->exec("SET  time_zone = '+5:30';");

//$timezone = "Asia/Calcutta";
  //  $dbh->exec("SET time_zone = '+05:30'");
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
date_default_timezone_set("Asia/Kolkata");


?>
