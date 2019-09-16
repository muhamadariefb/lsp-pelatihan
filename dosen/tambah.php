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
			<legend>Form Tambah Dosen</legend>
			Kode Dosen :<br>
			<input type="text" name="kd_dosen"><br>
			Nama Dosen :<br>
			<input type="text" name="nm_dosen"><br>
            NIDN :<br>
			<input type="text" name="nidn_dosen"><br>
            Jenis Kelamin :<br>
			<select name="jns_klmn_dosen">
			<option selected="selected">Pilih Jenis Kelamin..</option>
			<option value="L">L</option>
			<option value="P">P</option>
			</select><br>
            Kode Jabatan :<br>
			<select name="kd_jabatan_dosen">
			<option selected="selected">Pilih Kode Jabatan..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			</select><br>
            Status Dosen :<br>
			<select name="status_dosen">
			<option selected="selected">Pilih Status Dosen..</option>
			<option value="Aktif">Aktif</option>
			<option value="Tidak Aktif">Tidak Aktif</option>
			</select><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>