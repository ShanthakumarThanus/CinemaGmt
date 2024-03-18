<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleprincipalbis.css">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sga384-r4NyP46KrjD1eawBgD5tp8Y7UzmlA05oM1iAEQ17CSuQdnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <a href="Principal.php" class="logo">Pathé Gaumont</a>
            <a href="#default" class="bienvenue">Bienvenue, <?php echo $_POST['username']; ?></a>
            <div class="header-right">
                <a class="active" href="#home">Accueil</a>
                <a href="../Abonnement/abonnement/Abonnement.php">Abonnement</a>
                <a href="../Identification/login.php">Connexion</a>
                <a href="../reservation/h3.php">Réserver</a>
            </div>
        </div>

        <div>
            <h1 class="txtprincip">Films en tendance !</h1>      
        </div>
        
        <div class="rcorners1">Film N°1</div>
        <div class="rcorners2">Film N°2</div>
        <div class="rcorners3">Film N°3</div>
        <div class='image'></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>