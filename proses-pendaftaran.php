<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){ //jika button daftar di klik

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $kode_makanan = $_POST['kode_makanan'];

    // buat query
    $sql = "INSERT INTO ukk_makanan(nama_makanan, harga, stok, kategori, deskripsi, kode_makanan) VALUE ('$nama', '$harga', '$stok', '$kategori', '$deskripsi', '$kode_makanan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: berhasil_login.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: berhasil_login.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>