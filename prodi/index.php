<?php

require 'function.php';

$prodis = query("SELECT * FROM m_prodi");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data Prodi</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>Kode Prodi</th>
			<th>Kode Jenis Prodi</th>
            <th>Nama Prodi</th>
            <th>Status Prodi</th>
            <th>Email Prodi</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($prodis as $prodi):

	?>
	<tbody>
		<tr>
			<td><?= $prodi['kd_prodi'] ?></td>
			<td><?= $prodi['kd_jenis_prodi'] ?></td>
            <td><?= $prodi['nm_prodi'] ?></td>
            <td><?= $prodi['status_prodi'] ?></td>
            <td><?= $prodi['email_prodi'] ?></td>
			<td><a href="ubah.php?id=<?= $prodi['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $prodi['kd_prodi']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $prodi['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $prodi['kd_prodi']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>