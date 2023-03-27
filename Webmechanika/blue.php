<?php
if (isset($_GET['redirect'])) {
   header("Location:./red.php");
}// jei get masyve yra kintamasis redirect puslapis bus nukreiptas i red.php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #2596be;">
<a href="./home.php">Home</a>
<!-- nuoroda su kintamuoju be reiksmes -->
<a href="./blue.php?redirect"> 5 uzduotis blue puslapis. Paspaudus nukreips i red puslapi</a> 
</body>
</html>
<!-- Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->