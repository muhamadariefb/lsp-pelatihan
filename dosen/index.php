<?php

require 'function.php';

$dosens = query("SELECT * FROM m_dosen");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data Dosen</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>Kode Dosen</th>
			<th>Nama Dosen</th>
            <th>NIDN</th>
            <th>Jenis Kelamin</th>
            <th>Kode Jabatan</th>
            <th>Status Dosen</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($dosens as $dosen):

	?>
	<tbody>
		<tr>
			<td><?= $dosen['kd_dosen'] ?></td>
			<td><?= $dosen['nm_dosen'] ?></td>
            <td><?= $dosen['nidn_dosen'] ?></td>
            <td><?= $dosen['jns_klmn_dosen'] ?></td>
            <td><?= $dosen['kd_jabatan_dosen'] ?></td>
            <td><?= $dosen['status_dosen'] ?></td>
			<td><a href="ubah.php?id=<?= $dosen['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $dosen['nm_dosen']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $dosen['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $dosen['nm_dosen']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>