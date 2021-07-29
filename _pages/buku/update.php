<?php
if ($_POST) {
    include "./_lib/entities/buku.php";
    $file = $_FILES['cover'];
      $param = [
        'id' => $_GET['id'],
        'isbn' => $_POST['isbn'],
        'judul' => $_POST['judul'],
        'barcode' => $_POST['barcode'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit'],
        'stok' => $_POST['stok'],
        'tersedia' => $_POST['tersedia'],
        'dipinjam' => $_POST['dipinjam']
    ];
    $cover = false;


    if(isset($_FILES['cover'])){

        if ($file['size'] > 1000000) {
            header("Location: ?page=buku/tambah&msg=File Terlalu Besar");
        } else {
            $destination = 'assets/img/buku';
            $extension = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
            $filename = "cover." . time() . "." . $_POST['isbn'] . "." . $extension;
            move_uploaded_file($_FILES['cover']['tmp_name'], $destination . "/" . $filename);
            $param['cover'] =  $destination . "/" . $filename;
            $cover = true;
        }
    }
  
    update($param, $cover);

    header("Location: ?page=buku");
}