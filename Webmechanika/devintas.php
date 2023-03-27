<?php

$color = "#00020F"; // pirminio puslapio spalva
if (($_SERVER['REQUEST_METHOD']) == "POST") {
    $color = "white"; // jei ateiname su post
}
print_r($_POST);
$letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
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
        <?php for ($i = 0; $i < rand(3, 10); $i++) { ?>
            <label><?= $letters[$i]?></label>   
            <!-- sio funconalumo deka pamatome kiek varneliu buvo pazymeta -->
            <input type="checkbox" name="varneles[] id="">
        <?php } ?>
        <button class="btn btn-primary" type="submit">Pateikti duomenis</button>
       
    </form>
    <!-- pazymejus atitinkama varneliu skaiciu checkbox isnyksta ir atvaziduojamas pazymetu checkbox skaicius -->
    <?php }else{?> 
        <h2><?=(isset($_POST['varneles'] )) ? count($_POST['varneles']) : "nepazymetas nei vienas chekbox'as"?></h2> 
    <?php }?>
</body>

</html>
<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). Kodel sioje uzduotyje pildome get , proso uzduotis sukurti post forma --> 