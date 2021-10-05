<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/feather-icons/dist/feather.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="script.js"></script>
    <title>Twitter</title>
</head>
<body>
    <div class="main-container">
        <div class="container-fluid header-member">
            <nav class="header-nav">
                <div class="nav-icons" style="margin-bottom: 30px"> 
                    <img src="" alt="" data-feather="twitter" class="logo-twitter">
                </div>
                <a href="member.php">
                    <div class="nav-icons">
                        <img src="" alt="" data-feather="home">
                        <p>Acceuil</p>
                    </div>
                </a>
                <a href="">
                    <div class="nav-icons">
                        <img src="" alt="" data-feather="hash">
                        <p>Explorer</p>
                    </div>
                </a>
                <a href="">
                    <div class="nav-icons">
                        <img src="" alt="" data-feather="bell">
                        <p>Notifications</p>
                    </div>  
                </a>
                <a href="">
                    <div class="nav-icons" >
                        <img src="" alt="" data-feather="mail">
                        <p>Messages</p>
                    </div>
                </a>
                <a href="">
                    <div class="nav-icons">
                        <img src="" alt="" data-feather="user">
                        <p>Profil</p>
                    </div>
                </a>
                <a href="">
                    <div class="nav-icons">
                        <img src="" alt="" data-feather="grid">
                        <p>Plus</p>
                    </div>
                </a>
            </nav>
        </div> 


        <div class="container-fluid main-profil">
            <div class="tweet-accueil">
                <h2>Accueil</h2>
            </div>
            <div class="tweet-main">
                <div class="tweet-img-profil">
                    <div class="img-profil-container">
                        <img src="assets/img/Hisoka.png" alt="profil-picture" class="profil-picture">
                    </div>
                        <label for="top-tweet"></label>
                        <input type="text" id="top-tweet" name="top-tweet" placeholder="Quoi de neuf ?" class="input-top-tweet">
                    </div>
                </div>
                <div class="tweet-button-container">
                    <button type="button" class="btn btn-primary tweet-button">Tweeter</button>
                </div>
            </div>

        <div class="container-fuild main-search">
            <p>Recherche</p>
        </div>
    </div>
   


<script>
    feather.replace();
</script>
</body>
</html>