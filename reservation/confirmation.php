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

$req = $connexion->query('SELECT * FROM reservation');
$conf = $req->fetchAll(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="confirmstyle.css">
	<title></title>
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
    </div>

    <h1>Votre séance pour le <?php echo $_POST['date'] ?> à <?php echo $_POST['heure'] ?> pour <?php echo $_POST['nbplaces'] ?> places a été confirmé avec succès !</h1>
    <form action="../siteprincipal/Principal.php">
    	<input type="submit" name="Retour" value="Retour à l'accueil">
    </form>
</body>
</html>