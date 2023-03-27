<?php
if (isset($_GET['redirect'])) {
   header("Location:./blue.php");
}// jei get masyve yra kintamasis redirect puslapis bus nukreiptas i blue.php pvz jei vartptpjas prisilogines nukreipiame i sekanti kita puslapi
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #BE2591;">
<a href="./home.php">Home</a>
<a href="./red.php?redirect"> 5 uzduotis red puslapis. paspaudus nukreips i blue puslapi</a>
</body>
</html>
<!-- Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->