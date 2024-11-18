<?php 
  include 'lib/koneksi.php';
 //n lupa untuk memulai sesi jika Anda menggunakan $_SESSION
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style type="text/css">
	form {
      width: 500px;
      margin-left: 400px;
      margin-top: 50px;
   }
 button {
   width: 500px;
 }
 p {
 	margin-top: 20px;
 }
</style>

<form method="POST">
	<div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter nama" name="username" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>

    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($_POST['btn'])) {
    // Periksa apakah input diisi
        $nama = $_POST['username'];
        $email = $_POST['email'];

        // Siapkan query dengan parameter untuk menghindari SQL Injection
        $sqlclients = $conn->query("SELECT * FROM tbusers WHERE username = '$nama' AND email = '$email'");
        $sqlclients->bindParam(':username', $nama);
        $sqlclients->bindParam(':email', $email);

        // Eksekusi query dan cek hasilnya
        if ($sqlclients->execute()) {
            if ($sqlclients->rowCount() > 0) {
                $result = $sqlclients->fetch(PDO::FETCH_ASSOC);

                // Simpan data user dalam sesi
                $_SESSION['iduser'] = $result['id'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['email'] = $result['email'];

                header('Location: index.php');
                exit;
            } else {
                echo "<p class='text-danger'>User tidak ditemukan.</p>";
            }
        } else {
            echo "<p class='text-danger'>Kesalahan dalam query.</p>";
        }
    
    } else {
        // echo "<p class='text-danger'>Harap isi semua kolom.</p>";
    }
?>
</body>
</html>
