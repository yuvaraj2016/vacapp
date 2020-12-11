<?php

//local DB credentials.
//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','');
//define('DB_NAME','htsnew_fleet');
//dev db
//define('DB_HOST', 'sql154.main-hosting.eu.');
//define('DB_USER', 'u777403328_dev');
//define('DB_PASS', '14!salem');
//define('DB_NAME', 'u777403328_dev');

//freshdb
define('DB_HOST', 'sql154.main-hosting.eu');
define('DB_USER', 'u777403328_flee_prod');
define('DB_PASS', '14!salem');
//define('DB_NAME', 'u777403328_flee');
define('DB_NAME', 'u777403328_flee_prod');
//prod db
//define('DB_HOST','sql154.main-hosting.eu.');
//define('DB_USER','u777403328_hridh');
//define('DB_PASS','14!salem');
//define('DB_NAME','u777403328_hts');
//
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

try {

    function check_access($file, $uid, $urid,$dbh) {
     
     
        
        $sql = "select * from ht_user_role_access where user_id=:uid and user_role_id=:urid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':uid', $uid, PDO::PARAM_INT);
        $query->bindParam(':urid', $urid, PDO::PARAM_INT);
          
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $num = $query->rowCount();
       // echo $file . $uid . $urid.$a;
        if ($num > 0) {
            foreach ($results as $result){
            $a = $result->user_role_access_page;
//          echo $a;
            if (strpos($a, $file) !== false) {
                $value=TRUE;
            } else {
                $value=FALSE;
            }
            }
        }
        if($urid==1 || $urid==2 )
        {
            $value=TRUE;
        }
//        $value=TRUE;
        return $value;
    }

} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
