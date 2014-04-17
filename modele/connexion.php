<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=iut_projet', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
