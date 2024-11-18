<?php
     include"modul/default.php";
      include 'lib/koneksi.php';

 $sql = "SELECT *FROM antrian ORDER BY id DESC";
 $stmt = $conn->prepare($sql);
 $stmt->execute();

 echo"<h2> Daftar Antrian Pasien </h2>";
 echo "<table border='1'>"
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
h2{
    font-family:Times New Roman;
    margin-bottom:20px;
    margin-top:10px;

}
/* Style dasar untuk tombol */
button {
    border: none;
    cursor: pointer;
    font-size: 14px;
    padding: 8px 16px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

/* Style untuk link di dalam tombol */
button a {
    text-decoration: none;
    color: white; /* Warna teks putih untuk kontras */
}

/* Warna latar belakang untuk tombol Ubah Status */
button a[href*="status"] {
    color: #007bff; /* Latar belakang biru */
}

/* Warna latar belakang untuk tombol Hapus */
button a[href*="delete"] {
    color: #dc3545; /* Latar belakang merah */
}

/* Efek hover untuk tombol Ubah Status */
button a[href*="status"]:hover {
    color: #0056b3; /* Biru lebih gelap saat hover */
}

/* Efek hover untuk tombol Hapus */
button a[href*="delete"]:hover {
    color: #c82333; /* Merah lebih gelap saat hover */
}


/* Style untuk tabel */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Style untuk header tabel */
thead th {
    background-color: #007bff; /* Warna biru untuk header */
    color: white;
    padding: 12px;
    text-align: center;
    font-size: 14px;
}
td{
    font-family:Pacifico;
}
th{
    font-family:serif;
}
/* Style untuk baris tabel */
tbody tr {
    border-bottom: 1px solid #ddd; /* Garis pemisah antar baris */
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9; /* Warna abu-abu muda untuk baris genap */
}

/* Style untuk sel dalam tabel */
td, th {
    padding: 12px;
}

/* Efek hover untuk baris tabel */
tbody tr:hover {
    background-color: #f1f1f1; /* Warna abu-abu terang saat di-hover */
}

/* Style untuk kolom "Action" */
td:last-child {
    text-align: center; /* Rata tengah untuk kolom aksi */
}

/* Style border tabel */
table, th, td {
    border: 1px solid #ddd;
    border-radius: 4px;
}


</style>
<body>


<table >   
<thead>

    <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Nomor Antrian</th>
        <th>Waktu Kedatangan</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
<?php
 $antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);

 if (count($antrian) > 0){
    $no = 1;
    foreach ($antrian as $row){
        echo "<tr>
        <td>".$no."</td>
         <td>".$row["nama_pasien"]."</td>
          <td>".$row["nomor_antrian"]."</td>
           <td>".$row["waktu_kedatangan"]."</td>
            <td>".$row["status"]."</td>

            <td>
            <button>
            <a href='modul/status.php?id=".$row["id"]."'>
            Ubah Status</a></button>|

            <button>
            <a href='modul/delete.php?id=".$row["id"]."'>
            Hapus</a></button> 
            
            </td>
        </tr>";
        $no++;
    }
  echo"<table>";
 }else{
    echo "tidak ada antrian";
 }

 $conn = null;

?>

</tbody>
</table>


</body>
</html>