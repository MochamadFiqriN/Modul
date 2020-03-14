<!DOCTYPE html>
<html>
<head>
	<title>Demo Metode Row_array()</title>
</head>
<body>
<h2>Demo Metode row_array()</h2>

<p>Data yang terdapat pada tabel barang.</p>

<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Stock</th>
	</tr>


	<?php
	if ($query->num_rows()>0) {
		//mengambil baris pertama
		$row = $query->row_array();
		//perbedaan antara row biasa dan row array ada di baris atas dan bawahnya
		?>
		<tr>
			<td><?php echo $row['kode']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['harga']; ?></td>
			<td><?php echo $row['stock']; ?></td>
		</tr>

		<?php
	}
	?>
</table>

<p>Data yang terdapat baris ketiga tabel barang.</p>

<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Stock</th>
	</tr>

	<?php
	if ($query->num_rows()>0) {
		//mengambil baris pertama
		$row = $query->row_array(2);
		//perbedaan antara row biasa dan row array ada di baris atas dan bawahnya
		?>
		<tr>
			<td><?php echo $row['kode']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['harga']; ?></td>
			<td><?php echo $row['stock']; ?></td>
		</tr>

		<?php
	}
	?>

</body>
</html>