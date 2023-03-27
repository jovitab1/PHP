<?php
if (rand(0, 1)) {  // generuoja random spalvas
    //if ($_SERVER['REQUEST_METHOD'] == "GET") {} jei i serveri kreipiames get grazink spalva pink, jei post geltona
    $color = "pink";  //jei random skaiciu true 1 tai spalva bus pink
} else {
    $color = "yellow";
}
// matome serverio masyva ir jame esancius elementus
print_r($_SERVER);
echo "<br>";
print_r(count($_SERVER)); //suskaiciuoja kiek masyve yra elementu
echo "<br>";
print_r(array_keys($_SERVER)); //issitraukiame is masyvo esancius raktazorius
echo "<br>";
print_r($_SERVER['REQUEST_METHOD']); // grazina kokiu budu buvo kreiptasi i serveri
//die; //koda bus vykdomas iki sios vietos(dabar matome)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <title>Document</title>
</head>
<!-- <body style="background-color: blueviolet;">  -->

<body style="background-color:<?= $color ?>;">
    <!-- spalva galime perduoti per kintamaji -->

    <h1>Homepage</h1>
    <a href="./home.php">Home</a>
    <!-- nuoroda savyje perdave kintamaji -->
    <a href="?labas=sveiki visi"> nuoroda i save</a>
    <a href="https://www.google.com"> nuoroda i google</a>
    <!-- nurodo kur kreipsis t.y i kuri puslapi -->

    <a href="./pirmas.php">1. Uzduotis</a>

    <!-- get nuoroda kreipiasi i serveri ir grazina atsakyma. Jei nenurodome action puslapis kreipiasi i save(acion nuoroda i koki puslapi kreipiames) Formos pagrindinis tikslas vartotojui sudaryti galimybe  issiusti is internetinio puslapio i musu serveri uzklausa. get kintamuosiu galime suvesti per url, kreiptis per href()linkas, arba form get. visus duomenis matome url vietoje-->
    <form action="" method="get">
        <!-- input laukelis butinai turi tureti kintamaji siuo atveju varda -->
        <input type="text" name="vardas">
        <input type="text" name="pavarde">
        <!-- kai spaudziamas button'as nusiunciu uzklausa i serveri, o jame pasiliedzia failas i kuri kreipiames ir jis ivykdo jame parasyta koda siuo atveju atspausdina varda ir pavarde h1 tage -->
        <button type="submit">touch me!</button>
    </form>

    <!-- i post kreipiames tik per form post.Post kintamuju i url nededa(neatvaizduoja). pvz slaptazodio ivedimo laukeliuose -->
    <!-- <form action="" method="post">
      <input type="text" name="vardas">
    <input type="text" name="pavarde">
    <button type="submit">touch me!</button>
 </form> -->
    <?php
    print_r($_GET); //su apatiniu bruksniu galiu matyti visus masyvus, kurie yra sukurti serveryje. kai duomenis nukeliauja i serveri juos si funcija atvaizduoje narsykleje(ekrane). suvedus url duomenis -juos taip pat matytume narsykleje
    print_r($_POST);
    ?>
    <!-- <h1><?= $_GET['vardas'] ?></h1>
    <h1><?= $_GET['pavarde'] ?></h1> -->
    <!-- jei get masyve yra nurodytas kintamasis siuo atveju vardas, ivykdo uzduoti siuo atveju atvaizduoja varda ir pavarde. Isset funkcija patikrina ar get masyve egzistuoja kintamaiss.. -->

    <?php if (isset($_POST['vardas']) && isset($_POST['pavarde'])) { //neatvaizduoja h6
        echo "<h6>" . $_POST['vardas'] . "</h6>";
        echo "<h6>" . $_POST['pavarde'] . "</h6>";
    } ?>

    <?php if(isset($_GET['vardas']) && isset($_GET['pavarde'])) { ?>
        <h1><?= $_GET['vardas'] ?></h1>
        <h1><?= $_GET['pavarde'] ?></h1>

    <?php } ?>

</body>

</html>