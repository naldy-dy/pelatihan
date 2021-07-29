<?php
include "./_lib/entities/anggota.php";
$param = [
    'id' => $_GET['id']
];
delete($param);

header("Location: ?page=anggota");
