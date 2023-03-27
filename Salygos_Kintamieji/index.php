<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>




<body>

    <?php
    echo "<h1> 1. uzduotys - Kintamieji ir salygos</h1>";


    //1 uzduotis. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
    //"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

    $name = "Jovita";
    $lastName = "Bernotiene";
    $birthData = 1990;
    $date = 2023;

    echo  "Aš esu " . $name . " " . $lastName . ". " . " Man yra " . ($date -  $birthData) . " metai.";


    //2 uzduotis Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

    echo "<br>";
    echo " <hr>";
    $y = rand(0, 4);
    $x = rand(0, 4);
    echo $x . " " . $y . "<br>";

    echo  round($x / $y  * 100) / 100;
    echo "<br>";

    if ($y != 0 && $x != 0) {
        if ($x > $y) {
            echo   round($x / $y * 100) / 100;
        } else {
            echo round($y / $x, 2);
        }
    } else {
        echo " dalyba is nulio negalima";
    }


    // 3 uzduotis Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
    echo "<br>";
    echo "<hr>";

    $y = rand(0, 25);
    $x = rand(0, 25);
    $z = rand(0, 25);

    echo $x . " " . $y . " " . $z . "<br>";
    if (($y > $x && $y < $z) || ($y < $x && $y > $z)) {
        echo $y;
    }

    if (($x > $y && $x < $z) || ($x < $y && $x > $z)) {
        echo $x;
    }


    if (($z > $x && $z < $y) || ($z < $x && $z > $y)) {
        echo $z;
    }


    // 4 uzdavinys .Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

    echo "<br>";
    echo "<hr>";

    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    echo $a . " " . $b . " " . $c . "<br>";

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo " trikampis galimas";
    } else {

        echo " trikampis negalimas";
    }

    // 5 uzdavinys. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
    // reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

    echo "<br>";
    echo "<hr>";

    $a = rand(0, 2);
    $b = rand(0, 2);
    $c = rand(0, 2);
    $d = rand(0, 2);

    $count0 = 0;
    $count1 = 0;
    $count2 = 0;


    echo $a . " " . $b . " " . $c . " " . $d . "<br>";

    if ($a == 0) {
        $count0++;
    }
    if ($b == 0) {
        $count0++;
    }
    if ($c == 0) {
        $count0++;
    }
    if ($d == 0) {
        $count0++;
    }
    if ($a == 1) {
        $count1++;
    }
    if ($b == 1) {
        $count1++;
    }
    if ($c == 1) {
        $count1++;
    }
    if ($d == 1) {
        $count1++;
    }
    if ($a == 2) {
        $count2++;
    }
    if ($b == 2) {
        $count2++;
    }
    if ($c == 2) {
        $count2++;
    }
    if ($d == 2) {
        $count2++;
    }

    echo $count0;
    echo $count1;
    echo $count2;


    //6. uzduotis. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

    echo "<br>";
    echo "<hr>";

    $a = rand(1, 6);

    echo "<h" . $a . ">" . $a . "</h" . $a . ">";


    // 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.

    echo "<br>";
    echo "<hr>";

    $a = rand(10, -10);
    $b = rand(10, -10);
    $c = rand(10, -10);

    $colorr = '#FF0000';
    $colorg = '#0000FF';
    $colorb = '#00FF00';

    echo $a . " " . $b . " " . $c . "<br>";

    if ($a == 0) {
        echo "<span style=\"color: $colorr\">  $a </span>";
    }
    if ($a > 0) {
        echo "<span style=\"color: $colorg\">  $a </span>";
    }
    if ($a < 0) {
        echo "<span style=\"color: $colorb\">  $a </span>";
    }
    if ($b == 0) {

        echo "<span style=\"color: $colorr\">  $b </span>";
    }
    if ($b > 0) {
        echo "<span style=\"color: $colorg\">  $b </span>";
    }
    if ($b < 0) {
        echo "<span style=\"color: $colorb\">  $b </span>";
    }
    if ($c == 0) {
        echo "<span style=\"color: $colorr\">  $c </span>";
    }
    if ($c > 0) {
        echo "<span style=\"color: $colorg\">  $c </span>";
    }
    if ($c < 0) {
        echo "<span style=\"color: $colorb\">  $c </span>";
    }

    // 8 uzdavinys.Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

    echo "<br>";
    echo "<hr>";
    $colorb = '#0000FF';
    $count = rand(5, 3000);

    echo "<br>";

    echo $count;

    echo "<br>";

    if ($count > 1000 && $count < 2000) {
        echo ($count - ($count * 3 / 100)) . " " . "<span style=\"color: $colorb\">  price with 3% discount  </span>";
    }

    if ($count > 2000) {
        echo ($count - ($count * 4 / 100)) . " " . "<span style=\"color: $colorg\"> price with 4% discount  </span>";
    }

    if ($count < 1000) {
        echo  $count . " " . "<span style=\"color: $colorg\"> price without discoun </span>";
    }

    // 9.uzdavinys Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

    echo "<br>";
    echo "<hr>";

    $y = rand(0, 100);
    $x = rand(0, 100);
    $z = rand(0, 100);

    echo $x . " " . $y . " " . $z . "<br>";

    $average = (round($x + $y + $z) / 3) . " aritmetinis vidurkis";

    echo $average . "<br>";

    $sum = 0;
    $count = 0;
    if ($y > 10 && $y < 90) {
        $sum += $y;
        $count++;
    }
    if ($x > 10 && $x < 90) {
        $sum += $x;
        $count++;
    }
    if ($z > 10 && $z < 90) {
        $sum += $z;
        $count++;
    }

    echo $sum . " <br>";
    echo $count . " <br>";
    echo round($sum / $count, 2) . " " .  "rezultatas";


    // 10. uzdavinys Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių. ??? nepavyko


    echo "<br>";
    echo "<hr>";
   $hour = rand(0, 23);
   $min = rand(0, 59);
   $sec = rand(0, 59);
    echo $hour . " : " . $min . " : " . $sec . "<br>";
    $session = "AM";

    if($hour == 0){
        $hour = 12;
    }
    if($hour > 12){
        $hour = $hour - 12;
        $session = "PM";
     }
  
    // $hour = ($hour < 10) ? "0" + $hour : $hour;
    // $min = ($min < 10) ? "0" + $min : $min;
     //$sec = ($sec < 10) ? "0" + $sec: $sec;
      
     echo  $hour .":". $min .":" .$sec. " " . $session;
  
   
   
   //  function startTime() {
   //     const today = new Date();
  //      $h = today.getHours();
   //     $m = today.getMinutes();
   //     $s = today.getSeconds();
   //     m = checkTime(m);
   //     s = checkTime(s);
  //      document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  //      setTimeout(startTime, 1000);
  //    }
      
  //    function checkTime(i) {
  //      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  //      return i;
  //    }

  echo "<br>";
  echo "<hr>";

?>

</body>

</html>