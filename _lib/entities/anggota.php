<?php

include "./_lib/conn.php";


function getAll()
{
    global $conn;
    $query = "select * from anggota";
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
    $query = "select * from anggota where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param)
{
    global $conn;
    $param['password'] = md5($param['password']);
    $query = "insert into anggota (nama, alamat, jenis_kelamin, no_handphone, email, password, nim) 
                values (:nama, :alamat, :jenis_kelamin, :no_handphone, :email, :password, :nim)";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function update($param)
{
    global $conn;
    $param['password'] = md5($param['password']);
    $query = "update anggota set nama=:nama, alamat=:alamat, jenis_kelamin=:jenis_kelamin, 
                no_handphone=:no_handphone, email=:email, password=:password, nim=:nim
                where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function delete($param)
{
    global $conn;
    $query = "delete from anggota where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}
