<?php
$hospital_db_host = "localhost";
$hospital_db_user = "root";
$hospital_db_pass = "";
$hospital_db_name = "hospital";

 try
 {
     $DBcon = new PDO("mysql:host={$hospital_db_host};dbname={$hospital_db_name}",$hospital_db_user,$hospital_db_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }
 ?>