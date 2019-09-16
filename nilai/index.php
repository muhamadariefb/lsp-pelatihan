<?php

require 'function.php';

$khsnilais = query("SELECT * FROM t_nilai_khs");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data Nilai KHS</h1>

	<a href="../">Home</a>
	<a href="tambah.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>Kode Semester</th>
			<th>Kode Dosen</th>
            <th>NIM Mahasiswa</th>
            <th>Kode Matakuliah</th>
            <th>Absensi</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($khsnilais as $khsnilai):

	?>
	<tbody>
		<tr>
			<td><?= $khsnilai['kd_semester'] ?></td>
			<td><?= $khsnilai['kd_dosen'] ?></td>
            <td><?= $khsnilai['nim_mhs'] ?></td>
            <td><?= $khsnilai['kd_matakuliah'] ?></td>
            <td><?= $khsnilai['absensi'] ?></td>
            <td><?= $khsnilai['tugas'] ?></td>
            <td><?= $khsnilai['uts'] ?></td>
            <td><?= $khsnilai['uas'] ?></td>
			<td><a href="ubah.php?id=<?= $khsnilai['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $khsnilai['kd_semester']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $khsnilai['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $khsnilai['kd_semester']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>