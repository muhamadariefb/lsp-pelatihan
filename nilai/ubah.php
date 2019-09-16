<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM t_nilai_khs WHERE id='$getID'");


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
			<legend>Form Ubah Nilai</legend>
            <input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
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
            <input type="text" name="absensi" value="<?= $getData[0]["absensi"];?>"><br>
            Tugas : <br>
            <input type="text" name="tugas" value="<?= $getData[0]["tugas"];?>"><br>
            UTS : <br>
            <input type="text" name="uts" value="<?= $getData[0]["uts"];?>"><br>
            UAS : <br>
            <input type="text" name="uas" value="<?= $getData[0]["uas"];?>"><br>
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>