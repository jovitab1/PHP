<?php include "./logic.php"
?>

<html lang="en">
<head>
   
<?php include "./head.php" ?>
</head>
<body>
   
    <!-- jei pirmas zaidejas neisetintas, tada atvaizduosime forma kur galima suvesti duomenis -->
    <?php if (!isset($_SESSION['game'])) { ?>
        <h1>Pradėkite žaidimą</h1>
  <form action="" method="POST">
  <input type = "text" name="p1">
  <input type = "text" name="p2">
  <button type="submit">Mesti kauliuką</button>
  </form>
  <?} else {?>
    <h1>< Taskai:</h1>
    <h2><?=$_SESSION['game'] ['player1Name']?>: <?=$_SESSION['game'] ['player1Points']?></h2>
    <h2><?=$_SESSION['game'] ['player2Name']?>: <?=$_SESSION['game'] ['player2Points']?></h2>
    <?} ?>}
</body>
</html>

<!--  11 uzd. Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. Šone yra rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.
-->