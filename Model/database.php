<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fullstack";

    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>