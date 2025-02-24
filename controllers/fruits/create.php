<?php

require "Validator.php";
//Dabu visus datus no datubazes un ieliek masīvā $categories
//Atceries ja vajag vienu ierakstu lieto fetch() bet ja vajag visus ierakstus lieto fetchall()
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    //Parbauda vai ir ievadits un garaks par 50
    if (!Validator::string($_POST["name"], max: 40)) {
        // Ja errors ir tukšs tad tiek ielikts datubāzē bet ja masīvā ir kautkas iekšā tad neatļauj sūtīt uz datubazi
        $errors["name"] = "Saturam jābūt ievadītam bet īsākam par 40 rakstzīmēm.";
    }
    elseif (empty($errors)) {
        //Vaicājuma sagatavošana
        $sql = "INSERT INTO fruits (name) VALUES (:name)";
        //asociativais masīvs kurā tiek glabātas lietotāja ievadītās vērtības.
        $params = ["name" => $_POST["name"] ?: null];
        //Vaicājuma izpilde ar parametriem
        $db->query($sql, $params);
        
        header("Location: /");
        exit();
    }
}

$pageTitle = "Izveidot";
require "views/fruits/create.view.php";
?>