<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter Grid</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 50px);
            grid-template-rows: repeat(3, 50px);
            gap: 10px;
            margin: 50px;
        }
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            font-size: 24px;
            font-weight: bold;
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>

<?php

$letterA = "A";
$letterB = "B";
$letterC = "C";
?>

<div class="container">
    <div class="box"><?php echo $letterA; ?></div>
    <div></div>
    <div></div>
    
    <div class="box"><?php echo $letterA; ?></div>
    <div class="box"><?php echo $letterB; ?></div>
    <div></div>
    
    <div class="box"><?php echo $letterA; ?></div>
    <div class="box"><?php echo $letterB; ?></div>
    <div class="box"><?php echo $letterC; ?></div>
</div>

</body>
</html>
