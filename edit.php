<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$qry = mysqli_query($koneksi,"SELECT * FROM data WHERE id='$id'");
	$data = mysqli_fetch_array($qry);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
 </head>
 <body>
 	<form method="post">
 		<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
 		<br>
 		<textarea name="alamat"><?php echo $data['alamat']; ?></textarea>
 		<br>
 		<input type="number" name="telepon" value="<?php echo $data['telepon']; ?>">
 		<br>
 		<input type="submit" name="edit" value="Update">
 	</form>
 	<?php 
 		if (isset($_POST['edit'])) {
 			$nama = $_POST['nama'];
 			$alamat = $_POST['alamat'];
 			$telepon = $_POST['telepon'];
 			$tambah = mysqli_query($koneksi, "UPDATE data SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id='$id'");
 		if ($tambah) {
 			?>
 			<script type="text/javascript">
 				alert('Update Berhasil ');
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