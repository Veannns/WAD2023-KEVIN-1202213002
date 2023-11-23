<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include ("connect.php");
session_start();
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
mysqli_query($koneksi, "DELETE from users WHERE id =$id");
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if($query){
        echo "<script>alert('Data telah ditambahkan')</script>";
    } else{
        echo "<script>alert('Gagal ditambahkan')</script>";
    }
// Tutup koneksi ke database setelah selesai menggunakan database
$koneksi->close();
?>