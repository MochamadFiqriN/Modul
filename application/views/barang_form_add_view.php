<!DOCTYPE html>
<html>
<head>
	<title>Demo Menambah Baris Data</title>
</head>
<body>
<h2>Demo Menambah Baris Data</h2>

<form action="barang/index" method="post">
<?php echo $model->labels['kode'];?><br/>
<input type="text" name="kode" size="10" /><br/><br/>

<?php echo $model->labels['nama'];?><br/>
<input type="text" name="nama" size="30" /><br/><br/>

<?php echo $model->labels['harga'];?><br/>
<input type="text" name="harga" size="20" /><br/><br/>

<?php echo $model->labels['stock'];?><br/>
<input type="text" name="stock" size="20" /><br/><br/>

<input type="submit" name="btnSubmit" value="Tambah" />
</form>

</body>
</html>