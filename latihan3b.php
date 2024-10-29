<?php
// Definisi variabel
$var1 = "Hello";
$var2 = 0;
$var3 = "";

// Pemeriksaan dengan isset()
echo "Contoh isset(): <br>";
echo "Apakah \$var1 sudah diset? " . (isset($var1) ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$var3 sudah diset? " . (isset($var3) ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$var4 sudah diset (belum didefinisikan)? " . (isset($var4) ? 'Ya' : 'Tidak') . "<br>";

echo "<br>";

// Pemeriksaan dengan empty()
echo "Contoh empty(): <br>";
echo "Apakah \$var1 kosong? " . (empty($var1) ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$var2 kosong? " . (empty($var2) ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$var3 kosong? " . (empty($var3) ? 'Ya' : 'Tidak') . "<br>";
?>
