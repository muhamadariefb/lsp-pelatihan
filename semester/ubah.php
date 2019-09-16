<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM m_semester WHERE id='$getID'");


if(isset($_POST["ubah"]))
{
	if(ubah($_POST)>0)
	{
		//echo "Berhasil!";
		echo "<script> alert('Data Berhasil Diubah!');document.location.href='index.php';</script>";
	}
	else
	{
		//echo "Gagal!";
		echo "<script> alert('Data Gagal Diubah!');document.location.href='index.php';</script>";
	}
}

?>

<html>
<head><title></title>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">

		<fieldset>
			<legend>Form Ubah Semester</legend>
			<input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
			Kode Semester :<br>
			<input type="text" name="kd_semester" value="<?= $getData[0]["kd_semester"];?>"><br>
			Keterangan Semester :<br>
			<select name="ket_semester">
			<option selected="selected">Pilih Ket. Semester</option>
			<option value="Ganjil">Ganjil</option>
			<option value="Genap">Genap</option>
			</select><br>
            Tahun :<br>
			<input type="text" name="thn_semester" value="<?= $getData[0]["thn_semester"];?>"><br>
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>