
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/loginindex.css">
</head>
 
    <main class='container-fluid'>
        <div class='row'>
            <div class='col-lg-6 col-md-6 col-sm-6'>
                <div><img id="big-blue-twitter" class="img-fluid" src="assets/img/twitterLoginBg.png" alt="Image twitter"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 justify-content-center" >
                <div>
                    <div class="top-connexion">
                        <form action="back_login.php" method="POST">
                            <input type="text" class="form-control col-3" name="email" placeholder="Téléphone, email ou nom d'utilisateur">
                            <input type="password" class="form-control col-3" name="password" placeholder="Mot de passe">
                            <input type="submit" class="form-control col-3 radius" value="Se connecter">
                        </form>
                    </div>
                    <div class="col-2 img-padding">
                        <img id="img-connexion" src="assets/img/oiseau.png" alt="img-twitter">
                    </div>
                    <div class="col-8 index-text1">
                        <span id="index-span1">Ça se passe maintenant</span>
                    </div>
                    <div class="col-6 index-text2">
                        <span id="index-span2">Rejoignez les boss METALLIQUES dès aujourd'hui.</span>
                    </div>

                    <div class="redirect-btn">
                        <a href="register.php"><input type="button" class="form-control col-6 register" name="formindex" value="S'inscrire"></a>
                        <a href="index_login.php"><input type="button" class="form-control col-6 radius" name="formindex" value="Se connecter"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div id="center-footer" class="col-12">
                    <a href="#"><span>A propos</span></a>
                    <a href="#"><span>Centre d'assistance</span></a>
                    <a href="#"><span>Conditions d’utilisation</span></a>
                    <a href="#"><span>Politique de Confidentialité</span></a>
                    <a href="#"><span>Politique relative aux cookies</span></a>
                    <a href="#"><span>Informations sur les publicités</span></a>
                    <a href="#"><span>Blog</span></a>
                    <a href="#"><span>Statut</span></a>
                    <a href="#"><span>Carrières</span></a>
                    <a href="#"><span>Ressources de la marque</span></a>
                    <a href="#"><span>Publicité</span></a>
                    <a href="#"><span>Marketing</span></a>
                    <a href="#"><span>Twitter pour les professionnels</span></a>
                    <a href="#"><span>Développeur</span></a>
                    <a href="#"><span>Répertoire</span></a>
                    <a href="#"><span>Paramètres</span></a>
                    <a href="#"><span>&copy 2021 Twitter, Inc</span></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>