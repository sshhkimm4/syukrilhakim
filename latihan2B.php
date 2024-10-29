<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            float: left;
            text-align: center;
            line-height: 50px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    $jumlah_baris = 5;
    $jumlah_kolom = 5;

    for ($baris = 1; $baris <= $jumlah_baris; $baris++) {
        for ($kolom = 1; $kolom <= $baris; $kolom++) {
            echo "<div class='kotak'>$kolom</div>";
        }
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>