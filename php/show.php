<?php 
include "koneksi.php";

$data = $crud->show_anggota();
foreach ($data as $key => $value) {
	print($value['nama'].$value['alamat'].'<br>');
}
?>