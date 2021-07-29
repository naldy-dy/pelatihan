<?php
include "./_lib/entities/buku.php";
$param = [
    'id' => $_GET['id']
];
delete($param);

header("Location: ?page=buku");
