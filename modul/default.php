



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

.data-table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
}

.data-table thead {
    background-color: #3498db;
    color: white;
}

.data-table th, .data-table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

.edit-button, .delete-button {
    padding: 5px 10px;
    border: none;
    color: white;
    border-radius: 3px;
    cursor: pointer;
}

.edit-button {
    background-color: #3498db;
}

.delete-button {
    background-color: #e74c3c;
}

.edit-button:hover {
    background-color: #2980b9;
}

.delete-button:hover {
    background-color: #c0392b;
}
header h1{
    teks-align:center;
}

</style>

<body>

    <!-- <div class="container"><!--tambah data-antrian--->
        <!-- <h2>Antrian Pasien</h2>
        <a href="?page=tambah"><button class="add-btn"> + Tambah Data Antrian
        </a>
        </button>

        
        </a> -->
    <!-- </div> --> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p class="atas"></p>
    <div class="sidebar">
        <h2>Admin Antrian-Rs</h2>
        <p>Administrator - Online</p>
        <nav>
            <ul>
                <ul>
                    <li><a href="?page=tambah"><button class="add-button">Tambah Data Antrian</button></a></li>
                    <li><a href="?page=daftar" class="active">Daftar Antrian</a></li>
                </ul>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <header>
            <h1>Jenjang</h1>
        </header>
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
    </div> -->
</body>
</html>

</body>
</html>
