<?php
// Fungsi untuk menghitung pangkat
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat); // Menggunakan fungsi pow() untuk menghitung pangkat
}

// Contoh pemanggilan fungsi
$angka = 5;
$pangkat = 4;
$hasil = pangkat($angka, $pangkat);

// Menampilkan hasil
echo "$angka pangkat $pangkat = $hasil";
?>
