<?php

session_start();

if(isset($_SESSION["logged"]))
{
	header("Location:index.php");
	exit;
}

require "user/function.php";

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	//cek apakah ada user yang diinput
	$cek=mysqli_query($conn, "SELECT * FROM tbl_login WHERE username='$username'");

	//cek dan harus identik
	if(mysqli_num_rows($cek)===1)
	{
		//cek password
		$cekResult=mysqli_fetch_assoc($cek);

		//panggil fungsi untuk mengembalikan password menjadi string
		if(password_verify($password, $cekResult['password']))
		{
			$_SESSION["logged"]=true;
			$_SESSION["username"]=$cekResult['username'];

			if(isset($_POST['ingat_saya']))
			{
				setcookie('remember_id', $cekResult['id'], time()+3600);

				//enkripsi password
				setcookie('remember_key', hash('sha256', $cekResult['username']), time()+3600);

			}

			header("Location:index.php");
		
			//berhentikan fungsi
			exit;
		}

	}
	$error=true;
}
?>

<?php
if (isset($error)):?>
	<p style="color:red;font-style:italic;">Username / Password Salah!</p>
<?php endif;?>

<html>
<head><title></title></head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
	<center>
		<fieldset>
			<legend>Form Login</legend>
			Username :<br>
			<input type="text" name="username"><br>
			Password :<br>
			<input type="password" name="password"><br>
		</fieldset>
	<input type="submit" value="LOGIN" name="login">
	<input type="checkbox" name="ingat_saya" id="ingat_saya">Ingat Saya<br>
	<a href="user/register.php">Register User</a>
	</center>
	</form>
</body>
</html>