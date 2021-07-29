<?php
include "./_lib/entities/peminjaman.php";
?>
<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/tambah" class="btn btn-primary float-right">
            <i class="fa fa-plus"></i>
            Tambah Peminjaman
        </a>
        <div class="card-title">
            Table Peminjaman
        </div>
    </div>
    <div class="card-body">
        <table class="table datatable">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Jumlah Buku</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php foreach (getAll() as $key => $peminjaman) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>
                            <a href="?page=peminjaman/buku&id_peminjaman=<?php echo $peminjaman['id_peminjaman'] ?>" class="btn btn-info">Detail</a>
                        </td>
                        <td><?php echo $peminjaman['nama'] ?></td>
                        <td><?php echo $peminjaman['tanggal_pinjam'] ?></td>
                        <td><?php echo countBukuById(['id_peminjaman' => $peminjaman['id_peminjaman']]) ?></td>
                        <td><?php echo getStatus($peminjaman['status']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>