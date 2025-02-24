<?php

if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}
$sql = "SELECT * FROM fruits WHERE id = :id";
$params = ["id" => $_GET["id"]];
$fruit = $db->query($sql, $params)->fetch();


if (!$fruit){
    redirectIfNotFound();
}
$pageTitle = "Auglis";
require "views/fruits/show.view.php";