<!DOCTYPE html>
<html>
<head>
	<title>Demo Metode Result</title>
</head>
<body>
<h2>Demo Metode result</h2>

<p>Data yang terdapat pada tabel barang.</p>

<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Stock</th>
	</tr>

	<?php
	foreach ($query->result() as $row ) {
		?>
		<tr>
			<td>:<?php echo $row->kode; ?></td>
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