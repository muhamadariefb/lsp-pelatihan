<?php

require 'function.php';

if(isset($_POST["tambah"]))
{
	if(tambah($_POST)>0)
	{
		//echo "Berhasil!";
		echo "<script> alert('Data Berhasil Ditambahkan!');document.location.href='index.php';</script>";
	}
	else
	{
		//echo "Gagal!";
		echo "<script> alert('Data Gagal Ditambahkan!');document.location.href='index.php';</script>";
	}
}

?>

<html>
<head><title></title>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">

		<fieldset>
			<legend>Form Tambah Prodi</legend>
			Kode Prodi :<br>
			<input type="text" name="kd_prodi"><br>
			Kode Jenis Prodi :<br>
			<input type="text" name="kd_jenis_prodi"><br>
            Nama Prodi :<br>
			<input type="text" name="nm_prodi"><br>
            Status Prodi :<br>
			<select name="status_prodi">
			<option selected="selected">Pilih Status Prodi..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			</select><br>
            Email Prodi :<br>
			<input type="text" name="email_prodi"><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>