<?php
require_once 'config.php';


$username = $_POST['username'];
$password = md5($_POST['password']);



$stmt = $DBcon->prepare("SELECT username, password from users WHERE username='".$username."' && password='".$password."'");
$stmt->execute();
$row = $stmt->rowCount();
if ($row > 0){
    echo "correct";
} else{
    echo 'wrong';
}
?>