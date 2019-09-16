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

	$result=mysqli_query($conn, "SELECT * FROM m_dosen WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM m_dosen WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$kd_dosen=htmlspecialchars($data["kd_dosen"]);
	$nm_dosen=htmlspecialchars($data["nm_dosen"]);
	$nidn_dosen=htmlspecialchars($data["nidn_dosen"]);
    $jns_klmn_dosen=htmlspecialchars($data["jns_klmn_dosen"]);
    $kd_jabatan_dosen=htmlspecialchars($data["kd_jabatan_dosen"]);
    $status_dosen=($data["status_dosen"]);

	$query = "INSERT INTO m_dosen VALUES ('','$kd_dosen','$nm_dosen','$nidn_dosen','$jns_klmn_dosen','$kd_jabatan_dosen','$status_dosen')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data['id'];
	$kd_dosen=htmlspecialchars($data["kd_dosen"]);
	$nm_dosen=htmlspecialchars($data["nm_dosen"]);
	$nidn_dosen=htmlspecialchars($data["nidn_dosen"]);
    $jns_klmn_dosen=htmlspecialchars($data["jns_klmn_dosen"]);
    $kd_jabatan_dosen=htmlspecialchars($data["kd_jabatan_dosen"]);
    $status_dosen=($data["status_dosen"]);
	

	$query_ubah = "UPDATE m_dosen SET
					kd_dosen='$kd_dosen',
					nm_dosen='$nm_dosen',
					nidn_dosen='$nidn_dosen',
					jns_klmn_dosen='$jns_klmn_dosen',
                    kd_jabatan_dosen='$kd_jabatan_dosen',
                    status_dosen='$status_dosen'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>