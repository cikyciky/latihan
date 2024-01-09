<?php

include("../connection/config.php");
var_dump($_POST);
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $pesan = $_POST['pesan'];

    // buat query
    $sql = "INSERT INTO pesan (nama, email, subject, pesan) VALUE ('$nama', '$email', '$subject', '$pesan')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>

 