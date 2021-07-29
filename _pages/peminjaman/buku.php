<?php
include "./_lib/entities/peminjaman.php";

$param = [
    'id_peminjaman' => $_GET['id_peminjaman']
];
$data = getById($param);
?>
<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/kembali&id_peminjaman=<?php echo $_GET['id_peminjaman'] ?>" class="btn btn-info float-right"><i class="fa fa-book"></i> Kembalikan Buku</a>
        <div class="card-title">
            Data Peminjaman
            <br><button type="button" class="btn btn-info" onclick="history.back();"><i class="fa fa-angle-double-left"></i> Kembali</button>
        </div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nama Peminjam</dt>
            <dd><?php echo $data['nama'] ?></dd>
            <dt>Tanggal Pinjam</dt>
            <dd><?php echo $data['tanggal_pinjam'] ?></dd>
        </dl>
        <form action="?page=peminjaman/simpan-buku" method="post">
            <input type="hidden" name="id_peminjaman" value="<?php echo $_GET['id_peminjaman'] ?>">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama Buku</label>
                        <select name="id_buku" id="" class="form-control select2">
                            <?php foreach (getBuku() as $buku) : ?>
                                <option value="<?php echo $buku['id'] ?>"><?php echo $buku['isbn'] ?> - <?php echo $buku['judul'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <br>
                        <button class="btn btn-block btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
            </thead>
            <tbody>
                <?php foreach (getBukuById($param) as $key => $detail) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $detail['judul'] ?></td>
                        <td><?php echo $detail['penulis'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>