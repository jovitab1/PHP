<?php
$color = "ff1234";

if (isset($_GET['color'])) {// nustatome ar kintamasis egzistuoja jei egzistuoja 
    $color = $_GET ['color']; /// paimmame is get masyvo ezistuojancia spalva
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<body style=background-color:#<?=$color?>;> 
 <h1>2 uzduotis</h1>
 <a href="./home.php">Home</a>
 <!-- nuoroda i save -->
 <a href="./antras.php">pirmas</a>

</body>
</html>
<!--  Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.-->