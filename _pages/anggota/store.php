<?php
if ($_POST) {
    include "./_lib/entities/anggota.php";
    $param = [
        'nama' => $_POST['nama'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
        'no_handphone' => $_POST['no_handphone'],
        'nim' => $_POST['nim'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'alamat' => $_POST['alamat']
    ];
    store($param);

    header("Location: ?page=anggota");
}
