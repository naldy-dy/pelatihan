<?php

if($_POST){
	 include "./_lib/entities/buku.php";

	 $param[
	 	'kode_ruangan' => $_POST['kode_ruangan'],
	 	'nama_ruangan' => $_POST['nama_ruangan']

	 ];
	 store($param);
	 header('location:?page=ruangan')
}