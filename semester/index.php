<?php

require 'function.php';

$semesters = query("SELECT * FROM m_semester");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data Semester</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>Kode Semester</th>
			<th>Keterangan Semester</th>
            <th>Tahun Semester</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($semesters as $semester):

	?>
	<tbody>
		<tr>
			<td><?= $semester['kd_semester'] ?></td>
			<td><?= $semester['ket_semester'] ?></td>
            <td><?= $semester['thn_semester'] ?></td>
			<td><a href="ubah.php?id=<?= $semester['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $semester['kd_semester']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $semester['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $semester['kd_semester']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>