<?php
    try
    {
        $connexion = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
        catch(Exception $e)
    {
        die('Connexion échouée ! : '.$e→getMessage());
    }
?>