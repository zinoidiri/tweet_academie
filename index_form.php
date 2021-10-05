
<?php

//$db

require_once "database.php";

function creatUser() {
    global $db;

    $sql = "INSERT INTO users (fullname, birthdate, username, email, phone, password) 
        VALUES (:fullname, :birthdate, :username, :email, :phone, :password)";

        $fullname = $_POST["fullname"];
        $birthdate = $_POST["birthdate"];
        $pseudo = $_POST["username"];
        $email = $_POST["email"];
        $number = $_POST["phone"];
        $password = $_POST["password"];

        $statement = $db->prepare($sql);
        $statement ->bindParam(":fullname", $fullname, PDO::PARAM_STR);
        $statement ->bindParam(":birthdate", $birthdate, PDO::PARAM_STR);
        $statement ->bindParam(":username", $pseudo, PDO::PARAM_STR);
        $statement ->bindParam("email", $email, PDO::PARAM_STR);
        $statement ->bindParam(":phone", $phone, PDO::PARAM_STR);
        $statement ->bindParam(":password", $password, PDO::PARAM_STR);

        $res = $statement->execute();
        $msg_crud = ($res === true) ? "insertion ok" : "probleme a l'insertion";
}