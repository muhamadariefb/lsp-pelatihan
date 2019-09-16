<?php

require 'function.php';

$mahasiswas = query("SELECT * FROM m_mahasiswa");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data mahasiswa</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>NIM</th>
			<th>Kode Prodi</th>
            <th>Nama Mahasiswa</th>
            <th>Tempat Lahir</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Masuk</th>
            <th>Kode Status Mahasiswa</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($mahasiswas as $mahasiswa):

	?>
	<tbody>
		<tr>
			<td><?= $mahasiswa['nim_mhs'] ?></td>
			<td><?= $mahasiswa['kd_prodi'] ?></td>
            <td><?= $mahasiswa['nm_mhs'] ?></td>
            <td><?= $mahasiswa['tempat_lhr_mhs'] ?></td>
            <td><?= $mahasiswa['agama'] ?></td>
            <td><?= $mahasiswa['tgl_lhr_mhs'] ?></td>
            <td><?= $mahasiswa['jns_klmn_mhs'] ?></td>
            <td><?= $mahasiswa['tgl_msk_mhs'] ?></td>
            <td><?= $mahasiswa['kd_status_mhs'] ?></td>
            <td><?= $mahasiswa['alamat_mhs'] ?></td>
            <td><?= $mahasiswa['tlp_mhs'] ?></td>
			<td><a href="ubah.php?id=<?= $mahasiswa['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $mahasiswa['nm_mhs']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $mahasiswa['nm_mhs']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>