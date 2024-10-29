<?php
function faktorial($a){
    $hasil = 1;
    for($i = $a; $i >= 1; $i--){
        $hasil *= $i;
    }
    return $hasil;
}

// Memanggil fungsi dan menampilkan hasilnya
$angka = 5;
$hasil_faktorial = faktorial($angka);
echo "Faktorial dari $angka = $hasil_faktorial";
?>