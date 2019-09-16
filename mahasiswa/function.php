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

	$result=mysqli_query($conn, "SELECT * FROM m_mahasiswa WHERE id='$id'");

	$row=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){

		mysqli_query($conn, "DELETE FROM m_mahasiswa WHERE id='$id'");	
	}

	return mysqli_affected_rows($conn);
}

function tambah($data)
{
	global $conn;

	$nim_mhs=htmlspecialchars($data["nim_mhs"]);
	$kd_prodi=htmlspecialchars($data["kd_prodi"]);
	$nm_mhs=htmlspecialchars($data["nm_mhs"]);
    $tempat_lhr_mhs=htmlspecialchars($data["tempat_lhr_mhs"]);
    $agama=htmlspecialchars($data["agama"]);
    $tgl_lhr_mhs=($data["tgl_lhr_mhs"]);
    $jns_klmn_mhs=htmlspecialchars($data["jns_klmn_mhs"]);
    $tgl_msk_mhs=($data["tgl_msk_mhs"]);
    $kd_status_mhs=htmlspecialchars($data["kd_status_mhs"]);
    $alamat_mhs=htmlspecialchars($data["alamat_mhs"]);
    $tlp_mhs=htmlspecialchars($data["tlp_mhs"]);

	$query = "INSERT INTO m_mahasiswa VALUES ('','$nim_mhs','$kd_prodi','$nm_mhs','$tempat_lhr_mhs','$agama','$tgl_lhr_mhs','$jns_klmn_mhs','$tgl_msk_mhs','$kd_status_mhs','$alamat_mhs','$tlp_mhs')";

	mysqli_query($conn, $query);

	//echo $query;

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	//mengambil elemen dari masing masing form
	$id=$data['id'];
	$nim_mhs=htmlspecialchars($data["nim_mhs"]);
	$kd_prodi=htmlspecialchars($data["kd_prodi"]);
	$nm_mhs=htmlspecialchars($data["nm_mhs"]);
    $tempat_lhr_mhs=htmlspecialchars($data["tempat_lhr_mhs"]);
    $agama=htmlspecialchars($data["agama"]);
    $tgl_lhr_mhs=($data["tgl_lhr_mhs"]);
    $jns_klmn_mhs=htmlspecialchars($data["jns_klmn_mhs"]);
    $tgl_msk_mhs=($data["tgl_msk_mhs"]);
    $kd_status_mhs=htmlspecialchars($data["kd_status_mhs"]);
    $alamat_mhs=htmlspecialchars($data["alamat_mhs"]);
    $tlp_mhs=htmlspecialchars($data["tlp_mhs"]);
	

	$query_ubah = "UPDATE m_mahasiswa SET
					nim_mhs='$nim_mhs',
					kd_prodi='$kd_prodi',
					nm_mhs='$nm_mhs',
					tempat_lhr_mhs='$tempat_lhr_mhs',
                    agama='$agama',
                    tgl_lhr_mhs='$tgl_lhr_mhs',
                    jns_klmn_mhs='$jns_klmn_mhs',
                    tgl_msk_mhs='$tgl_msk_mhs',
                    kd_status_mhs='$kd_status_mhs',
                    alamat_mhs='$alamat_mhs',
                    tlp_mhs='$tlp_mhs'

					WHERE id='$id'

					";

		mysqli_query($conn, $query_ubah);

	//menampilkan baris yang terpengaruh dari database yang kita pakai apapun itu action nya (CRUD)
	return mysqli_affected_rows($conn);
}

?>