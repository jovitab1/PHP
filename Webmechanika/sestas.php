<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") { //
    $color = "green";
}else{
    $color ="yellow";
}
?>
 <!-- galima nukreipti kelis kartus i pagrindini puslapi -->

<?php
//if ($_SERVER['REQUEST_METHOD'] == "GET") { //
 //   $color = "green";
//}else{
//    header("Location:./sestas.php");
 //   die; // siuo atveju visada nukreips i sesta uzduoti
  //  $color ="yellow";
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="./home.php">Home</a>
<body style="background-color:<?=$color?>;">
    <form action="" method="get">
     <button type="submit"> GET </button>
    </form>

    <form action="" method="post">
    <button type="submit">POST</button>
    </form>
</body>
</html>

<!--  Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.-->