<?php 

//$db['db_host'] = "localhost";
//$db['db_name'] = "cms";
//$db['db_user'] = "root";
//$db['db_pass'] = "";
//
//
//
//foreach($db as $key => $value){
//
//define(strtoupper($key), $valuse);
//    
//}
//
//
//$connection = mysqli_connect(DB_HOST, DB_NAME, DB_USER, DB_PASS,);



defined("db_host") ? null: define("db_host", "localhost");
defined("db_name") ? null: define("db_name", "cms");
defined("db_user") ? null: define("db_user", "root");
defined("db_password") ? null: define("db_password", "");


$connection = mysqli_connect(db_host, db_user, db_password, db_name);


if(!$connection){
    
    die("Connection Failed");

}


?>