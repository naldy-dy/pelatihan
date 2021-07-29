<?php
include "./_lib/entities/buku.php";
$id = $_GET['id'];
$buku = getById($id);
?>

<h1>Halaman Tambah Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Anggota
        </div>
    </div>
    <div class="card-body">
        <form action="?page=buku/update&id=<?php echo $buku['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="label">ISBN</label>
                        <input type="text" class="form-control" name="isbn" value="<?php echo $buku['isbn'] ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="label">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?php echo $buku['judul'] ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="label">Barcode</label>
                        <input type="text" class="form-control" name="barcode" value="<?php echo $buku['barcode'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="" class="label">Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="<?php echo $buku['penulis'] ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="" class="label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?php echo $buku['penerbit'] ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="label">Tahun Terbit</label>
                        <input type="text" class="form-control" name="tahun_terbit" value="<?php echo $buku['tahun_terbit'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="label">Stock</label>
                <input type="text" class="form-control" name="stok" value="<?php echo $buku['stok'] ?>">
            </div>
            <div class="form-group">
                <label for="" class="label">Tersedia</label>
                <input type="text" class="form-control" name="tersedia" value="<?php echo $buku['tersedia'] ?>">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="" class="label">Dipinjam</label>
                        <input type="text" class="form-control" name="dipinjam" value="<?php echo $buku['dipinjam'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label">Cover</label>
                        <input type="file" class="form-control" name="cover" accept="image/*">
                    </div>
                </div>
            </div>
            <button class="btn btn-info btn-sm">Simpan</button>
        </form>
    </div>
</div>