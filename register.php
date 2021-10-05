<?php 
require_once 'index_form.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<h3 class="title"> 
    <span>Créez votre compte</span>
</h3>

<div class="container">

<div class="col-md-2 div-bird">
  <img class="bluebird" src="580b57fcd9996e24bc43c53e.png" alt="bluebird">

</div>

<form class="row g-3 needs-validation" method="POST" novalidate>
 
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">nom et prénom</label>
    <input type="text" name="fullname" class="form-control" id="validationCustom01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">date de naissance</label>
    <input type="date" name="birthdate" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
    ISO-8859-1
    </div>
  </div>
  
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="pseudo" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
 
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Tél</label>
    <input type="tel" name="phone" class="form-control" id="validationCustom03" >
    <div class="invalid-feedback">
      donnez un numero correct.
    </div>
  </div>

  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="validationCustom03" >
    <div class="invalid-feedback">
      Entrez un mots de passe.
    </div>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        J'accepte les conditions d'utilisations.
      </label>
      <div class="invalid-feedback">
        Vous devez accepter les conditions d'utilisations.
      </div>
    </div>
  </div>
  
  <div class="col-16">
    <button class="btn btn-primary" type="submit">S'inscrire.</button>
  </div>
</form>

</div>
<script src="script.js"></script>
</body>
</html>