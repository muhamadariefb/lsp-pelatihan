<?php

require 'function.php';

$matkuls = query("SELECT * FROM m_mata_kuliah");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data Mata Kuliah</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>Kode Mata Kuliah</th>
			<th>Kode Prodi</th>
            <th>Nama Mata Kuliah</th>
            <th>Jumlah SKS Mata Kuliah</th>
            <th>Semester Mata Kuliah</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($matkuls as $matkul):

	?>
	<tbody>
		<tr>
			<td><?= $matkul['kd_matakuliah'] ?></td>
			<td><?= $matkul['kd_prodi'] ?></td>
            <td><?= $matkul['nm_matakuliah'] ?></td>
            <td><?= $matkul['jml_sks_matakuliah'] ?></td>
            <td><?= $matkul['smt_matakuliah'] ?></td>
			<td><a href="ubah.php?id=<?= $matkul['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $matkul['kd_matakuliah']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $matkul['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $matkul['kd_matakuliah']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>