<?php 
 include '../lib/koneksi.php';

 if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "UPDATE antrian SET status = 'selesai' WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    if ($stmt->execute()){
        echo"Status pasien berhasil diubah menjadi selesai";
    }else{
        echo"Error: gagal mengubah status";
    }
 }
 $conn = null;
?>