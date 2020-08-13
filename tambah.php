<?php 
	include "koneksi.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>

 <body style="min-height: 100vh; display:flex; justify-content: center; align-items: center">
 	<form method="post" style="width: 500px; margin: auto auto">
		<h1 class="mb-5 text-center">Form Input Data Siswa</h1>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input class="form-control" type="text" name="nama" placeholder="Nama">
		</div>
		<div class="form-group">
			<label for="nama">Nis</label>
			<input class="form-control" type="number" name="nis" placeholder="Nis">
		</div>
		<div class="form-group">
			<label for="nama">Jenis Kelamin</label>
			<select class="form-control" name="jenis_kelamin">
				<option value="Laki Laki">Laki Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div class="form-group">
			<label for="nama">Jurusan</label>
			<input class="form-control" type="text" name="jurusan" placeholder="Jurusan">
		</div>
		<div class="form-group">
			<label for="nama">Foto</label>
			<input class="form-control" type="text" name="foto" placeholder="Link Foto">
		</div>
 		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 	</form>
 	<?php 
 		if (isset($_POST['simpan'])) {
 			$nama = $_POST['nama'];
 			$nis = $_POST['nis'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$jurusan = $_POST['jurusan'];
			$foto = $_POST['foto'];
 			$tambah = mysqli_query($koneksi, "INSERT INTO data(nama,nis,jenis_kelamin,jurusan,foto)VALUES('$nama','$nis','$jenis_kelamin','$jurusan', '$foto')");
 		if ($tambah) {
 			?>
 			<script type="text/javascript">
 				alert('Tamabah Data Berhasil ');
 				document.location.href="index.php";
 			</script>
 			<?php
 		}
 		else{
 			echo "yahh gagal";
 		}
 		}
 	 ?>
 </body>
 </html>