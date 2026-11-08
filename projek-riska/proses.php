<?php
$nama = $_POST['nama'];
$tahun = $_POST['angkatan'];
$divisi = $_POST['divisi'];

if ($nama === '') {
    exit("Nama wajib diisi.");
}
echo "Terims  kasih, $nama";

?>