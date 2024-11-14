<?php 
  include 'lib/koneksi.php';
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
	form{
      width: 500px;
      margin-left: 400px;
      margin-top:50px;
   }
 button{
   width: 500px;
 }
 p{
 	margin-top: 20px;
 }
</style>


<form method="POST">
	<div class="mb-3 mt-3">
    <label for="nama" class="form-label">Nama:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter nama" name="username">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>


  <button type="submit"  name="btn" class="btn btn-primary">Submit</button>

</form>
<?php

if (isset($_POST['btn'])) {
    $nama = $_POST['username'];
    $email = $_POST['email'];

    // Siapkan query dengan parameter untuk menghindari SQL Injection
    $sqlclients = $conn->prepare("SELECT * FROM tbusers WHERE username = :username AND email = :email");
    $sqlclients->bindParam(':username', $nama);
    $sqlclients->bindParam(':email', $email);

    // Eksekusi query dan cek hasilnya
    if ($sqlclients->execute()) {
        $row = $sqlclients->rowCount();

        if ($row > 0) {
            $result = $sqlclients->fetch(PDO::FETCH_ASSOC);

            // Simpan id user dan username dalam session
            session_start();
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['username'] = $result['username'];
            
            header('Location: index.php');
            exit;
        } else {
            echo "User tidak ditemukan.";
        }
    } else {
        // Tampilkan error jika query gagal
        print_r($sqlclients->errorInfo());
    }
}
?>



 
</body>
</html>