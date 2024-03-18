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

$req = $connexion->query('SELECT * FROM film');
$films = $req->fetchAll(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Réservez vos places!</title>
    <link rel="stylesheet" href="solution-form.css">
  </head>
  <body>
    <div class="header">
            <a href="#default" class="logo">Pathé Gaumont </a>
            <div class="header-right">
                <a href="../Principal.php">Accueil</a>
                <a href="../Abonnement/abonnement/Abonnement.php">Abonnement</a>
                <a href="../Identification/login.php">Connexion</a>
                <a class="active" href="h3.php">Réserver</a>
            </div>
    <div id="container">
      <div id="header">
        
      </div>
      <div id="form-container">
        <form>
         
          <label for="date">Date :</label>
          <input type="date" id="date" name="date" required>
          <label for="heure">Heure :</label>
          <input type="time" id="heure" name="heure" required>
          <label for="nombre">Nombre de places :</label>
          <input type="number" id="nombre" name="nombre" min="1" max="10" required>
          

          <h3>Informations bancaires</h3>
          <label for="nom">Nom du titulaire de la carte :</label>
          <input type="text" id="nom" name="nom" required>
          <label for="numero">Numéro de la carte :</label>
          <input type="text" id="numero" name="numero" required>
          <label for="expiration">Date d'expiration :</label>
          <input type="month" id="expiration" name="expiration" required>
          <label for="code">Code de sécurité :</label>
          <input type="text" id="code" name="code" required>
          <input type="submit" value="Payer">
        </form>
      </div>
    </div>
  </body>
</html>
