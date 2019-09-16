<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM m_prodi WHERE id='$getID'");


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
			<legend>Form Ubah Prodi</legend>
			<input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
			Kode Prodi :<br>
			<input type="text" name="kd_prodi" value="<?= $getData[0]["kd_prodi"];?>"><br>
			Kode Jenis Prodi :<br>
			<input type="text" name="kd_jenis_prodi" value="<?= $getData[0]["kd_jenis_prodi"];?>"><br>
            Nama Prodi :<br>
			<input type="text" name="nm_prodi" value="<?= $getData[0]["nm_prodi"];?>"><br>
            Status Prodi :<br>
			<select name="status_prodi">
			<option selected="selected">Pilih Status Prodi..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			</select><br>
            Email Prodi :<br>
			<input type="text" name="email_prodi" value="<?= $getData[0]["email_prodi"];?>"><br>
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>