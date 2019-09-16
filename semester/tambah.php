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
			<legend>Form Tambah Semester</legend>
			Kode Semester :<br>
			<input type="text" name="kd_semester"><br>
			Keterangan Semester :<br>
			<select name="ket_semester">
			<option selected="selected">Pilih Ket. Semester</option>
			<option value="Ganjil">Ganjil</option>
			<option value="Genap">Genap</option>
			</select><br>
            Tahun :<br>
			<input type="text" name="thn_semester"><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>