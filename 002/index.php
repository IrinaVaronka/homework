<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW-2</title>
    
</head>
<body>

<?php
/*
1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą.
*/

echo '--------1-----------';
echo '<br>';

$a = 'Antonio';
$b = 'Banderas';

if (strlen($a) < strlen($b)) {
    $short = $a;
} else {
    $short = $b;
}
echo '<h4>' .'Short name: ' . $short. '<h4>';
echo '<br>';


/*
2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/

echo '<br>';
echo '--------2-----------';
echo '<br>';

echo strtoupper($a) . ' ' . strtolower($b);

/*
3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti.
*/
echo '<br>';
echo '--------3-----------';
echo '<br>';

$c = substr($a, 0, 1) . substr($b, 0, 1);
echo $c;


/*
4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir 
pavardės kintamųjų raidžių. Jį atspausdinti.
*/
echo '<br>';
echo '--------4-----------';
echo '<br>';

$a = 'Antonio';
$b = 'Banderas';

$rest = substr($a, 4) . substr($b, 5);
echo $rest;

echo '<br>';
echo '--------5-----------';
echo '<br>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  
Rezultatą atspausdinti.
*/

$film = 'An American in Paris';
$toChange = array('a', 'A');
$rezultat = str_replace($toChange, "*", $film);
echo $rezultat;


echo '<br>';
echo '--------6-----------';
echo '<br>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
Rezultatą atspausdinti.
*/

$film = 'An American in Paris';
echo substr_count($film, 'a') + substr_count($film, 'A'); 

echo '<br>';
echo '--------7-----------';
echo '<br>';

/*
Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/

$film = 'An American in Paris';
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$flm = str_replace($vowels, "", $film);
echo $flm;

echo '<br>';
$breakfast = "Breakfast at Tiffany's";
$breakfast = str_replace($vowels, "", $breakfast);
echo $breakfast;

echo '<br>';
$space = "2001: A Space Odyssey";
$space = str_replace($vowels, "", $space);
echo $space;

echo '<br>';
$life = "It's a Wonderful Life";
$life = str_replace($vowels, "", $life);
echo $life;

 
?>
</body>