<?php
// Define the function
function ganti_style($tulisan, $kelas) {
    // Return the string with the added class
    return "<p class='$kelas'>$tulisan</p>";
}

// Example of variable initialization and function call
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .ganti-style {
        font-size: 28px;
        font-family: Arial, sans-serif;
        color: #1A0547;
        font-style: italic;
        font-weight: bold;
    }
</style>

    
</body>
</html>
