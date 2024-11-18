<?php 
include '../lib/koneksi.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM antrian WHERE id=:id";
    $stmt = $conn->prepare($sql);
    
    try {
        $stmt->execute([':id' => $id]);
        // header('Location:daftar.php');
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

</body>
</html>
