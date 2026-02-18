<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "marlonngillet_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "marlonngillet";
$password = "90546c8030309af0425e11f2ac58fc5e";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);
?>
