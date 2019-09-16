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

	$result=mysqli_query($conn, "SELECT * FROM t_krs_dosen WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM t_krs_dosen WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$id_krs_dosen=htmlspecialchars($data["id_krs_dosen"]);
    $kd_dosen=htmlspecialchars($data["kd_dosen"]);
    $hari_mengajar=htmlspecialchars($data["hari_mengajar"]);
    $waktu_mengajar=htmlspecialchars($data["waktu_mengajar"]);
    $kelas_mengajar=htmlspecialchars($data["kelas_mengajar"]);

	$query = "INSERT INTO t_krs_dosen VALUES ('','$id_krs_dosen','$kd_dosen','$hari_mengajar','$waktu_mengajar','$kelas_mengajar')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data["id"];
	$id_krs_dosen=htmlspecialchars($data["id_krs_dosen"]);
    $kd_dosen=htmlspecialchars($data["kd_dosen"]);
    $hari_mengajar=htmlspecialchars($data["hari_mengajar"]);
    $waktu_mengajar=htmlspecialchars($data["waktu_mengajar"]);
    $kelas_mengajar=htmlspecialchars($data["kelas_mengajar"]);
	

	$query_ubah = "UPDATE t_krs_dosen SET
					id_krs_dosen='$id_krs_dosen',
					kd_dosen='$kd_dosen',
					hari_mengajar='$hari_mengajar',
                    waktu_mengajar='$waktu_mengajar',
                    kelas_mengajar='$kelas_mengajar'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>