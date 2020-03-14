<!DOCTYPE html>
<html>
<head>
	<title>Demo Metode affected_rows()</title>
</head>
<body>
<h2>Demo Metode affected_rows()</h2>

<p>
<?php echo $n . ' ';?>
baris data telah ditambahkan ke dalam tabel barang
</p>

<table border ="1">
	<tr>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Stock</th>
	</tr>
	<?php
	foreach ($query->result() as $row) {
		?>
		<tr>
			<td><?php echo $row->kode; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->harga; ?></td>
			<td><?php echo $row->stock; ?></td>
		</tr>
		<?php
	}
	?>
</table>

</body>
</html>