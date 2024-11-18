<?php 
include 'lib/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .form-container label {
            font-weight: bold;
            color: #555;
        }

        .form-container .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .form-container .btn-primary:hover {
            background-color: #0056b3;
        }

        table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        table th {
            background-color: #007bff;
            color: #ffffff;
        }

        table td, table th {
            text-align: center;
            padding: 10px;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-container">
                <h2>Buat Akun</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="nm" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nm" name="nm" placeholder="Masukkan nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="eml" class="form-label">Email</label>
                        <input type="email" class="form-control" id="eml" name="eml" placeholder="Masukkan email" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="btn" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
                <?php 
                if (isset($_POST['btn'])) {
                    $username = $_POST['nm'];
                    $email = $_POST['eml'];

                    // Query untuk memasukkan data ke database
                    $sqluser = $conn->query("INSERT INTO tbusers (username, email) VALUES ('$username', '$email')");

                    if ($sqluser) {
                        echo "<div class='alert alert-success mt-3'>Data berhasil diinput. Mengarahkan ke halaman login...</div>";
                        echo "<script>
                            setTimeout(function() {
                                window.location.href = 'login.php';
                            }, 2000);
                        </script>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error: {$conn->error}</div>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $sqlOutUsers = $conn->query("SELECT * FROM tbusers");
                    foreach ($sqlOutUsers as $dataResl) {
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $dataResl['username'] ?></td>
                        <td><?= $dataResl['email'] ?></td>  
                        <td>
                            <a class="btn btn-success btn-sm mb-2" href="?page=edituser&id=<?= $dataResl['id'] ?>">Edit</a> 
                            <a class="btn btn-danger btn-sm" href="?page=deluser&id=<?= $dataResl['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
