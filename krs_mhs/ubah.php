<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM t_krs_mhs WHERE id='$getID'");


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
			<legend>Form Ubah KRS Mahasiswa</legend>
            <input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
            ID KRS Mahasiswa : <br>
            <input type="text" name="id_krs_mhs" value="<?= $getData[0]["id_krs_mhs"];?>"><br>
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
            Kode Kelas : <br>
            <input type="text" name="kd_kelas" value="<?= $getData[0]["kd_kelas"];?>"><br>
            
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>