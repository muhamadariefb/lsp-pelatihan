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

	$result=mysqli_query($conn, "SELECT * FROM t_krs_mhs WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM t_krs_mhs WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$id_krs_mhs=htmlspecialchars($data["id_krs_mhs"]);
    $kd_matakuliah=htmlspecialchars($data["kd_matakuliah"]);
    $nim_mhs=htmlspecialchars($data["nim_mhs"]);
    $kd_prodi=htmlspecialchars($data["kd_prodi"]);
    $kd_kelas=htmlspecialchars($data["kd_kelas"]);

	$query = "INSERT INTO t_krs_mhs VALUES ('','$id_krs_mhs','$kd_matakuliah','$nim_mhs','$kd_prodi','$kd_kelas')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data["id"];
	$id_krs_mhs=htmlspecialchars($data["id_krs_mhs"]);
    $kd_matakuliah=htmlspecialchars($data["kd_matakuliah"]);
    $nim_mhs=htmlspecialchars($data["nim_mhs"]);
    $kd_prodi=htmlspecialchars($data["kd_prodi"]);
    $kd_kelas=htmlspecialchars($data["kd_kelas"]);
	

	$query_ubah = "UPDATE t_krs_mhs SET
					id_krs_mhs='$id_krs_mhs',
					kd_matakuliah='$kd_matakuliah',
					nim_mhs='$nim_mhs',
                    kd_prodi='$kd_prodi',
                    kd_kelas='$kd_kelas'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>