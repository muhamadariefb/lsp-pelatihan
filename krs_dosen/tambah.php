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
			<legend>Form Tambah KRS Dosen</legend>
            ID KRS Dosen : <br>
            <input type="text" name="id_krs_dosen"><br>
            Kode Dosen : <br>
            <select name="kd_dosen">
            <option selected="selected">Pilih Dosen..</option>
            <?php
            $query="SELECT * FROM m_dosen";
            $hasil=mysqli_query($conn, $query);
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <option value="<?php echo $data['kd_dosen']; ?>"><?php echo $data['kd_dosen'] ?></option>
            <?php } ?>
            </select><br>
            Hari Mengajar : <br>
            <input type="text" name="hari_mengajar"><br>
            Waktu Mengajar : <br>
            <input type="time" name="waktu_mengajar"><br>
            Kelas Mengajar : <br>
            <input type="text" name="kelas_mengajar"><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>