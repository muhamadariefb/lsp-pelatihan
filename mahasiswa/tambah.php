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
			<legend>Form Tambah Mahasiswa</legend>
			NIM :<br>
			<input type="text" name="nim_mhs"><br>
			Kode Prodi :<br>
			<select name="kd_prodi">
            <option selected="selected">Pilih Kode Prodi..</option>
            <?php
            $query="SELECT * FROM m_prodi";
            $hasil=mysqli_query($conn, $query);
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <option value="<?php echo $data['kd_prodi']; ?>"><?php echo $data['kd_prodi'] ?></option>
            <?php } ?>
            </select><br>
			Nama Mahasiswa :<br>
			<input type="text" name="nm_mhs"><br>
            Tempat Lahir :<br>
			<input type="text" name="tempat_lhr_mhs"><br>
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
			<input type="date" name="tgl_lhr_mhs"><br>
			Jenis Kelamin :<br>
			<select name="jns_klmn_mhs">
			<option selected="selected">Pilih Jenis Kelamin..</option>
			<option value="L">L</option>
			<option value="P">P</option>
			</select><br>
            Tanggal Masuk :<br>
			<input type="date" name="tgl_msk_mhs"><br>
            Kode Status Mahasiswa :<br>
			<select name="kd_status_mhs">
			<option selected="selected">Pilih Kode Status..</option>
			<option value="AK">AK</option>
			<option value="TA">TA</option>
			</select><br>
            Alamat :<br>
			<input type="text" name="alamat_mhs"><br>
            Telepon :<br>
			<input type="text" name="tlp_mhs"><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>