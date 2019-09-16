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

	$result=mysqli_query($conn, "SELECT * FROM m_semester WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM m_semester WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$kd_semester=htmlspecialchars($data["kd_semester"]);
	$ket_semester=htmlspecialchars($data["ket_semester"]);
	$thn_semester=htmlspecialchars($data["thn_semester"]);

	$query = "INSERT INTO m_semester VALUES ('','$kd_semester','$ket_semester','$thn_semester')";

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
	$ket_semester=htmlspecialchars($data["ket_semester"]);
	$thn_semester=htmlspecialchars($data["thn_semester"]);
	

	$query_ubah = "UPDATE m_semester SET
					kd_semester='$kd_semester',
					ket_semester='$ket_semester',
					thn_semester='$thn_semester'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>