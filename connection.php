<?php
$server = "localhost";
$k_ime = "root";
$sifra = "";
$baza = "citrus";

$conn = new mysqli($server, $k_ime, $sifra, $baza);
$conn->set_charset("utf8");

if ($conn->connect_error) {

	die("No connection: "  .$conn->connect_error);

}



 ?>
