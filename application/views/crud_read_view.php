<!DOCTYPE html>
<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>
<h2>Demo CRUD dengan Metode query()</h2>
<p><a href="create">Tambah</a></p>
<table border="1">
	<tr>
		<th width="80">Kode</th>
		<th width="120">Nama</th>
		<th width="100">Harga</th>
		<th width="80">Stock</th>
		<th width="100">Ubah</th>
		<th width="100">Hapus</th>
	</tr>
	<?php
	foreach ($rows as $row) {
		?>
		<tr>
			<td><?php echo $row->kode; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->harga; ?></td>
			<td><?php echo $row->stock; ?></td>
			<td align="center">
				<a href="update/<?php echo $row->kode; ?>">Ubah</a>
			</td>
			<td align="center">
				<a href="delete/<?php echo $row->kode; ?>">Hapus</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
</body>
</html>