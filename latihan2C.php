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
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    $jumlah_baris = 5;
    $jumlah_kolom = 5;

    for ($baris = 1; $baris <= $jumlah_baris; $baris++) {
        $class_baris = ($baris % 2 == 1) ? 'ganjil' : 'genap';
        for ($kolom = 1; $kolom <= $baris; $kolom++) {
            echo "<div class='kotak $class_baris'>$kolom</div>";
        }
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>