<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=iut-blog', 'login', 'password');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
