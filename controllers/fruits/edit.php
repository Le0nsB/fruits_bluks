<?php

require "Validator.php";

if(isset($_GET["id"])){
    $sql = 'SELECT * FROM fruits WHERE id = :id';
    $params = ["id" => $_GET["id"]];
    $fruit = $db->query($sql, $params)->fetch();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["name"], max: 40)) {
        $errors["name"] = "Saturam jābūt vismaz 2 rakstzīmēm un īsākam par 41 rakstzīmēm.";
    } 

    if (empty($errors)) {
        $sql = 'UPDATE fruits SET name = :name WHERE id = :id';
        $params = ["id" => $_POST["id"], "name" => $_POST["name"]];
        $fruit = $db->query($sql, $params)->fetch();
        
        header('Location: /show?id=' . $_POST["id"]);
        exit();
    }
    
}
if (!$fruit){
    redirectIfNotFound();
}

$pageTitle = "Rediģēt";
require "views/fruits/edit.view.php";