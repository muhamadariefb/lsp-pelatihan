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
			<legend>Form Tambah Nilai</legend>
			Kode Semester :<br>
            <select name="kd_semester">
            <option selected="selected">Pilih Semester..</option>
            <?php
            $query="SELECT * FROM m_semester";
            $hasil=mysqli_query($conn, $query);
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <option value="<?php echo $data['kd_semester']; ?>"><?php echo $data['kd_semester'] ?></option>
            <?php } ?>
            </select><br>
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
            NIM Mahasiswa : <br>
            <select name="nim_mhs">
            <option selected="selected">Pilih NIM Mahasiswa..</option>
            <?php
            $query="SELECT * FROM m_mahasiswa";
            $hasil=mysqli_query($conn, $query);
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <option value="<?php echo $data['nim_mhs']; ?>"><?php echo $data['nim_mhs'] ?></option>
            <?php } ?>
            </select><br>
            Kode Mata Kuliah : <br>
            <select name="kd_matakuliah">
            <option selected="selected">Pilih Kode Matkul..</option>
            <?php
            $query="SELECT * FROM m_mata_kuliah";
            $hasil=mysqli_query($conn, $query);
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <option value="<?php echo $data['kd_matakuliah']; ?>"><?php echo $data['kd_matakuliah'] ?></option>
            <?php } ?>
            </select><br>
            Absensi : <br>
            <input type="text" name="absensi"><br>
            Tugas : <br>
            <input type="text" name="tugas"><br>
            UTS : <br>
            <input type="text" name="uts"><br>
            UAS : <br>
            <input type="text" name="uas"><br>
		</fieldset>

	<input type="submit" value="Proses" name="tambah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>