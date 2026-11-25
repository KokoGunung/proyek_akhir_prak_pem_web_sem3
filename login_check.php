<?php 
    include "conn.php";
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $usr = $_POST["username"];
        $pw = $_POST["password"];
        if(empty(trim($usr)) || empty(trim($pw))){
            header("Location: login.php?status=frmfailed&usr=$usr");
            exit;
        }
        $stmt = $conn->prepare("select password from accounts where username=?");
        $stmt->bind_param("s", $usr);
        $stmt->execute();
        $stmt->bind_result($dbpw);
        if($stmt->fetch()){
            if($dbpw == $pw){
                session_start();
                $_SESSION["status"] = "active";
                $_SESSION["username"] = $usr;
                header("Location: index.php");
                exit;
            }else{
                header("Location: login.php?status=pwfailed&usr=$usr");
            }
        }else{
            header("Location: login.php?status=usrfailed&usr=$usr");
        }
        $stmt->close();
    }else{
        header("Location: login.php");
    }

?>