<?php

include_once "./_lib/conn.php";

function getAll()
{
    global $conn;
    $query = 'select *, peminjaman.id as id_peminjaman from peminjaman, anggota where id_anggota = anggota.id';
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getAnggota()
{
    global $conn;
    $query = 'select * from anggota';
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}



function getBuku()
{
    global $conn;
    $query = 'select * from buku';
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function check($param)
{
    global $conn;
    $query = 'select * from peminjaman where id_anggota=:id_anggota and status=1';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param)
{
    global $conn;
    $query = 'insert into peminjaman (id_anggota, tanggal_pinjam, status) values (:id_anggota, :tanggal_pinjam, :status)';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $conn->lastInsertId();
}

function getById($param)
{
    global $conn;
    $query = 'select * from peminjaman, anggota where peminjaman.id=:id_peminjaman and anggota.id=peminjaman.id_anggota';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function simpanBuku($param)
{
    global $conn;
    $query = 'insert into peminjaman_detail (id_peminjaman, id_buku) values (:id_peminjaman, :id_buku)';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    updateStock(['id_buku' => $param['id_buku']]);

}

function updateStock($param){
    global $conn;
    $query = 'update buku set tersedia=tersedia-1, dipinjam=dipinjam+1 where id=:id_buku';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    
}

function getBukuById($param)
{
    global $conn;
    $query = 'select * from peminjaman_detail, buku where id_peminjaman=:id_peminjaman and id_buku=buku.id';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetchAll();
}

function countBukuById($param)
{
    global $conn;
    $query = 'select count(*) as total from peminjaman_detail where id_peminjaman=:id_peminjaman';
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch()['total'];
}

function getStatus($status)
{
    return ['1' => 'Peminjaman Aktif', '2' => 'Dikembalikan'][$status];
}
