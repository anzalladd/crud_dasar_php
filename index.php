<?php 
	include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="7">
				<h3><center>DATA</center></h3>
				<a href="tambah.php" class="btn btn-primary ml-4 mb-4">Tambah</a>
			</td>
		</tr>
		<tr>
			<th class="text-center">NO</th>
			<th class="text-center">Nama</th>
			<th class="text-center">NIS</th>
			<th class="text-center">Jenis Kelamin</th>
			<th class="text-center">Jurusan</th>
			<th class="text-center">Foto</th>
			<th class="text-center">Action</th>
		</tr>
			<?php 
				$no = 1;
				$qry = mysqli_query($koneksi,"SELECT * FROM data");
				while($data = mysqli_fetch_array($qry)){

			 ?>
		<tr>
			<td class="text-center"><?php echo $no++; ?></td>
			<td class="text-center"><?php echo $data['nama']; ?></td>
			<td class="text-center"><?php echo $data['nis']; ?></td>
			<td class="text-center"><?php echo $data['jenis_kelamin']; ?></td>
			<td class="text-center"><?php echo $data['jurusan']; ?></td>
			<td class="text-center"><img src="<?php echo $data['foto']?>" alt="foto" class="my-5"></td>
			<td>
			<div class="text-center">
				<a onclick="return confirm('Yakin untuk menghapus ?')"
				href="hapus.php?id=<?php echo $data['id']; ?>" class="text-danger">Hapus Data</a>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
			</div>
			
		</td>
		</tr>

	<?php  

}
?>
	</table>
</body>
</html>