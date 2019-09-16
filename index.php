<?php
session_start();

if(!isset($_SESSION["logged"]) && !isset($_COOKIE['remember_id']) && !isset($_COOKIE['remember_key']))
{
	header("Location:login.php");
	exit;
}
else if(isset($_COOKIE['remember_id']) && isset($_COOKIE['remember_key']))
{
	include "setcookie.php";
}


?>

<html>
 <head>
  <title></title>
 </head>
<body>
	<h2> LSP Pelatihan </h2>
	<?php echo $_SESSION['username'];?>
	<a href="user/ubahpassword.php"> | Ubah Password | </a>
	<a href="logout.php" onClick = "return confirm('Apakah Anda yakin ingin logout?')"> Logout </a>
	<ul>
		<li><a href="user/">User</a></li>
		<li><a href="dosen/">Dosen</a></li>
    	<li><a href="mahasiswa/">Mahasiswa</a></li>
        <li><a href="semester/">Semester</a></li>
        <li><a href="prodi/">Prodi</a></li>
        <li><a href="matakuliah/">Mata Kuliah</a></li>
        <li><a href="nilai/">Nilai</a></li>
		<li><a href="krs_mhs/">KRS Mahasiswa</a></li>
		<li><a href="krs_dosen/">KRS Dosen</a></li>
  	</ul>
</body>
</html>
