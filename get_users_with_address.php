<?php
require 'connexion.php';

$query = $db->prepare('SELECT users.id, address.city, address.street, address.zipcode FROM users JOIN address ON users.id = address.id WHERE users.id = :id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);
?>

    