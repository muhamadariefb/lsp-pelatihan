<?php

require 'function.php';

$krsmhss = query("SELECT * FROM t_krs_mhs");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data KRS Mahasiswa</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>ID KRS Mahasiswa</th>
            <th>Kode Matakuliah</th>
            <th>NIM Mahasiswa</th>
            <th>Kode Prodi</th>
            <th>Kode Kelas</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($krsmhss as $krsmhs):

	?>
	<tbody>
		<tr>
			<td><?= $krsmhs['id_krs_mhs'] ?></td>
            <td><?= $krsmhs['kd_matakuliah'] ?></td>
            <td><?= $krsmhs['nim_mhs'] ?></td>
            <td><?= $krsmhs['kd_prodi'] ?></td>
            <td><?= $krsmhs['kd_kelas'] ?></td>
			<td><a href="ubah.php?id=<?= $krsmhs['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $krsmhs['id_krs_mhs']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $krsmhs['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $krsmhs['id_krs_mhs']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>