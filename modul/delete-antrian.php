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
