<?php

require 'function.php';

$users = query("SELECT * FROM tbl_login");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data User</h1>

	<a href="../">Home</a>
	<a href="register.php">Tambah</a>

	<table border=2>
	<thead>
		<tr>
			<th>Username</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<?php
	
	foreach ($users as $user):

	?>
	<tbody>
		<tr>
			<td><?= $user['username'] ?></td>
			<td><a href="ubah.php?id=<?= $user['id']; ?>" onClick = "return confirm('Apakah Anda ingin mengubah <?= $user['username']; ?>?')">Ubah |
				<a href="hapus.php?id=<?= $user['id']; ?>" onClick = "return confirm('Apakah Anda ingin menghapus <?= $user['username']; ?>?')">Hapus</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	
	</table>
</body>
</html>