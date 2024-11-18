<?php 
 include '../lib/koneksi.php';
//  include"../modul/default.php";

 if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "UPDATE antrian SET status = 'selesai' WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    if ($stmt->execute()){
        // header('Location:in.php');
        exit();

        echo"Status pasien berhasil diubah menjadi selesai";
    }else{
        echo"Error: gagal mengubah status";
    }
 }
 $conn = null;




// include '../lib/koneksi.php';

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $sql = "UPDATE antrian SET status = 'Selesai' WHERE id = :id";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':id', $id, PDO::PARAM_INT);

//     if ($stmt->execute()) {
//         header("Location: .php?status=success");
//         exit;
//     } else {
//         header("Location: daftar.php?status=error");
//         exit;
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <!-- Notifikasi -->

        <!-- Tombol Kembali -->
        <a href="daftar.php" class="btn btn-primary">Kembali ke Daftar</a>
     
    </div>
</body>
</html>
