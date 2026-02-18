<?php

require 'connexion.php';

$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$query = $db->prepare('insert INTO address (street,city,zipcode) VALUES (:street, :city, :zipcode)');

$parameters = [
    'city' => $_POST['city'],
    'street' => $_POST['street'],
    'zipcode' => $_POST['zipcode']
];
$query->execute($parameters);
$id = $db->lastInsertId();

?>