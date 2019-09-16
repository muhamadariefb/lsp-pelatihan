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
			<legend>Form Tambah Mata Kuliah</legend>
			Kode Mata Kuliah :<br>
			<input type="text" name="kd_matakuliah"><br>
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
            Nama Mata Kuliah :<br>
			<input type="text" name="nm_matakuliah"><br>
            Jumlah SKS Mata Kuliah :<br>
			<input type="text" name="jml_sks_matakuliah"><br>
            Semester Mata Kuliah :<br>
			<select name="smt_matakuliah">
			<option selected="selected">Pilih Semester Matkul..</option>
			<option value="Ganjil">Ganjil</option>
			<option value="Genap">Genap</option>
			</select><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>