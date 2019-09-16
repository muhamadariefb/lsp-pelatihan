<?php 

$conn=mysqli_connect("localhost","root","","lsp_pelatihan");

function query($query)
{
	global $conn;

	$result = mysqli_query($conn, $query);

	$rows=[];

	while($row = mysqli_fetch_assoc($result))
	{
		$rows[]=$row;
	}

	return $rows;
}


function hapus($id)
{
	global $conn;

	$result=mysqli_query($conn, "SELECT * FROM t_nilai_khs WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM t_nilai_khs WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$kd_semester=htmlspecialchars($data["kd_semester"]);
	$kd_dosen=htmlspecialchars($data["kd_dosen"]);
    $nim_mhs=htmlspecialchars($data["nim_mhs"]);
    $kd_matakuliah=htmlspecialchars($data["kd_matakuliah"]);
    $absensi=htmlspecialchars($data["absensi"]);
    $tugas=htmlspecialchars($data["tugas"]);
    $uts=htmlspecialchars($data["uts"]);
    $uas=htmlspecialchars($data["uas"]);

	$query = "INSERT INTO t_nilai_khs VALUES ('','$kd_semester','$kd_dosen','$nim_mhs','$kd_matakuliah','$absensi','$tugas','$uts','$uas')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data['id'];
	$kd_semester=htmlspecialchars($data["kd_semester"]);
	$kd_dosen=htmlspecialchars($data["kd_dosen"]);
    $nim_mhs=htmlspecialchars($data["nim_mhs"]);
    $kd_matakuliah=htmlspecialchars($data["kd_matakuliah"]);
    $absensi=htmlspecialchars($data["absensi"]);
    $tugas=htmlspecialchars($data["tugas"]);
    $uts=htmlspecialchars($data["uts"]);
    $uas=htmlspecialchars($data["uas"]);
	

	$query_ubah = "UPDATE t_nilai_khs SET
					kd_semester='$kd_semester',
					kd_dosen='$kd_dosen',
					nim_mhs='$nim_mhs',
                    kd_matakuliah='$kd_matakuliah',
                    absensi='$absensi',
                    tugas='$tugas',
                    uts='$uts',
                    uas='$uas'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>