<?php
    session_start();
    $_SESSION["nama"] = $_Get["txtNama"];
    $_SESSION["email"] = $_Get["txtEmail"];
    $_SESSION["pesan"] = $_Get["txtPesan"];
    header( "location: get.php")
?>