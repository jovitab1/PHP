<?php

$color = "#00020F"; // pirminio puslapio spalva
if (($_SERVER['REQUEST_METHOD']) == "POST") {
    $color = "white"; // jei ateiname su post
}
print_r($_POST);
$letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
$rnd=rand(3,10); // jei gauta reiksme naudosim daugiau kartu sukuriame kintamaji kuriam priskiriame norima reiksme
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    label {
        color: aliceblue;
    }
</style>

<body style="background-color:<?= $color ?>;">
    <a href="./home.php">Home</a>
<!-- jei atejome i puslapi su GET, toliau vykdoma uzklausa ir matoma forma -->
<?php if ($_SERVER['REQUEST_METHOD'] == "GET") {?> 
    <form action="" method="post">
        <!-- generuoja random checkbox'us -->
        <?php for ($i = 0; $i < $rnd; $i++) { ?>
            <label><?= $letters[$i]?></label>   
            <!-- sio funconalumo deka pamatome kiek varneliu buvo pazymeta -->
            <input type="checkbox" name="varneles[] id="">
        <?php } ?>
        <button class="btn btn-primary" type="submit">Pateikti duomenis</button>
        <!-- suskaiciuoja kiek varneliu buvo uzdeta, jie yprastai nera matomi, galime matyti tik consoleje arba atsispausdine masyva 7 eilute -->
       <input type="hidden" name="count" value="<?=$rnd?>"> 
    </form>
    <!-- pazymejus atitinkama varneliu skaiciu checkbox isnyksta ir atvaziduojamas pazymetu checkbox skaicius -->
    <?php }else{?> 
        <h2><?=(isset($_POST['varneles'] )) ? count($_POST['varneles']) : "nepazymetas nei vienas chekbox'as"?></h2> 
        <!--  suskaiciuoja kiek sugeneruota buvo checkbox , jie yprastai nera matomi, galime matyti tik consoleje arba atsispausdine masyva 7 eilute --> 
        <h2><?=$_POST['count']?></h2>
    <?php }?>
</body>

</html>

<!-- Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->