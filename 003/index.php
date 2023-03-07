<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php

/*
1. Naršyklėje nupieškite linija iš 400 “*”. 
a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/

/*
2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais 
ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/
$filtered = 0;

for ($i = 0; $i <= 300; $i++) { 
   $number = rand(0, 300);
   if ($number > 250) {
     echo "<span style = 'color: crimson'>$number </span>";
   } 
   else {
    echo " $number  ";
   }
   if ($number > 150) {
    $filtered++;
   }
  
}

echo "<h4> $filtered - tiek skaičių yra didesnių už 150.<h4>";


/*
3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus 
tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
*/

echo '<br>';
$arr = [];
$setRand = rand(3000, 4000);
for ($i=1; $i <= $setRand; $i++) { 
    if($i %77 === 0) {
        $arr[] = $i;
    }
} 
echo implode(", ", $arr);



?>
</body>


