<?php

require 'function.php';

//untuk mengambil ID dari keywoard yang dikirim melalui url
$getID=$_GET['id'];

//untuk menampilkan data pada form sesuai ID
$getData=query("SELECT * FROM t_krs_dosen WHERE id='$getID'");


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

            <legend>Form Ubah KRS Dosen</legend>
            <input type="hidden" name="id" value="<?= $getData[0]["id"];?>">
            ID KRS Dosen : <br>
            <input type="text" name="id_krs_dosen" value="<?= $getData[0]["id_krs_dosen"];?>"><br>
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
            <input type="text" name="hari_mengajar" value="<?= $getData[0]["hari_mengajar"];?>"><br>
            Waktu Mengajar : <br>
            <input type="text" name="waktu_mengajar" value="<?= $getData[0]["waktu_mengajar"];?>"><br>
            Kelas Mengajar : <br>
            <input type="text" name="kelas_mengajar" value="<?= $getData[0]["kelas_mengajar"];?>"><br>
            
		</fieldset>

	<input type="submit" value="Proses" name="ubah">
	<input type="reset" value="Hapus">
	</form>
</body>

</html>