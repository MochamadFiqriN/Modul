<!DOCTYPE html>
<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>
<h2>Demo CRUD dengan Metode query()</h2>
<p><strong>Ubah Data</strong></p>

<form action="create" method="post">
	<?php echo $model->labels['kode']; ?><br />
	<input type="text" name="kode" size="10" maxlength="4" readonly value="<?php echo $model->kode; ?>" />
	<br /><br />

	<?php echo $model->labels['nama']; ?><br />
	<input type="text" name="nama" size="30" maxlength="25" value="<?php echo $model->nama; ?>" />
	<br /><br />

	<?php echo $model->labels['harga']; ?><br />
	<input type="text" name="harga" size="20" value="<?php echo $model->harga; ?>" />
	<br /><br />

	<?php echo $model->labels['stock']; ?><br />
	<input type="text" name="stock" size="10" value="<?php echo $model->stock; ?>" />
	<br /><br />

	<input type="submit" name="btnSubmit" value="Simpan" />
	<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
</form>

</body>
</html>