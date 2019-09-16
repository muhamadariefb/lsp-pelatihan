<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM m_mahasiswa WHERE id='$getID'");


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
			<legend>Form Ubah Data Mahasiswa</legend>
            <input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
			NIM :<br>
            <input type="text" name="nim_mhs" value="<?= $getData[0]["nim_mhs"];?>"><br>
			Kode Prodi :<br>
            <input type="text" name="kd_prodi" value="<?= $getData[0]["kd_prodi"];?>"><br>
			Nama Mahasiswa :<br>
			<input type="text" name="nm_mhs" value="<?= $getData[0]["nm_mhs"];?>"><br>
            Tempat Lahir :<br>
            <input type="text" name="tempat_lhr_mhs" value="<?= $getData[0]["tempat_lhr_mhs"];?>"><br>
            Agama :<br>
			<select name="agama">
			<option selected="selected">Pilih Agama..</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Katholik">Katholik</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddha">Buddha</option>
            </select><br>
            Tanggal Lahir :<br>
            <input type="date" name="tgl_lhr_mhs" value="<?= $getData[0]["tgl_lhr_mhs"];?>"><br>
            Jenis Kelamin :<br>
			<select name="jns_klmn_mhs">
			<option selected="selected">Pilih Jenis Kelamin..</option>
			<option value="L">L</option>
			<option value="P">P</option>
			</select><br>
            Tanggal Masuk :<br>
            <input type="date" name="tgl_msk_mhs" value="<?= $getData[0]["tgl_msk_mhs"];?>"><br>
            Kode Status Mahasiswa :<br>
			<select name="kd_status_mhs">
			<option selected="selected">Pilih Kode Status..</option>
			<option value="AK">AK</option>
			<option value="TA">TA</option>
			</select><br>
            Alamat :<br>
            <input type="text" name="alamat_mhs" value="<?= $getData[0]["alamat_mhs"];?>"><br>
            Telepon :<br>
            <input type="text" name="tlp_mhs" value="<?= $getData[0]["tlp_mhs"];?>"><br>
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>