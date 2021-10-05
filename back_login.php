<?php

session_start();
require_once 'database.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    // GESTION DES CHARACTERES SPECIAUX MDP ET EMAIL
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // VERIFICATION SI LE MEMBRE EST BIEN INSCRIS 
    $check = $database->prepare('SELECT * FROM users WHERE email = ?');
    $check->execute(array($email)); // ON MET LEMAIL DANS UN TABLEAU
    $database = $check->fetch(); // RECHERCHER AVEC FETCH
    $row = $check->rowCount(); //VERIFIE SI IL EXISTE DANS LA TABLE
    var_dump($email, $password);

    if ($row == 1)   // CONDITION SI LA VALEUR EGALE A UN IL EXISTE SINON BYEBYE
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL))  // VERIFIE SI LADRESSE MAIL ES VALIDE
        {
             $password = hash_mac('ripmed160', $password, "vive le projet tweet_academy"); //HACHER LE MDP

            if ($database['password'] ===  $password)  // VERIFIE LE MDP == peux rencontrer des fails du coup ===       == jute le contenu     === egalement le type + contenu
            {
                $_SESSION['email'] = $database['email'];
                header('Location:member.php');
            } 
            else header('Location:index.php?login_err=password'); //MSG DERREUR SI RECONNAIS PAS LE MDP

        } 
        else header('Location:index.php?login_err=email');
    } 
    else header('Location:index.php?login_err=alread');
} 
else header('Location:index.php');