<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$koneksi = mysqli_connect("localhost:3308","root","","modul3_wad");


// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if(mysqli_connect_error()){
    echo "koneksi gagal". mysqli_connect_error();
}
// 
?>