<?php

require 'connexion.php';

$id = $_POST['id'];
$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$query = $db->prepare('UPDATE address SET city=:city, street=:street, zipcode = :zipcode WHERE id = :id');

$parameters = [
    'id' => $_POST['id'],
    'street' => $_POST['street'],
    'city' => $_POST['city'],
    'zipcode' => $_POST['zipcode']
];

$query->execute($parameters);
?>