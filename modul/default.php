



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

/* * {
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
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.add-btn {
    background-color: #28a745;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #f4f4f9;
    color: #333;
}

.status {
    color: #dc3545;
}

.edit-btn {
    background-color: #007bff;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 5px;
}

.delete-btn {
    background-color: #dc3545;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.status.selesai {
    color: #28a745;
} */



* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    height:600px;
}

.sidebar h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.sidebar p {
    font-size: 14px;
    color: #7f8c8d;
}

.sidebar nav ul {
    list-style-type: none;
}

.sidebar nav ul ul {
    padding-left: 20px;
    margin-top: 10px;
}

.sidebar nav ul li {
    margin: 15px 0;
}

.sidebar nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}



.main-content {
    flex-grow: 1;
    padding: 20px;
    background-color: #ecf0f1;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 24px;
}

.add-button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

.add-button:hover {
    background-color: #218838;
}
/* Background minimalis */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height:100px;
  background-color: #f0f4f8; /* Warna abu-abu terang */
}

/* Konten di tengah */
.content {
  text-align: center;
}

/* Nama */
.name {
  font-size: 2rem;
  font-weight: bold;
  color: #333; /* Warna teks abu gelap */
  display: flex;
  align-items: center;
  gap: 10px;
  justify-content: center;
  border-bottom: 2px solid #007bff; /* Garis bawah biru formal */
  padding-bottom: 10px;
}

/* Ikon */
.name  {
  font-size: 2rem; /* Ukuran ikon kecil */
  color: #007bff; /* Warna ikon sama dengan garis */
}
btn{
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    float:right; 
}



</style>

<body>

    <!-- <div class="container"><tambah data-antrian--->
        <!-- <h2>Antrian Pasien</h2>
        <a href="?page=tambah"><button class="add-btn"> + Tambah Data Antrian
        </a>
        </button>

        
        </a> -->
    <!-- </div> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p class="atas"></p>
    <div class="sidebar">
        <h2>Admin Antrian-Rs</h2>
        <center><h3><?=$resultuser['username']?></h3></center>
        <nav>
            <ul>
                <ul>
                    <li><a href="?page=tambah"><button class="add-button">Tambah Data Antrian</button></a></li>
                    <li><a href="?page=daftar" class="active">Daftar Antrian</a></li>
                    <li><a href="?page=keluar"><button class="add-button">logout</button></a></li>
                </ul>
            </ul>
        </nav>
    </div>
    <div class="main-content">
    <div class="container">
  <div class="content">
    <p class="name">
      <i class="fas fa-hospital-symbol">Layanan RS
    </p>
  </div>
</div>


        <!-- <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jenjang</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SMP</td>
                    <td>Sekolah Menengah Pertama</td>
                    <td>-</td>
                    <td>
                        <button class="edit-button">Edit</button>
                        <button class="delete-button">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table> -->
    <!-- </div> --> 
</body>
</html>

</body>
</html>
