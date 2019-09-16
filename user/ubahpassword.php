<?php

session_start();

require 'function.php';

if(isset($_POST["ubahpassword"]))
{
	if(ubahpassword($_POST))
	{
		echo "<script> alert('Password Berhasil Diubah!');document.location.href='../logout.php';</script>";
	}
	else
	{
		echo "<script> alert('Password Gagal Diubah!');document.location.href='ubahpassword.php';</script>";
	}
}

?>

<html>
<head><title></title>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Form Ubah Password</legend>
			Username :<br>
			<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
			Password Lama :<br>
			<input type="password" name="password_lama"><br>
            Password Baru :<br>
			<input type="password" name="password_baru"><br>
			Konfirmasi Password :<br>
			<input type="password" name="konfirmasiPassword"><br>
		</fieldset>
	<input type="submit" value="Ubah Password" name="ubahpassword">
	<input type="reset" value="Hapus">
	</form>
</body>
</html>