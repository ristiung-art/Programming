<?php 
    $nama = $_POST['nama'];
    $tahun = $_POST['angkatan'];
    $divisi = $_POST['divisi'];

    if($nama === ''){
        exit('nama wajib diisi!!.');
    }

    echo"terima kasih, $nama";
?>