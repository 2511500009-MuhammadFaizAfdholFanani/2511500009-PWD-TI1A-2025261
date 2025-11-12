<?php
session_start();

$sesnim = $_POST["txtNim"];
$sesnamalengkap = $_POST["txtNamaLengkap"];
$sestempatlahair = $_POST["txtTempatLahir"];
$sestanggalahir = $_POST["txtTanggalLahir"];
$seshobi = $_POST["txtHobi"];
$sespasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtPekerjaan"];
$sesnamaorangtua = $_POST["txtNamaOrangTua"];
$sesnamakakak = $_POST["txtNamaKakak"];
$sesnamaadik = $_POST["txtNamaAdik"];

$_SESSION["sesNim"] = $sesnim;
$_SESSION["sesNamaLengkap"] = $sesnamalengkap;
$_SESSION["sesTempatLahir"] = $sestempatlahir;
$_SESSION["sesTanggalLahir"] = $sestanggallahir;
$_SESSION["sesHobi"] = $seshobi;
$_SESSION["sesPasangan"] = $sespasangan;
$_SESSION["sesPekerjaan"] = $sespekerjaan;
$_SESSION["sesNamaOrangTua"] = $sesnamaorangtua;
$_SESSION["sesNamaKakak"] = $sesnamakakak;
$_SESSION["sesNamaAdik"] = $sesnamaadik;
header("location: index.php");
?>