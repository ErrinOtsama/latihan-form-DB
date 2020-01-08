<?php
	include('koneksi.php');

$query= "SELECT * FROM tb_pengurus";
$data= mysqli_query($conn,$query); 


?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

<div  class="container">
	<div class="row">
		<div class="col-sm-6">
			<h2 class="text-center">Data Pengurus</h2>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">NAMA</th>
						<th scope="col">ALAMAT</th>
						<th scope="col">GENDER</th>
						<th scope="col">GAJI</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					while($row=mysqli_fetch_assoc($data)){
						?>
					<tr>
						<td><?php echo $row['id']; ?></td>
		                <td><?php echo $row['nama']; ?></td>
		                <td><?php echo $row['alamat']; ?></td>
		                <td><?php echo $row['gender']; ?></td>
		                <td><?php echo $row['gaji']; ?></td>
					</tr>
					<?php
				    }?>
			</table>
		</div>
		<div class="col-sm-6">
			<h2 class="text-center">Input Data</h2>
			<form method="post" action="simpan_data.php">
				<div class="form-group">
					<label>ID</label>
				    <input type="number" name="id" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="col-form-label">NAMA</label>
				    <input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label class="col-form-label">ALAMAT</label>
				    <textarea name="alamat" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label class="col-form-label">GENDER</label>
					<div class="form-check form-check-inline">
						<input type="radio" name="gender" value="L" class="form-check-input">
						<label class="form-check-label">Laki-Laki</label>   
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" name="gender" value="P"class="form-check-input">
						<label class="form-check-label">Perempuan</label>  
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">GAJI</label>
					<input type="number" name="gaji" class="form-control">
				</div>
				<button type="submit" class="btn btn-lg btn-block btn-outline-primary">simpan</button>
				<button type="reset" class="btn btn-lg btn-block btn-outline-danger">batal</button>
			</form>
		</div>
	</div>
</div>
	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>