<?php
include "./_lib/entities/peminjaman.php";

$param = [
    'id_anggota' => $_POST['id_anggota']
];

$check = check($param);

if ($check) {
    $msg = 'Anggota Memiliki Pinjaman Aktif';
    header('Location: ?page=peminjaman/tambah&msg=' . $msg);
}

$param['tanggal_pinjam'] = $_POST['tanggal_pinjam'];
$param['status'] = 1;

$id_peminjaman = store($param);

header('Location: ?page=peminjaman/buku&id_peminjaman=' . $id_peminjaman);
