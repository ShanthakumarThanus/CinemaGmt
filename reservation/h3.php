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
 

// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $nbplaces = $_POST['nbplaces'];

    // Préparer la requête SQL pour insérer un nouvel adhérent
    $req = $connexion->query('SELECT * FROM reservation');
    $films = $req->fetchAll(); 

    // Préparer la requête en utilisant PDO
    $stmt = $bdd->prepare($sql);

    // Liaison des valeurs avec les paramètres de la requête
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':nbplaces', $nbplaces);

    // Exécution de la requête
    if($stmt->execute()) {
        // Rediriger vers la page d'accueil si l'insertion a réussi
        header('Location: confirmation.php');
        exit();
    } else {
        // Afficher un message d'erreur si l'insertion a échoué
        echo "Erreur lors de la saisie de vos coordonnées.";
    }
}
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
                <a href="../siteprincipal/Principal.php">Accueil</a>
                <a href="../Abonnement/abonnement/Abonnement.php">Abonnement</a>
                <a href="../Identification/login.php">Connexion</a>
                <a class="active" href="../reservation/h3.php">Réserver</a>
            </div>
    <div id="container">
      <div id="header">
        
      </div>
      <div id="form-container">
        <form method="post" action="confirmation.php">
         
          <label for="date">Date :</label>
          <input type="date" id="date" name="date" required>
          <label for="heure">Heure :</label>
          <input type="time" id="heure" name="heure" required>
          <label for="nbplaces">Nombre de places :</label>
          <input type="number" id="nbplaces" name="nbplaces" min="1" max="10" required>

          <label class="visually-hidden" for="inlineFormSelectPref">Choisissez votre film!</label>
          <select class="select">
      
          <option value="3">Le Chat Potté </option>
          <option value="4">Shrek</option>
          <option value="5">Shrek 2</option>
          <option value="6">Shrek 3</option>
          <option value="7">Shrek 4</option>
          <option value="8">Le Chat Potté 2</option>
          </select>

          <h3>Informations bancaires</h3>
          <label for="nom">Nom du titulaire de la carte :</label>
          <input type="text" id="nom" name="nom" required>
          <label for="numero">Numéro de la carte :</label>
          <input type="text" id="numero" name="numero" required>
          <label for="expiration">Date d'expiration :</label>
          <input type="month" id="expiration" name="expiration" required>
          <label for="code">Code de sécurité :</label>
          <input type="text" id="code" name="code" required>
          <input type="submit" value="Payer"/>
        </form>
      </div>
    </div>
  </body>
</html>
