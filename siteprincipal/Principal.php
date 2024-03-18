<?php 
require_once 'connexion.php';

$req = $connexion->query('SELECT * FROM film');
$films = $req->fetchAll(); 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Identification/styleprincipal.css">
        <title>Bienvenue</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sga384-r4NyP46KrjD1eawBgD5tp8Y7UzmlA05oM1iAEQ17CSuQdnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>
        <body>
            
            <section id="weather-wrapper" class="container-fluid sunny" style="width:100%;">
            <div class="container-fluid">
                <div class="header">
                    <a href="#default" class="logo">Pathé Gaumont</a>
                    <div class="header-right">
                    <a class="active" href="#home">Accueil</a>
                    <a href="../Abonnement/abonnement/Abonnement.php">Abonnement</a>
                    <a href="../Identification/login.php">Connexion</a>
                    <a href="../reservation/h3.php">Réserver</a>
                </div>
             </div>

             
    <div class="container">

    <?php foreach ($films as $film): ?>
      <ul>
          <li class="items-list">
          <a href="reservation2/h3.php"><img src="<?=$film['filename']?>" alt="icon" width="200" height="auto" /></a>

          <div class="righttxt">
          <div class="kmtext">
            <?= $film['prix_place'] ?>
          </div>
          <div class="pricetext">
            <?= $film['title'] ?>
          </div>
          <div class="titletext">
           <p> Durée : <?= $film['length'] ?> min </p>
          </div>

          <div class="titletext">
            <p><?= $film['description'] ?></p>
          </div>
          </div>
          </li>
      </ul>
    <?php endforeach; ?>
  </div>
                
                
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>