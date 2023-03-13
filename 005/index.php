<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    
</head>
<body>

<?php


/*
Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

*/
echo '--------1-----------';
echo '<br>';

$masivas = [
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
    [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)],
];

echo '<pre>';
print_r($masivas);


echo '<br>';
echo '--------2-----------';
echo '<br>';

/*
Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
*/

$count = 0;
foreach ($masivas as $value) {
   foreach ($value as  $value2) {
   //print_r ($value2 . '<br>');
   if ($value2 > 10) {
    $count ++;
   }
   };
};
echo $count;

/*
b) Raskite didžiausio elemento reikšmę;
*/
echo '<br>';
foreach ($masivas as $value) {
foreach($value as $k => $v)
{
    if($v > $max) {
        $max = $v;   
    }
}
};
echo "Max value: $max <br>";

/*
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
$count = 0;
foreach ($masivas as $i => $value) {
    
    $count0 += $value[0];
    $count1 += $value[1];
    $count2 += $value[2];
    $count3 += $value[3];
    $count4 += $value[4];
    };

 echo "Sum of indexes: $count0, $count1, $count2, $count3, $count4"; 


 echo '<br>';
 // d.Visus antro lygio masyvus “pailginkite” iki 7 elementų

foreach ($masivas as $y => $value4) {
        $masivas[$y][5] = rand(1,4);
        $masivas[$y][6] = rand(1,4);
}
 
 print_r([$masivas]);