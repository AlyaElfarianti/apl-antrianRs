<?php 
include '../lib/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM antrian WHERE id=:id";
    $stmt = $conn->prepare($sql);
    
    try {
        $stmt->execute([':id' => $id]);
        echo "Data antrian berhasil dihapus";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Tidak perlu $conn->close(), PDO akan otomatis menutup koneksi
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
