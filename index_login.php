<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Connectez-vous sur twitter / Twitter</title>
</head>

<body>
    <header>
        <a href="index.php."><i class="fas fa-arrow-circle-left"></i>Retour</a>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <div>
                    <img src="assets/img/oiseau.png" alt="logo tiwtter" class="login-img">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <h2 class="title">Se connecter à Twitter</h2>
                </div>
                <div>
                </div>
               
                <form action="login.php" method="POST">
                <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" class="login-input form-control col-lg-12" name="email" placeholder="Nom utilisateur" value="">
                </div>
                <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="password" class="login-input form-control col-lg-12" name="password" placeholder="Mot de passe">
                </div>
                <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="submit" class="login-input-submit form-control col-lg-12" value="Se connecter">
                </div>
                </form>
                <div class="link">
                    <!-- A mettre lien pour diriger vers la page pour récupérer un nouveau mot de passe -->
                    <a href="#" class="link">Mot de passe oublié ?</a> .
                    <!-- A mettre lien pour diriger vers la page de d'inscription -->
                    <a href="form.php" class="link">S'inscrire sur Twitter</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>