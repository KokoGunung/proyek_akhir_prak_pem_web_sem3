<?php
    include "conn.php";
    session_start();
    $usr = $_SESSION["username"];
    $query = mysqli_query($conn, "delete from accounts where username='$usr'");
    header("Location: login.php");
?>