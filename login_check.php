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
            $stmt->close();
            if($dbpw == $pw){
                session_start();
                $query_saldo = mysqli_query($conn, "select * from accounts where username='$usr'");
                $query_stasiun = mysqli_query($conn, "select * from stasiun");
                $usr_data = mysqli_fetch_array($query_saldo);
                $_SESSION["status"] = "active";
                $_SESSION["id"] = (int) $usr_data["id"];
                $_SESSION["username"] = $usr_data["username"];
                $_SESSION["saldo"] = (int) $usr_data["saldo"];
                $_SESSION["stasiun"] = mysqli_fetch_all($query_stasiun, MYSQLI_ASSOC);
                header("Location: index.php");
                exit;
            }else{
                header("Location: login.php?status=pwfailed&usr=$usr");
                exit;
            }
        }else{
            header("Location: login.php?status=usrfailed&usr=$usr");
            exit;
        }
        $stmt->close();
    }else{
        header("Location: login.php");
    }

?>