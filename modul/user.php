<?php 
include '../lib/koneksi.php';
?>

<div class="container">
<div class="row">
	<div class="col-sm-4">
		<form method="POST">
			<div class="mb-3">
				<label>Nama</label>
				<input type="text" name="nm" class="form-control">
			</div>

			<div class="mb-3">
				<label>Email</label>
				<input type="text" name="eml" class="form-control">
			</div>

           <div class="mb-3">
           	<button type="submit" name="btn" class="btn btn-success">Input Data</button>
           </div>
            

	    </form>

	<?php 
       if (isset($_POST['btn'])) {
        $username = $_POST['nm'];
        $email = $_POST['eml'];
        $sqluser = $conn->query("INSERT INTO tbusers (username,email)VALUES('$username','$email')");

        if ($sqluser){
       	echo"Data berhasil diinput";

       }else{
       	  print($conn->error);

       }


              }
	?>
 </div>

 <!---output---->
  <div class="col-sm-8">
  	<table class="table">
  		<thead>
  		<tr>
  			<th>No</th>
              <th>Nama</th>
  			<th>email</th>
            <th>Aksi</th>
  		</tr>
  		</thead>
  		<tbody>
  			<?php 
              $no = 1;
              $sqlOutUsers= $conn->query("SELECT*FROM tbusers");
              foreach ($sqlOutUsers as $dataResl) {
              ?>
           <tr>
           	<td><?=$no++?></td>
           	<td><?=$dataResl['username']?></td>
           	<td><?=$dataResl['email']?></td>  
               
           	<td>
			 <a class="btn btn-success btn-sm mb-2"href="?page=edituser&id=<?=$dataResl['id']?>">Edit</a> 
			 <a class="btn btn-danger btn-sm"href="?page=deluser&id=<?=$dataResl['id']?>">Delete</a></td>
           </tr>
 			
 			<?php
              }
  			?>
  		</tbody>
  	</table>
</div>

</div>
</div>
</div>
