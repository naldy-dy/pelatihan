<?php
include "./_lib/entities/peminjaman.php";

$param = [
    'id_peminjaman' => $_POST['id_peminjaman'],
    'id_buku' => $_POST['id_buku']
];
$data = simpanBuku($param);

header("Location: ?page=peminjaman/buku&id_peminjaman=" . $_POST['id_peminjaman']);
