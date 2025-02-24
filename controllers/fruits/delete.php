<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = 'DELETE FROM fruits WHERE id = :id';
        $params = ["id" => $_POST["id"]];
        $fruit = $db->query($sql, $params)->fetch();
        header("Location: /"); 
        exit();
    }
    else{
        redirectIfNotFound();
    }
?>