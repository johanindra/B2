<?php
$host = "localhost";
$username = "tifz1761_root"; 
$password = "tifnganjuk123"; 
$database = "tifz1761_elades";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>