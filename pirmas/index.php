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
   $hour = rand(1, 24);
   $min = rand(1, 60);
   $sec = rand(1, 60);
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
  echo "<h1>  2. Uzduotys - String </h1>";
//1. uzduotis. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
echo "<br>";
echo "<hr>";
echo "<h3> 1 uzduotis </h3>";

$name = "Robert";
$surname= "De Niro";

echo "<h2>". $name . " " . $surname. "</h2>";

 echo strlen($name). "<br>" ;
 echo strlen($surname). "<br>" ;

 if (strlen($name) < strlen($surname)) {
   echo "<h3>" . $name . "</h3>";
 } else {
    echo "<h3>" . $surname . "</h3>";
 }

// 2 uzduotis. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
// cia neskaito tarpu kaip simboliu???

echo "<br>";
echo "<hr>";
echo "<h3> 2 uzduotis </h3>";
$name = "Robert";
$surname= "De Niro";
 
echo "<p>". strtoupper($name) . " " . strtolower($surname) . "</p>" ;

// 3. uzduotis.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
echo "<br>";
echo "<hr>";
echo "<h3> 3 uzduotis </h3>";
$name = "Norbertas";
$surname= "De Niro";
$initials= "";
$initials= "<h2>". substr($name, 0,1) . substr($surname, 0, 1) . "</h2>" ;
echo $initials;

//4.uzduotis. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo "<br>";
echo "<hr>";
echo "<h3> 4 uzduotis </h3>";
$name = "Norbertas";
$surname= "De Niro";
$initials= "";
$initials= "<h2>". substr($name, -3) . substr($surname, -3) . "</h2>" ;
echo $initials;


//5 uzduotis.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

echo "<br>";
echo "<hr>";
echo "<h3> 5 uzduotis </h3>";
$text= array("A","a");
echo str_replace($text, "*", 'An American in Paris');
// echo str_ireplace("a","*","An American in Paris");pakeicia visas raides didziasias ir mazasias
// 6 uzdavinys.Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

echo "<br>";
echo "<hr>";
echo "<h3> 6 uzduotis </h3>";
$str = "An American in Paris";
echo strlen($str)."<br>"; // Using strlen() to return the string length
echo substr_count($str,"a") + substr_count($str,"A")."<br>"; // The number of times "is" occurs in the string

//function Countt($str)
//{
 //   $upper = 0; 
   // $lower = 0;
    //$special = 0;
    //for ($i = 0; $i <= strlen($str); $i++)
   // {
      //  if ($str[$i] <= 'A')
      //      $upper++;
      //  else if ($str[$i] >= 'a')
       //    $lower++;
        //else if($str[$i] >= '')
          // $special++;
 //  }
   // echo "Upper case letters: " , $upper, "\n" ;
   // echo "Lower case letters : " ,$lower,"\n" ;
   // echo "Special characters : ", $special ;
//} 
    // Driver Code
    //$str = 'An American in Paris';
   // Countt($str);
  
//7 uzdavinys.Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

echo "<br>";
echo "<hr>";
echo "<h3> 7 uzduotis </h3>";
$text= array("A","a", "i", "e", "I", "u");
echo str_replace($text, "", 'An American in Paris'). "<br>";
echo str_replace($text, "", "Breakfast at Tiffany's"). "<br>";  /// “Breakfast at Tiffany's” kodel uzrasius pilna sakini meta klaida?
echo str_replace($text, "", '2001: A Space Odyssey'). "<br>";
echo str_replace($text, "", "It's a Wonderful Life"). "<br>";

// 8 uzdavinys.Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

echo "<br>";
echo "<hr>";
echo "<h3> 8 uzduotis </h3>";
$sent= 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $sent;

echo "<br>";
echo substr($sent,18,-12);

//9 uzdavinys.Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”. 

echo "<br>";
echo "<hr>";
echo "<h3> 9 uzduotis </h3>";
$sent= "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$count = 0;

echo "<br>";

echo str_word_count("Don't Be a Menace to South Central While Drinking Your Juice in the Hood"). " - žodių sakinyje";
//echo substr_count($sent, $word)."<br>"; // The number of times "is" occurs in the string

echo "<br>";

$strArr = explode(" ", $sent);
print_r($strArr); // masyvui spausdinti
//print_r(explode(" ",$sent) ); galima ir taip

for ($i=0; $i < count($strArr); $i++) { 
   //strlen($strArr[$i]);
   if (strlen($strArr[$i])<=5) {
    $count++;
   }
}

echo $count;
echo "<br>";
//9.1 “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”

echo "<hr>";

$text= "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$count1 = 0;
$strC = explode(" ", $text);

for ($i=0; $i < count($strC); $i++) { 
    if (strlen($strC[$i])<=5) {
     $count1++;
    }
 }
 
 echo $count1;

// 10.Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.???

echo "<br>";
echo "<hr>";
echo "<h3> 10 uzduotis </h3>";
$length = 3;    
echo substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$length);


// arba toks sprendimas
echo "<br>";
echo "<hr>";

$n = 3;
function getRandomString($n)
{
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

echo getRandomString($n);

echo "<br>";
echo "<hr>";
echo "<h1> 3 Ciklai </h1>";
echo "<h3> 1 uzduotis </h3>";

// 1 uzduotis. Naršyklėje nupieškite linija iš 400 “*”. 


//example to demonstrate star pattern-1
for ($i=0; $i < 100; $i++) { 
  echo "*";
}
echo '<br>';

//Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
for ($i=0; $i < 20; $i++) { 
    echo "*";
    //$row=" ";
    for ($j=0; $j < 20; $j++) { 
        echo "*";
      //  $row .= "*";
       
    }
    echo "*";
  }
  echo '<br>';
  echo "<hr>";
  //Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

  for ($i=0; $i < 5; $i++) { 
    $row=" ";
    for ($j=0; $j < 5; $j++) { 
        $row .= "*";
       
    }
    echo $row;
  }
?>
    ?>






</body>

</html>