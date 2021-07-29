<?php
include "./_lib/entities/anggota.php";
$id = $_GET['id'];
$anggota = getById($id);
?>

<h1>Halaman Tambah Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Anggota
            <br><button type="button" class="btn btn-info" onclick="history.back();"><i class="fa fa-angle-double-left"></i> Kembali</button>
        </div>
    </div>
    <div class="card-body">
        <form action="?page=anggota/update&id=<?php echo $anggota['id'] ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $anggota['nama'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $anggota['email'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_handphone" value="<?php echo $anggota['no_handphone'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">NIM</label>
                        <input type="text" class="form-control" name="nim" value="<?php echo $anggota['nim'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($anggota['jenis_kelamin'] == 'Laki-laki') echo "checked" ?>>
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($anggota['jenis_kelamin'] == 'Perempuan') echo "checked" ?>>
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label">Alamat</label>
                <textarea name="alamat" class="form-control"><?php echo $anggota['alamat'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>