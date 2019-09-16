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

	$result=mysqli_query($conn, "SELECT * FROM m_prodi WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM m_prodi WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$kd_prodi=htmlspecialchars($data["kd_prodi"]);
	$kd_jenis_prodi=htmlspecialchars($data["kd_jenis_prodi"]);
	$nm_prodi=htmlspecialchars($data["nm_prodi"]);
    $status_prodi=htmlspecialchars($data["status_prodi"]);
    $email_prodi=htmlspecialchars($data["email_prodi"]);

	$query = "INSERT INTO m_prodi VALUES ('','$kd_prodi','$kd_jenis_prodi','$nm_prodi','$status_prodi','$email_prodi')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data['id'];
	$kd_prodi=htmlspecialchars($data["kd_prodi"]);
	$kd_jenis_prodi=htmlspecialchars($data["kd_jenis_prodi"]);
	$nm_prodi=htmlspecialchars($data["nm_prodi"]);
    $status_prodi=htmlspecialchars($data["status_prodi"]);
    $email_prodi=htmlspecialchars($data["email_prodi"]);
	

	$query_ubah = "UPDATE m_prodi SET
					kd_prodi='$kd_prodi',
					kd_jenis_prodi='$kd_jenis_prodi',
					nm_prodi='$nm_prodi',
					status_prodi='$status_prodi',
                    email_prodi='$email_prodi'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>