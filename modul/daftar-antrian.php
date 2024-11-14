<?php 
 include '../lib/koneksi.php';

 $sql = "SELECT *FROM antrian";
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
<body>
    
</body>
</html>

<a href="?page=daftar"><table>   <!----daftar-antrian-rs----->
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
    <tr>
        <td>1</td>
        <td>Pasien A</td>
        <td>A001</td>
        <td>08:30</td>
        <td class="status">Belum Dilayani</td>
        <td>
            <button class="edit-btn">
            <a class="btn btn-success btn-sm mb-2"href="?page=ubah&id=<?=$dataResl['id']?>">Ubah Status</a></button>
            <button class="delete-btn">
            <a class="btn btn-success btn-sm mb-2"href="?page=delete&id=<?=$dataResl['id']?>">Delete</button>
        </td>
    </tr>
    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
</tbody>
</table>

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
            <td><a href='status-pasien.php?id=".$row["id"]."'>
            Ubah Status</a> |
            <a href='delete-antrian.php?id=".$row["id"]."'>
            Hapus</a> </td>
        </tr>";
        $no++;
    }
  echo"<table>";
 }else{
    echo "tidak ada antrian";
 }

 $conn = null;

?>