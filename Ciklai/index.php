<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<div class="square">
</div>
<style>
  #wordwrap {
    word-wrap: break-word;
  }

  span {
    color: red;
    font-weight: bold;

  }

  p {}

  div {
    width: 7px;
    height: 7px;
  }
</style>




<body>
  <?php
  echo "<h1> 3 Ciklai </h1>";
  echo "<h3> 1 užduotis. Naršyklėje nupieškite linija iš 400 “*”. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane; Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”</h3>";

  // 1 uzduotis. Naršyklėje nupieškite linija iš 400 “*”. 


  echo '<p id ="word-wrap">';

  for ($i = 0; $i < 400; $i++) {
    echo "*";
  }
  echo "</p>";

  echo '<br>';

  //Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
  echo "<p>";
  for ($i = 0; $i < 401; $i++) {
    echo "*";
    if ($i % 50 == 0 && $i != 400) {
      echo "<p></p>";
    }
  }
  echo "</p>";

  echo '<br>';
  echo "<hr>";
  //Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 



  echo "<br>";
  echo "<hr>";
  echo "<h3> 2 užduotis. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos. </h3>";
  //Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
  $count = 0;
  for ($i = 0; $i < 300; $i++) {
    $rand = rand(0, 300);
    //echo $rand. " ";
    if ($rand > 150) {
      $count++;
    }
    if ($rand <= 275) {
      echo $rand . " ";
    } else {
      echo  "<span>" . $rand . " " . "</span>";
      //echo  '<span style="color:red;font-weight:bold">'. $rand. " " . '</span>';
    }
  }

  echo "<p>" . $count . "</p>"; // rezultatas kiek tokiu skaiciu yra

  echo "<br>";
  echo "<hr>";
  echo "<h3> 3 užduotis. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. </h3>";

  // Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. ???
  $random = rand(3000, 4000);
  $sum = " ";
  for ($i = 77; $i <= $random; $i += 77) {
    $sum .= $i . ", ";
  }

  echo $sum . "<br>"; //rezultatas
  echo substr($sum, 0, -2); //be paskutinio kablelio

  echo "<br>";
  echo "<hr>";
  echo "<h3> 4 užduotis. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis </h3>";

  //Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
  echo '<p id ="word-wrap">';
  for ($i = 0; $i <= 100; $i++) { ///kiek bus eiluciu
    $star = " ";
    for ($j = 0; $j <= 100; $j++) { //ciklas sukasi ir priklijuoja zvaigzdutes
      $star .= "*";
    }
    echo "<div>" . $star . "</div>"; ////????? nesu tikra
  }

  ///echo '<div class = "row">' . $star . "</div>"; 
  echo "</p>";

  echo "<br>";
  echo "<hr>";
  echo "<h3> 5 užduotis. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines </h3>"; //??? nesigavo!!!!!!
  //Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
  //echo '<p id ="word-wrap">';
  for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
      echo "*";
      if ($i == $j || $i == 3) {
        echo "<span class='red'>" . "*" . "</span>";
      } else {
        echo "<span class='black'>" . "*" . "</span>";
      }
    }
    echo "<br>";
  }

  //echo "</p>";
  echo "<br>";
  echo "<hr>";
  echo "<h3> 6 užduotis. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. </h3>";
  //Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
  //Iškritus herbui;
  //Tris kartus iškritus herbui;
  //Tris kartus iš eilės iškritus herbui;

  $coin = rand(0, 1);
  if ($coin == 0) {
    echo  "<p>" . $coin . " - " . 'Herbas' . "</p>";
  } else {
    echo "<p>" . $coin .  " - " . 'Moneta' . "</p>";
  }

  echo "<br>";
  echo "<hr>";
  echo "<h3> 6 a užduotis. Iškritus herbui stabdome metimą </h3>";
  // iskritus herbui stabdome metima
  echo "<br>";

  $countH = 0;
  $countS = 0;
  while (true) {
    $coin = rand(0, 1);
    if ($coin == 0) {
      echo "<p>" . 'H' . "</p>";
      $countH++;
    } else {
      echo "<p>"  . 'S' . "</p>";
      $countS = 0; // si funcija nulina viska kas vyko pries tai

    }
    if ($countH == 1) {
      break;
    }
  }
  echo "stabdome metima";

  echo "<br>";
  echo "<hr>";
  echo "<h3> 6 b užduotis. Iškritus tris kartus herbui stabdome metimą </h3>";
  // iskritus tris kartus herbui stabdome metima
  echo "<br>";

  $countH = 0;
  $countS = 0;
  while (true) {
    $coin = rand(0, 1);
    if ($coin == 0) {
      echo "<p>" . 'H' . "</p>";
      $countH++;
    } else {
      echo "<p>"  . 'S' . "</p>";
      $countS = 0; // si funcija nulina viska kas vyko pries tai

    }
    if ($countH == 3) {
      break;
    }
  }
  echo "stabdome metima";
  echo "<br>";
  echo "<hr>";
  echo "<h3> 7 užduotis. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
</h3>"; //nesigavo be break???
  $coutKazys = 0;
  $countPetras = 0;


  $shouldPlay = true;
  while ( $shouldPlay) {
    $petras = rand(10, 20);
    $kazys = rand(5, 25);

    $countPetras += $petras;
    $countKazys += $kazys;

    echo " Kazys " . $kazys . " surinko tasku " . " - " . "Petras " . $petras . " surinko tasku " . "<br>";

    if ($countKazys >= 222 || $countPetras >= 222) {
      $shouldPlay = false;
    }
  }

  if ($countPetras < $countKazys) {
    echo "<p>" . 'Partija laimejo : Kazys - surinko ' . $countKazys . "</p>";
  } else {
    echo "<p>" . 'Partija laimejo : Petras - surinko ' . $countPetras .  "</p>";
  }

  echo "<br>";
  echo "<hr>";
  echo "<h3> 8 užduotis. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą, kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). 
</h3>"; // nepavyko sugeneruotu spalvu
  // piramide
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
  $size = 5;
  for ($i = 0; $i < $size; $i++) {
    
    // print spaces
    for ($j = 0; $j < $size - $i - 1; $j++) {
      echo "&nbsp;&nbsp;"; //Nepertraukiama erdvė &nbsp;
    }
    // print stars
    for ($k = 0; $k < 2 * $i + 1; $k++) {
      echo "*";
    }
    echo "<br>";
  }
  echo "<br>";
  echo "<hr>";
  /// atvirkstine piramide
  $size = 5;
  for ($i = 0; $i < $size; $i++) {
    // print spaces
    for ($j = 0; $j < $i; $j++) {
      echo "&nbsp;&nbsp;";
    }
    // print stars
    for ($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
      echo "*";
    }
    echo "<br>";
  }

  echo "<br>";
  echo "<hr>";

  //// rombas
  $size = 21;

  // upside pyramid
  for ($i = 1; $i <= $size; $i++) {
    // printing spaces
    for ($j = $size; $j > $i; $j--) {
      echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
      
  $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
  echo '<span style="color:'.$color.'">*</span>';
    //  echo "*";
    }
    echo "<br>";
  }
  // downside pyramid
  for ($i = 1; $i <= $size - 1; $i++) {
    // printing spaces
    for ($j = 0; $j < $i; $j++) {
      echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
      // echo "*";
  $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];

      echo '<span style="color:'.$color.'">*</span>';
      //echo "<p style='color:white;'>*</p>";
    }
    echo "<br>";
  }
  echo "<br>";
  echo "<hr>";
  echo "<h3> 10 užduotis. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
        a .“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
        b. “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
        </h3>";
  for ($i = 1; $i < 6; $i++) {
    $viniesGylis = 0;
    $mostaiKartais = 0; //kiek smugiu reikes
    while ($viniesGylis < 85) { // kol vinis ma=esnis nei 85 kalsime vini
      $mostaiPlaktuku = rand(5, 20); //generuoja kiek kartu ikaleme vini
      $viniesGylis += $mostaiPlaktuku; //sumuoja vinies ikalimo gyli
      $mostaiKartais++; // suskaiciuoja mostus plaktuku
    }
    echo "<p>  $i (-a) vinis buvo ikalta  $mostaiKartais  - smugiais. Vinies gylis - $viniesGylis  </p>";
  }
  echo "<hr>";
  // b. “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
  for ($i = 1; $i < 6; $i++) {
    $viniesGylis = 0;
    $mostaiKartais = 0;
    while ($viniesGylis < 85) {
      if (rand()) {                      // kaip suapvalinti random skaiciu iki sveiko skaiciaus???
        $mostaiPlaktuku = rand(20, 30);
        $viniesGylis += $mostaiPlaktuku;
      }
      $mostaiKartais++;
    }

    echo "<p>  $i (-a) vinis buvo ikalta  $mostaiKartais  - smugiais. Vinies gylis - $viniesGylis  </p>";
  }

  echo "<br>";
  echo "<hr>";
  echo "<h3> 11 uzduotis.Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
        </h3>";  
  $text = " "; //tekstas, kuris kiekvieno karta dideja 
  for ($i=0; $i < 50 ; $i++) { // ciklas pasileis 50 kartu ir generuos atsitiktinius skaicius nuo 1 iki 200
 $text.=rand(1,200) . " "; // sugeneruota rnd priklijuos prie  tuščio stringo text
  }
 echo $text; 

 echo "<br>";
  //$string= mt_rand(1,200);
  //echo $string;
  $text = "";
  $count = 0;
  for ($i = 0; $i < 50; $i++) { 
    $count++;
   $rnd = rand(1, 200); 
   if(strpos($text, $rnd) == false){ // jei skaicius nesikartoja mums grazins false ir mes ji noresime isideti i masyvaar skaicius nepasikartoja // naujesneje versinoje naudojame funkcija !str_contains ( ar skaicius nesikartoja)
      $text .= $rnd . " "; // jei nesikartoja priklijuojame skaiciu
   }else{
    $i--; // jeis skaicius pasikartoja i-- ji paklieka koks buvo t.y nepliusuoja o pergeneruoja is naujo pvz buvo 10 toliau salyga raso kad pridetume viena, taciau mes pergeneruojame gauta skaiciu is naujo
   }
}
  echo $text;
  echo "<hr>";
  echo $count; // rodo kiek kartu prasisuko ciklas ir kiek skaiciu isgeneravo kad gautusi 50 skirtingu skaiciu
  echo "<hr>";

  //Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.

$numbers = explode(" ", $text); //teksta suskaido gabaliukais i masyvus
array_pop($numbers); // iskviesta funkcija, kuri nuima paskutini skaiciu
print_r($numbers);  //naudojamas masyvu spausdinimui
echo "<hr>";

$text = ""; // susikuriau kintamaji i kuri dėsime visas reiksmes
$arr2 = [];
for ($i=0; $i < count($numbers); $i++) { // ciklas yra sukamas per skaiciu masyva
      if($numbers[$i] % 2 == 0){ // tikrinu ar skaicius yra porinis
        $arr2[] = $numbers[$i]; // jei skaicius porinis ji ides i sukurta masyva (ides kaip sekanti elementa)
      }
}

print_r($arr2);
echo "<hr>"; 

// sort($arr2); // surusiuoja masyva funcijos pagalba

// echo "<hr>";
// print_r($arr2);

for ($i=0; $i < count($arr2); $i++) { //sukame cikla kuris pereina per visa skaiciu masyva
  for ($a= $i; $a < count($arr2); $a++) { //norint surusiuoti reikia cickla kurti cikle
      if($arr2[$i] < $arr2[$a]){
        $temp =  $arr2[$i];
        $arr2[$i]= $arr2[$a];
        $arr2[$a] = $temp;
      }
   //   echo $arr2[$a] . " ";
  }
 // echo "<br>";
}


print_r($arr2);
echo "<hr>"; 

$arr3 = [1,5,8,4,3];
// surusiuoti !!!!


/// skaiciai rusiuojami mazejancia tvarka sort funkcijos pagalba
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}


  // generuoja skirtingas spalvas
  $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
  $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];

  ?>


    <p style="color:<?=$color?>;">*</p>



  </body>

</html>