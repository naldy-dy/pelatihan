<?php

include "./_lib/conn.php";

function getAll()
{
    global $conn;
    $query = "select * from buku";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getById($id)
{
    global $conn;
    $param = [
        'id' => $id
    ];
    $query = "select * from buku where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param)
{
    global $conn;
    $query = "insert into buku (isbn, barcode, judul, penulis, penerbit, tahun_terbit, stok, tersedia, dipinjam, cover) 
                values (:isbn, :barcode, :judul, :penulis, :penerbit, :tahun_terbit, :stok, :tersedia, :dipinjam, :cover)";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function update($param, $cover = false)
{
    global $conn;
    if($cover){
        $query = "update buku set isbn=:isbn, barcode=:barcode, judul=:judul, penulis=:penulis, penerbit=:penerbit, tahun_terbit=:tahun_terbit, stok=:stok, tersedia=:tersedia, dipinjam=:dipinjam, cover=:cover where id=:id ";
    } else {
        $query = "update buku set isbn=:isbn, barcode=:barcode, judul=:judul, penulis=:penulis, penerbit=:penerbit, tahun_terbit=:tahun_terbit, stok=:stok, tersedia=:tersedia, dipinjam=:dipinjam where id=:id ";
    }
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function delete($param)
{
    global $conn;
    $query = "delete from buku where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}
