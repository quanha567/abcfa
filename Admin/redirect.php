<?php 
    session_start();
    include('../Model/database.php');
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $pass = $_POST["password"];
        $sql = "SELECT * FROM admins WHERE username='$username' and pass='$pass' LIMIT 1";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $admin = $stmt->fetch();
        if($admin == null) {
            header("Location:login.php");
            // echo $sql;
        } else {
            $_SESSION["admin"] = $admin["admin_id"];
            header("Location:/fullstack/Admin");
        }
    }
?>