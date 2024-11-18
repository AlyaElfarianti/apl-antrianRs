<?php 
session_start();
include "lib/koneksi.php";
if (!isset($_SESSION['iduser'])) {
   include "login.php";
   exit();
} else {
    $sqluser = $conn->query("SELECT*FROM tbusers WHERE id='$_SESSION[iduser]'");
    $resultuser = $sqluser->fetch(PDO::FETCH_ASSOC);
    // Sekarang $resultuser dapat diakses sebagai array asosiatif
    // Contoh: echo $resultuser['username'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php 
     $page = isset ($_GET['page'])?$_GET['page']:null;
     if (isset($page)) {
      
      if ($page=='tambah') {
     include"modul/tambah.php";
      }
      if ($page=='daftar') {
        include"modul/daftar.php";
         }
             if($page=='keluar'){
                include"modul/keluar.php";
             }
      
}else{
      include"modul/default.php";
  }
?>

   
</body>
</html>

<?php } ?>