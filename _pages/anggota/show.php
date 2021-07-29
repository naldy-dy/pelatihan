<?php
include "./_lib/entities/anggota.php";
$id = $_GET['id'];
$anggota = getById($id);
?>
<h1>Halaman Detail</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=anggota/edit&id=<?php echo $anggota['id'] ?>" class="btn btn-warning float-right"><i class="fa fa-edit"></i> Edit</a>
        <div class="card-title">
            Detail Anggota
            <br><button type="button" class="btn btn-info" onclick="history.back();"><i class="fa fa-angle-double-left"></i> Kembali</button>
        </div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nama</dt>
            <dd> <?php echo $anggota['nama'] ?> </dd>
            <dt>NIM</dt>
            <dd> <?php echo $anggota['nim'] ?> </dd>
            <dt>Email</dt>
            <dd> <?php echo $anggota['email'] ?> </dd>
            <dt>No Handphone</dt>
            <dd> <?php echo $anggota['no_handphone'] ?> </dd>
            <dt>Jenis Kelamin</dt>
            <dd> <?php echo $anggota['jenis_kelamin'] ?> </dd>
            <dt>Alamat</dt>
            <dd> <?php echo $anggota['alamat'] ?> </dd>
        </dl>
    </div>
</div>