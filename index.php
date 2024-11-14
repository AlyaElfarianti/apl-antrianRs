<?php 
session_start();
include "lib/koneksi.php";

//if (!isset($_SESSION['user_id'])) {
  //  include "login.php";
//} else {
    //$sqluser = $conn->query("SELECT * FROM tbusers WHERE id='$_SESSION[user_id]'");
    //$resultuser = $sqluser->fetch_array();

    // Sekarang $resultuser dapat diakses sebagai array asosiatif
    // Contoh: echo $resultuser['username'];
//}
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
        include"modul/daftar-antrian.php";
         }
   


}else{
      include"modul/default.php";
  }
?>

    
</body>
</html>
