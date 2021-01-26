<?php


$dsn  = 'mysql:host=localhost;dbname=id15995684_getmob';
$user = 'id15995684_root';
$pass = ']@5o>[ZU07$s{\2X';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    
);

// Connect with ur DB
try {
    $con = new PDO($dsn,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Failed To Connect".$e->getMessage();
}


?>