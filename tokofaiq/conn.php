<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "tokofaiq";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("koneksi tidak berhasil");
}
?>