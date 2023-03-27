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

echo "<br>";
echo "<hr>";
echo "<h3> 1 uzduotis. Parašykite funkciją, kuri priima sveikąjį skaičių n ir eilutę s kaip parametrus ir grąžina s eilutę, pakartojamą tiksliai n kartų.</h3>";
    //examples 6, "I"     -> "IIIIII"
    // 5, "Hello" -> "HelloHelloHelloHelloHello"

function repeatStr($n, $str)
{
  $txt= " ";
  for ($i=0; $i<$n; $i++){
    $txt.=$str;
  }
  return $txt;
}
echo repeatStr(6, "Hello");


echo "<br>";
echo "<hr>";
echo "<h3> 2 uzduotis. Parašykite funkciją, kuri priima 10 sveikųjų skaičių masyvą (nuo 0 iki 9), kuri grąžina tų skaičių eilutę telefono numerio pavidalu.//example createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns '(123) 456-7890' </h3>";

$phone = "1234567890"; 
$phone2 = "7890123456"; 

$output =  " (" .substr($phone, -10, -7) . ") " . substr($phone, -7, -4) . "-" . substr($phone, -4); 
echo $output;

createPhoneNumber($phone);
createPhoneNumber($phone2);
createPhoneNumber("5872463987");

function createPhoneNumber($phone){
    $output =  " (" .substr($phone, -10, -7) . ") " . substr($phone, -7, -4) . "-" . substr($phone, -4); 
    return $output;
}

// rastas sprendimas bet neveikia
//$numbers= array(1,2,3,4,5,6,7,8,9,0);
//function createPhoneNumber($numbers){
  //  $format = "(xxx) xxx-xxxx";
    
  //  for($i = 0; $i < strlen($numbers); $i++)
   // {
  //    $format = str_replace($numbers[i], "x");
  //  }
    
   // return $format;
  //}

//echo createPhoneNumber($numbers);

echo "<br>";
echo "<hr>";
echo "<h3> 3 uzduotis. Sukurkite funkciją, kuri priima eilutę ir vieną simbolį bei grąžina sveikąjį skaičių įvykių skaičiaus, 2-asis argumentas randamas pirmajame </h3>";//Create a function that accepts a string and a single character, and returns an integer of the count of occurrences the 2nd argument is found in the first one.//If no occurrences can be found, a count of 0 should be returned.
//Jei įvykių nepavyksta rasti, reikia grąžinti skaičių 0.
// example str_count("Hello", 'o'); // returns 1
//str_count("Hello", 'l'); // returns 2
//str_count("", 'z'); // returns 0

function strCount($str, $letter) {
  
    return substr_count($str,$letter); 
     
   }
   echo strCount("Hello",'o');
   echo strCount("Hello",'l');
   echo strCount(" ",'z');

strCount($str, $letter);
// 
$str= "Hello";
echo substr_count($str,"l")."<br>"; // skaiciuoja kiek l raidziu yra $str

echo "<br>";
echo "<hr>";
echo "<h3> 4 uzduotis. Pirmasis šimtmetis apima nuo 1 metų iki 100 metų imtinai, antrasis amžius - nuo 101 metų iki 200 metų imtinai ir kt.Suteikę metus, grąžinkite šimtmetį, kuriame jie yra. </h3>";

function getCentury($year) // 1.01 = 2; 2.00
{
    return ceil($year / 100); ///  ceil funkcija apvalina i didziaja puse
}

echo getCentury(2005);

echo "<hr>";

// kitas sprendimas ??? bet neveikia, paanalizuoti kodel
//function centuryFromYear($year) {
   // $centuryCount = 0;
   // while ($year > 0){
     // $year = $year - 100;
      //$centuryCount = $centuryCount + 1;
    //}
   // return $centuryCount;
  //}

  echo "<br>";
echo "<hr>";
echo "<h3> 5 uzduotis.  </h3>";
// example 

function greet() {
    echo "hello World!" ;
  }
greet();  
 
    ?>
</body>
</html>