<?php

define('HOST','127.0.0.1');
define('DB_NAME','portfolio');
define('USER','root');
define('PASS','');

try
{
  $db = new PDO("mysql:host=" . HOST . ";dbname=" .DB_NAME, USER, PASS);
  $db->setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION ) ;
$db->setAttribute ( PDO :: ATTR_EMULATE_PREPARES ,  false ) ;
}catch(Exception $e)
{
  echo $e->getMessage();
}




 ?>
