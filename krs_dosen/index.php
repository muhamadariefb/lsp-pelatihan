<?php

require 'function.php';

$krsdosens = query("SELECT * FROM t_krs_dosen");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data KRS Dosen</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>ID KRS Dosen</th>
            <th>Kode Dosen</th>
            <th>Hari Mengajar</th>
            <th>Waktu Mengajar</th>
            <th>Kelas Mengajar</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($krsdosens as $krsdosen):

	?>
	<tbody>
		<tr>
			<td><?= $krsdosen['id_krs_dosen'] ?></td>
            <td><?= $krsdosen['kd_dosen'] ?></td>
            <td><?= $krsdosen['hari_mengajar'] ?></td>
            <td><?= $krsdosen['waktu_mengajar'] ?></td>
            <td><?= $krsdosen['kelas_mengajar'] ?></td>
			<td><a href="ubah.php?id=<?= $krsdosen['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $krsdosen['id_krs_dosen']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $krsdosen['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $krsdosen['id_krs_dosen']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>