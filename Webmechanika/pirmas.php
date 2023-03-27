<?php
$color = "black"; // pirminis kintamasis

if (isset($_GET['color'])) {  //klausia ar masyve yra kintamasis color. si salyga grazina true arba false(1-oje nuorod-kintamojo color n4ra todel spalva juoda)
    $color="red"; // jei yra pasikeis spalva siuo atveju i raudona. ( 2-oje nuorodoje yra kontamasis, todel splava pasikeicia )
   
}
print_r($_GET) // serveris atvaizuoja masyva(ar yra kintamasis ar ne)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- paduodamas kitamasis kuris grazina spalva (siuo atveju raudona)-->
<body style=background-color:<?=$color?>;> 
 <h1 style="color: white;"> 1 uzduotis</h1>
 <!-- nuoroda i ta pati tinklapi ( siuo atveju home) -->
 <a href="./home.php">Home</a>
<a href="./pirmas.php" style="color: white;">pirma nuodora</a>
<!-- nuoroda kuri turi kintamaji -->
<a href="./pirmas.php?color=1" style="color: white;">antra nuoroda</a>

</body>



</html>

<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas -->
