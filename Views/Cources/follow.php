<?php 
    session_start();
    include('../../Model/database.php');
    if($_SESSION["account"] == null) {
        header("Location:../Students/login.php");
    } else {
        $student_id = $_SESSION["account"];
        $id = @$_GET['id'];
        // $sql_cource = "SELECT * FROM cources WHERE id = '$id' LIMIT 1";
        $sql_follow = "INSERT INTO follow VALUES('$student_id','$id')";
        $stmt = $db->prepare($sql_follow);
        $stmt->execute();
        header("Location:./detail.php?id=$id");
    }
