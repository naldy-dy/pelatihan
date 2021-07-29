<?php include "./_lib/conn.php" ?>
<?php
$params = ['nama' => 'Gozali'];
$query = "select * from anggota where nama=:nama";
$statement = $conn->prepare($query);
$statement->execute($params);
$data = $statement->fetchAll();
?>
<h1>
    Halaman Pinjaman
</h1>


</table>