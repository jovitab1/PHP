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

  echo "<h3> 1. Sukurkite funkciją kuri priimtų du kintamuosius, juos sudaugintų ir atvaizduotų rezultatą naršyklėje. </h3>";


  function number($a, $b)
  {
    echo "<h4>" . $a * $b . "</h4>";
  }
  number(20, 2);



  echo "<h3> 2. Sukurkite funkciją kuri priimtų vieną kintamąjį, vardą. Ir atvaizduotų rezultatą naršyklėje: “labas “ ir tą paduotą vardą.  </h3>";

  function text($name)
  {
    echo  "<h4>  Labas  $name  </h4>";
  }

  text("Enrika");

  echo "<h3> 3. Sukurkite funkciją  kuri priimtų vieną kintamąjį, tekstą. Ir atvaizduotų rezultatą naršyklėje: kiek simbolių yra tame tekste.  </h3>";

  $text = "labas vakaras visiems";
  function textname($text)
  {
    echo  "<h4>" . strlen($text) . "</h4>";
  }

  textname($text);

  echo "<h3> 4. Sukurkite funkciją kuri priimtų 2 kintamuosius tekstus, vardą, pavardę ir atspausdintų inicialus. T.y vardo ir pavardės pirmąsias raides DIDŽIOSIOMIS raidėmis.  </h3>";

  $name = "Eneyridfgfrika";
  $lastname = "Bernotaite";
  function initials($name, $lastname)
  {
    echo "<h3>" . substr($name, 0, 1) . substr($lastname, 0, 1) . "</h3>";
  }

  initials($name, $lastname);

  echo "<h3> 5.Parašykite funkciją kuri sugeneruotų 3 random skaičius nuo 0 iki 5 ir atvaizduotų naršyklėje vienoje eilutėje atskirtus kableliais. Po paskutinio skaičiaus kablelio neturi būti.  </h3>";

  function result()
  {

    $sum = " "; // 
    for ($i = 0; $i < 3; $i++) {
      $sum .= rand(0, 5) . ", "; // suklijuoja i eilute ir vis kazka priklijuojame ( didina kintamaji)
    }
    echo "<h3>" . $sum . "</h3>"; //resultatas
    echo rtrim($sum, " ,");  //Pašalinkite simbolius iš dešinės eilutės pusės
    echo substr($sum, 0, -2); //  arba toks sprendimas substr grazina norima fragmenta nuo galo arba pradzios. pvz substr($sum, 2) nuima 2 pirmas nuo pradziu, substr($sum, 0,-2) du simbolius nuo galo
  }

  result();

  echo "<h3> 6. Parašykite funkciją kuri priimtų du kintamuosius “nuo” ir “iki”. Funkcija turi sugeneruoti random skaičių tame intervale ir jį GRAŽINTI. Rezultatą atvaizduoti naršyklėje. </h3>";

  function rnd($nuo, $iki)
  {
    return rand($nuo, $iki);
  }

  $randomnum = rnd(40, 20); //rezultata jei reikes panaudoti dar karta susikuriame kintamaji
  echo $randomnum;

  echo "<h3> 7. Parašykite funkciją kuri sugeneruotų 10 p tagų su skaičiais juose nuo 1 iki 10 ir atvaizduotų naršylkėje. Rezultate HTML’e turi matytis 10 p tagų su skaičiais.  </h3>";

  function ptag()
  {
    for ($i = 1; $i < 10; $i++) {
      echo "<p> $i </p>";
    }
  }
  ptag();

  echo "<h3> 8. Sukurkite funkciją kuri priimtų 3 kintamuosius min, max ir length, sugeneruotų random masyvą length ilgio, užpildytų random skaičiais min max intervale.  </h3>";

  function minmaxlen($min, $max, $lenght)
  {
    $arr = []; //tuscias masyvas
    for ($i = 0; $i < $lenght; $i++) {

      $arr[] = rand($min, $max);  // si funcija masyva papildo reiksmemis
    }
    return $arr;
  }

  print_r(minmaxlen(10, 40, 10));


  echo "<h3> 1. Parašykite funkciją kuri priimtų tekstą kintamąjį ir į gražintų “apsuktą” pvz paduodate Naglis, gaunate silgaN.  </h3>";

  function sentes($name)
  {
    return strrev($name); // apvercia zodi
  }

  echo (sentes(" Enrika"));

  echo "<h3> 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;  </h3>";

  function argument($text)
  {
    echo "<h1>" . $text . "</h1>";
  }

  argument("Nera to blogo kas ne iseitu i gera");

  echo "<h3> 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;  </h3>";
  $numb = rand(1, 6);
  function arguments($text, $numb)
  {

    echo "<h" . $numb . ">" . $text . "</h" . $numb . ">";
  }

  arguments("WOW", $numb);

  echo "<h3> 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;  </h3>";


  function svSkaicius($skaicius)
  {
    $count = 0;
    for ($i = 2; $i < $skaicius; $i++) {
      if ($skaicius % $i == 0) { // i kintantis skaicius
        $count++; // jei dalijasi be liekanos pliusuojame
      }
    }
    return $count; //grazina reiksme
  }

  echo svSkaicius(64);

  // funcija (funkcijoje) atvaizduoja ar skaicius yra pirminis

  function isPrime($num)
  {
    if (svSkaicius($num) == 0) {
      return true;
    }
    return false;
  }
  isPrime(15);

  echo "<h3> 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.  </h3>";
  function rndArray()
  {
    // $count = 0;
    $array = [];
    for ($i = 0; $i < 100; $i++) {
      $array[] = rand(33, 77);
    }

    for ($i = 0; $i < count($array); $i++) { // count funcija skaiciuoja masyvo ilgi
      for ($a = $i; $a < count($array); $a++) {
        if (svSkaicius($array[$i]) < svSkaicius($array[$a])) { // iskvieciame kintamaji svSkaicius ir ji rusuojam pagal isvesta
          $temp =  $array[$i];
          $array[$i] = $array[$a];
          $array[$a] = $temp;
        }
      }
    }
    return $array;
  }
  print_r(rndArray());

  echo "<br>";
  echo "<hr>";
  //$sk= " ";
  //$numbers = explode(" ", $sk); //teksta suskaido gabaliukais i masyvus
  //array_pop($numbers); // iskviesta funkcija, kuri nuima paskutini skaiciu
  //print_r($numbers);  //naudojamas masyvu spausdinimui

  echo "<h3> Surušiuotas skaičių masyvas </h3>";

  $skMas = array(50, 20, 40, 10, 60, 80, 70); // skaiciu masyvas su susikurtais skaiciais
  print_r($skMas);
  echo "<br>";

  for ($i = 0; $i < count($skMas); $i++) { // count funcija skaiciuoja masyvo ilgi
    for ($a = $i; $a < count($skMas); $a++) {
      if ($skMas[$i] < $skMas[$a]) {
        $temp =  $skMas[$i];
        $skMas[$i] = $skMas[$a];
        $skMas[$a] = $temp;
      }
    }
  }

  // 
  function darKarta()
  {
    $skMas = rndArray(); // sukurtas masyvas ir iskviesta funkvija pries tai esancio masyvo skMas
    for ($i = 0; $i < count($skMas); $i++) {
      for ($a = $i; $a < count($skMas); $a++) {
        if ($skMas[$i] < $skMas[$a]) {
          $temp =  $skMas[$i];
          $skMas[$i] = $skMas[$a];
          $skMas[$a] = $temp;
        }
      }
    }
    return $skMas;
  }
  print_r($skMas);


  echo "<br>";
  echo "<hr>";

  echo "<h3> 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.  </h3>"; // neiveikiau :()
  function primeCount()
  {
    $array = [];
    for ($i = 0; $i < 100; $i++) {
      $array[] = rand(333, 777);
    }
    $arr2 = [];
    for ($i = 0; $i < count($array); $i++) {
      if (svSkaicius($array[$i] == 1)) {
        $array[] = svSkaicius($array[$i]);
        return false;
      }
    }
    return  $arr2;
  }
  print_r(primeCount());


  echo "<hr>";
  echo "<h3> Patikrina ar skaicius pirminis  </h3>";
  function check_prime($num)
  {
    if ($num == 1)
      return 0;
    for ($i = 2; $i <= $num / 2; $i++) {
      if ($num % $i == 0)
        return 0;
    }
    return 1;
  }
  $num = 47;
  $flag_val = check_prime($num);
  if ($flag_val == 1)
    echo "It is a prime number";
  else
    echo "It is a non-prime number";
  echo "<hr>";

  echo "<h3> 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0; </h3>";
  // $sz= 1e5; ///1e5 means 1 × 10 pakeltas n-5.Similarly, 12.34e-9 means 12.34 × 10−9.Generally, AeB means A × 10B.
  // sukurtas randam ilgio masyvas, kuris generuoja attsitiktinius skaicius nuo 1-10;
  function rnd_array($numb)
  {
    $rnd = rand(10, 20);
    $array = [];
    for ($i = 0; $i < $rnd; $i++) {
      $array[] = rand(0, 10);
    }
    return $array;
  }
  print_r(rnd_array($numb));

  echo "<br>";
  echo "<hr>";
  echo "<h3> Funncija kuri grazina paskutini masyvo skaiciu </h3>";

  function rnd_array3($numb)
  {
    $rnd = rand(10, 20);
    $array = [];

    for ($i = 0; $i < $rnd; $i++) {
      $array[] = rand(0, 10);
    }
    print_r($array);
    return end($array);
  }

  print_r(rnd_array3($numb));

  echo "<hr>";
  echo "<h3> 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
  </h3>";


  //1. sukurti masyva
  //2. ideti 3 random sveikuosius skaicus nuo 1 iki 33
  //3. sukti cikla nuo -3 elemtentai nuo galo, iki paskutinio ir tikrinti ar visi jie pirminiai
  //4. jei bent vienas is u nepirminis  pridedame DAR viena skaiciu i masyva, ir kartojame zingsni nr3
  // pasitikrinkime rezultata. t.y atvaizduokite kaip nors.
  //function array_elem($elm1, $elm2, $elm3)
  /////////

    $arr0=rand(1,33);
    function getPrime($arr0){
     // $count=0;
      $resultArr0 = [];
      for ($i=0; $i < $arr0; $i++) {  
        if ($arr0[$i]) {
          $resultArr0[]=$arr0[$i]; 
        }
      }
      return $resultArr0;
    }
    // print_r (getPrime($arr0));

     echo "<hr>";  
////////
  function is_prime2()
  {
    $array = [];
    for ($i = 0; $i < 3; $i++) {
      $array[] = rand(1, 33);
    }
    return $array;
  }

is_prime2();

//////
  echo "<hr>";
  // ciklas -3elementai nuo galo???
  $array = [];
  for ($i = -3; $i < 20; $i++) {
    $array[] = rand(1, 33);
  }
  print_r($array);
  echo $i;
  echo "<hr>";
  echo "<hr>";
  echo "<h3> Funcija, kuri iskviecia kita funkcija. Siuo atveju sujungtos 3 funcijos</h3>";
  //4 uzdavinys destyjojo sprendimas.       1.Si funcija suskaiciuoja is kiek skaiciu dalijasi kintamasis
function countDividors($num)
{
$count= 0; // jei reikia suskaiciuoti ir susumuoti naudojame isorini kintamaji
 for ($i=2; $i < $num; $i++) {  // tikrinsime ar paduotas skaicius dalijasi  be liekanos (išskyrus vienetą ir patį save)
  if ($num % $i == 0) { // jei musu skaicius dalijasi i (is3,4,5,6,7,8,9) jei dalijasi pliusuoju kiek kartu dalijasi. Siuo atveju 15 dalijasi be liekanos is dvieju skiaciu, todel mums grazina du
    $count++; // jei si funcija grazins nuli reiskia skaicius pirminis
  }  
 }
 return $count; // grazina suskaiciuota reiksme
}
echo countDividors(15);

echo "<hr>";

// funkcija kuri patikrina ar skaicius pirminis  2. patikrina ar tas skaicius pirminis

echo isPrime3(100); /// jei funcija susijusi kodel cia reikejo paduoti kintamaji?????
var_dump(isPrime3(13)) ; // var_dump pagalba matome daugiau duomenu(galime matyti true ir false, nes kitos spausdinimo funcijos neatvaizduoja 0)
function isPrime3($number)
{ 
  if (countDividors($number)==0) {  //iskvieciame pries tai esancia funkcija(priestai parasyta fukcija  grazina reiksme 2) ir irasome paduota kintamahi siuo atveju $number. tada klausiame ar ta ka grazins si fukcija lygu 0
   return true; // grazins
  }
  return false; // si dali suveiks tik vieninteliu atveju jei nesudirbs pries tai esanti salyga
}

echo "<hr>";
/// is masyvo isrinksime tik pirminius skaicius

//// kitas pavizdys kuris iskviecia 2 funcija  3 . Funcija

function getPrimeNumbers2($arr2){
  $resultArr2 = [];
  for ($i=0; $i < count($arr2); $i++) {  
    if (isPrime3($arr2[$i])) {   //iskvieciama 2 funcija ir paduodamas kintamasis $arr2[i] pvz is maysvo 5,8,10,13,16 ar 18. Ir sioje vietoje man grazins true arba false. T.Y tikrins ar skaicius yra pirminis
      $resultArr2[]=$arr2[$i];  //jei pirminis idesiu i masyva
    }
  }
  return $resultArr2;
}
 print_r (getPrimeNumbers2([5,8,10,13,16,18]));



  ?>
</body>

</html>