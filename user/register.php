<?php

require 'function.php';

if(isset($_POST["tambah"]))
{
	if(register($_POST)>0)
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
			<legend>Form Tambah User</legend>
			Username :<br>
			<input type="text" name="username"><br>
			Password :<br>
			<input type="password" name="password"><br>
			Konfirmasi Password :<br>
			<input type="password" name="konfirmasiPassword"><br>
			</select><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>