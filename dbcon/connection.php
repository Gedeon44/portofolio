<?php

$databaseHost = 'containers-us-west-158.railway.app:6755';//or localhost
$databaseName = 'railway'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = 'KXCCgkCCUHmnk8Qa7iGG';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>
