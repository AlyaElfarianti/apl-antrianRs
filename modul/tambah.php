
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Antrian</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f9;
}

.container {
    width: 80%;
    max-width: 400px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
}

/* Notifikasi */
.notification {
    background-color: #28a745;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    margin-bottom: 15px;
}

.form-container {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.form-container h3 {
    margin-bottom: 15px;
    color: #333;
}

.form-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.form-container input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.add-btn {
    background-color: #28a745;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    text-align: center;
}

.add-btn:hover {
    background-color: #218838;
}

/* Tombol Kembali */
.back-btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    text-align: center;
    margin-top: 10px;
}

.back-btn:hover {
    background-color: #0056b3;
}
</style>
<body>

<?php 
include 'lib/koneksi.php';

// Variabel untuk pesan notifikasi
$notif = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];
    
    $sql = "INSERT INTO antrian (nama_pasien, nomor_antrian, waktu_kedatangan)
            VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrian);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);
    
    if ($stmt->execute()) {
        $notif = 'Data berhasil ditambahkan!'; // Menampilkan pesan sukses
    } else {
        $notif = 'Gagal menambahkan data.';
    }
}
?>

<div class="container">
    <!-- Notifikasi jika data berhasil ditambahkan -->
    <?php if ($notif != ''): ?>
        <div class="notification">
            <?php echo $notif; ?>
        </div>
    <?php endif; ?>

    <!-- Form Tambah Data Antrian -->
    <form method="POST">
        <div class="form-container">
            <h3>Tambah Data Antrian</h3>
            <label for="nama">Nama Pasien:</label>
            <input type="text" name="nama_pasien" required>

            <label for="nomor">Nomor Antrian:</label>
            <input type="text" name="nomor_antrian" required>

            <label for="waktu">Waktu Kedatangan:</label>
            <input type="datetime-local" name="waktu_kedatangan" required>

            <button type="submit" class="add-btn">Tambah</button>
        </div>
    </form>

    <!-- Tombol Kembali -->
    <a href="index.php"><button class="back-btn">Kembali ke Halaman Utama</button></a>
</div>

</body>
</html>
