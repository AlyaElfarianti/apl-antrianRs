<?php 
$host = "localhost";
$username = "root";
$pass = "123456789";
$dbname = "rumahsakit";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "koneksi berhasil";
}catch (PDOException $e){
    echo"koneksi gagal : ".$e->getMessage();
}

?>