<aside id="sidebar">
    <ul>
        <li class="<?php isActive('anggota') ?>">
            <a href="?page=anggota">Data Anggota</a>
        </li>
        <li class="<?php isActive('buku') ?>">
            <a href="?page=buku">Data Buku</a>
        </li>
        <li class="<?php isActive('peminjaman') ?>">
            <a href="?page=peminjaman">Data Peminjaman</a>
        </li>
        <li class="<?php isActive('ruangan') ?>">
            <a href="?page=ruangan">Data Ruangan</a>
        </li>
    </ul>
</aside>

<?php
function isActive($url)
{
    if (isset($_GET['page'])) {
        if ($_GET['page'] == $url) echo 'active';
    }
    return;
}
