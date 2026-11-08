<?php
$nama   = trim($_POST['nama'] ?? '');
$tahun  = (int) ($_POST['angkatan'] ?? 0);
$divisi = $_POST['divisi'] ?? '';
 
if ($nama === '') {
    exit('Nama wajib diisi.');
}
 
$nama = htmlspecialchars(ucwords($nama));