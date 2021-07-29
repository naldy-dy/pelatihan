<?php
include "./_lib/entities/peminjaman.php";
$msg = null;
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
?>
<?php if ($msg) : ?>
    <div class="alert alert-danger"><?php echo $msg ?></div>
<?php endif ?>
<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Peminjaman
            <br><button type="button" class="btn btn-info" onclick="history.back();"><i class="fa fa-angle-double-left"></i> Kembali</button>
        </div>
    </div>
    <div class="card-body">
        <form action="?page=peminjaman/prosess" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama Anggota</label>
                        <select name="id_anggota" class="form-control select2">
                            <?php foreach (getAnggota() as $anggota) :    ?>
                                <option value="<?php echo $anggota['id'] ?>"> <?php echo $anggota['nim'] ?> | <?php echo $anggota['nama'] ?> </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Pinam</label>
                        <input type="date" name="tanggal_pinjam" class="form-control" value="<?php echo date("Y-m-d") ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Proses</button>
            </div>
        </form>
    </div>
</div>