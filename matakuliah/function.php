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

	$result=mysqli_query($conn, "SELECT * FROM m_mata_kuliah WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM m_mata_kuliah WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$kd_matakuliah=htmlspecialchars($data["kd_matakuliah"]);
	$kd_prodi=htmlspecialchars($data["kd_prodi"]);
	$nm_matakuliah=htmlspecialchars($data["nm_matakuliah"]);
    $jml_sks_matakuliah=htmlspecialchars($data["jml_sks_matakuliah"]);
    $smt_matakuliah=htmlspecialchars($data["smt_matakuliah"]);

	
	$query = "INSERT INTO m_mata_kuliah VALUES ('','$kd_matakuliah','$kd_prodi','$nm_matakuliah','$jml_sks_matakuliah','$smt_matakuliah')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data['id'];
	$kd_matakuliah=htmlspecialchars($data["kd_matakuliah"]);
	$kd_prodi=htmlspecialchars($data["kd_prodi"]);
	$nm_matakuliah=htmlspecialchars($data["nm_matakuliah"]);
    $jml_sks_matakuliah=htmlspecialchars($data["jml_sks_matakuliah"]);
    $smt_matakuliah=htmlspecialchars($data["smt_matakuliah"]);
	

	$query_ubah = "UPDATE m_mata_kuliah SET
					kd_matakuliah='$kd_matakuliah',
					kd_prodi='$kd_prodi',
					nm_matakuliah='$nm_matakuliah',
					jml_sks_matakuliah='$jml_sks_matakuliah',
                    smt_matakuliah='$smt_matakuliah'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>