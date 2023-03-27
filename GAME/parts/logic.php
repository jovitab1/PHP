<?php 
session_start();


if ($_SERVER['REQUEST_METHOD'] == "POST") { // naudojame post nes atvykome i zaidima pirma karka

    // jei neturime issetintu zaideju susukuriame baze kintamuju
    if (!isset($_SESSION['game'])){
        $_SESSION['game']['player1Name'] =$_POST["p1"]; // sukuriame 1-o zaidejo varda
       $_SESSION['game']['player2Name'] =$_POST["p2"];
       $_SESSION['game']['player1Points'] = 0; // priskiriame 0 tasku zaidejams
       $_SESSION['game']['player2Points'] = 0;
       $_SESSION['game']['turn'] =0; // nustatome eiliskuma kada kas mes
       $player = $_SESSION['game']['player1name']; // atvaizuojame kuris bus pirmas

    }
   if(isset($_POST['metimas'])){
    if ($_SESSION['game']['turn']) {
        $_SESSION['game']['turn'] =0;
        $player = $_SESSION['game']['player1name'];
        $_SESSION['game']['player2Points'] += rand(1,6);
    } else {
        $_SESSION['game']['turn'] =1;
        $player = $_SESSION['game']['player2name'];
    } $_SESSION['game']['player2Points'] += rand(1,6);
   }

} 
if ( $_SESSION['game']['player1Points']  >=10 || $_SESSION['game']['player2Points']  >=10  ) {
    if($_SESSION['game']['player2Points']  >=10 ){
        echo " Laimejo" . $_SESSION['game']['player2Points'];
    } else {
        echo " Laimejo" . $_SESSION['game']['player1Points'];
    }
    unset($_SESSION['game']);
}
 print_r($_SESSION);

 if($_SERVER)


?>