<?php
include "./_lib/entities/anggota.php";
?>
<h1>
    Halaman Anggota
</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=anggota/tambah" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Tambah</a>

        <div class="card-title">
            Table Anggota
        </div>
    </div>
    <div class="card-body">
        <table class="table datatable">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php foreach (getAll() as $key => $anggota) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="?page=anggota/show&id=<?php echo $anggota['id'] ?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                <a href="?page=anggota/edit&id=<?php echo $anggota['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin Menghapus Data Ini?')" href="?page=anggota/hapus&id=<?php echo $anggota['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td><?php echo $anggota['nama'] ?></td>
                        <td><?php echo $anggota['email'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>