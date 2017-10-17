<?php
try
{
    $bdd = new PDO('mysql:host=' . $hostname . ';dbname=' .$db_name. ';chartset=utf8', $id, $pass);
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    //If errors stop the script and display error message
    die('Erreur : ' . $e->getMessage());
}
