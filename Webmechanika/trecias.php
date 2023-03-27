
<?php
$color = "1D7874";

if (isset($_GET['color'])) {
    $color = $_GET ['color']; 
}
print_r($_GET);
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
 <h1>3 uzduotis</h1>
 <a href="./home.php">Home</a>

 <a href="./trecias.php"> nuoroda i save</a>
 <form action="" method="get">
    <input type="text" name="color">
    <button type="submit"> SEND </button>
 </form>
<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
</body>
</html>