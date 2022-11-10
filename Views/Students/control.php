<?php 
    session_start();
    include('../../Model/database.php');
    if(isset($_POST["btn-login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM accounts WHERE username = '$username' and pass = '$password'";
        echo $sql;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $account = $stmt->fetch();
        if($account == null) {
            header("Location:./login.php");
        } else {
            $_SESSION["account"] = $account["student_id"];
            header("Location:/fullstack");
        }
    }
?>