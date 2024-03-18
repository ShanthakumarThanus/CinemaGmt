<html>
        <head>
            <meta charset="utf-8">
            <!-- importer le fichier de style -->
            <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
            <title>Login</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sga384-r4NyP46KrjD1eawBgD5tp8Y7UzmlA05oM1iAEQ17CSuQdnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        </head>
    <body>
        <div class="header">
            <a href="#default" class="logo">Pathé Gaumont</a> 
            <div class="header-right">
                <a href="../siteprincipal/Principal.php">Accueil</a>
                <a href="../Abonnement/abonnement/Abonnement.php">Abonnement</a>
                <a class="active" href="../Identification/index.php">Connexion</a>
                <a href="../reservation/h3.php">Réserver</a>
            </div>
        </div>

        <div id="container">
        <div class="login-form">
             <?php 
                require_once 'config.php';
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        </body>
        </html>