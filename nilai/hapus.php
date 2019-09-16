<?php

require 'function.php';

$id	= $_GET['id'];

if(hapus($id)>0)
{
	echo "<script>alert('Berhasil!'); document.location.href='index.php'</script>\n";	
}
else 
{
	echo "<script>alert('Gagal!'); document.location.href='index.php'</script>\n";
}

?>