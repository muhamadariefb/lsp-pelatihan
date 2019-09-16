<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM m_mata_kuliah WHERE id='$getID'");


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
			<legend>Form Ubah Mata Kuliah</legend>
			<input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
			Kode Mata Kuliah :<br>
			<input type="text" name="kd_matakuliah" value="<?= $getData[0]["kd_matakuliah"];?>"><br>
			Kode Prodi :<br>
			<input type="text" name="kd_prodi" value="<?= $getData[0]["kd_prodi"];?>"><br>
            Nama Mata Kuliah :<br>
			<input type="text" name="nm_matakuliah" value="<?= $getData[0]["nm_matakuliah"];?>"><br>
            Jumlah SKS Mata Kuliah :<br>
			<input type="text" name="jml_sks_matakuliah" value="<?= $getData[0]["jml_sks_matakuliah"];?>"><br>
            Semester Mata Kuliah :<br>
			<select name="smt_matakuliah">
			<option selected="selected">Pilih Semester Matkul..</option>
			<option value="Ganjil">Ganjil</option>
			<option value="Genap">Genap</option>
			</select><br>
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>