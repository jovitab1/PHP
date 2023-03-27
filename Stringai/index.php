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
echo str_replace($text, "", "Breakfast at Tiffany's"). "<br>";  
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









?>
</body>
</html>