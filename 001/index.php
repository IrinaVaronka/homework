<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW 1 "Kintamieji ir sąlygos"</title>
    
</head>
<body>

<?php

/*
1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės 
kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/
echo '--------1-----------';
echo '<br>';
$vardas = 'Iryna';
$pavarde = 'Varonka';
$gimimoMetas = 1991;
$sisMetas = 2056;
$kiekMetu = $sisMetas - $gimimoMetas;

echo "Aš esu $vardas $pavarde. Man yra $kiekMetu metai(ų).";


/* 
2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/
echo '<br>';
echo '--------2-----------';
echo '<br>';
$number1 = rand(0, 4);
$number2 = rand(0, 4);
echo $number1, ', ' .  $number2;
echo '<br>';

if ($number1 !=0 && $number2!=0) {
    if ($number1 > $number2) {
        $dalinam = $number1 / $number2;
        echo round($dalinam, 2);
}
elseif ($number1 < $number2) {
    $dalinam = $number2 / $number1;
    echo round($dalinam, 2);
}
elseif ($number1 == $number2) {
    $dalinam = $number1 / $number2;
    echo $dalinam;
} 
else {
    echo 'Dalyba is 0';
} 
}
else {
    echo 'ligu 0';
   }

echo '<br>';

/* 
3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
*/
echo '--------3-----------';
echo '<br>';
$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);

echo 'Reikšmė: ' .$pirmas . ' ' . $antras . ' ' . $trecias . '<br>';

$suma = $pirmas + $antras + $trecias;
$vidur = $suma / 3;
'<br>';
echo (int)($vidur); 

/*
4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
echo '<br>';
echo '--------4-----------';
echo '<br>';


$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo 'trikampis: ' .$a . ' ' . $b . ' ' . $c . '<br>';
if ($а + $b > $c && $a + $c > $b && $b + $c > $a){
    echo 'galima sudaryti trikampį';
} else {
    echo 'negalima sudaryti trikampį';
}


/*
5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. 
Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/
echo '<br>';
echo '--------5-----------';
echo '<br>';

$q = rand(0, 2);
$w = rand(0, 2);
$e = rand(0, 2);
$r = rand(0, 2);
echo 'Reikšmė: ' .$q . ' ' . $w . ' ' . $e . ' ' . $r .'<br>';
$all = $q .   $w .   $e .   $r;
foreach (count_chars($all, 1) as $i => $val) {
    echo "\"" , chr($i) , "\" occurs in the line $val time(s).\n";
 }

/* 
6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
Pvz skaičius 3- rezultatas: <h3>3</h3>

*/

echo '<br>';
echo '--------6-----------';
echo '<br>';

$p = rand(1, 6);

echo "<h$p>$p</h$p>";

// if ($p === 1) {
//    echo "<h1>$p</h1>"; 
// } elseif ($p === 2) {
//     echo "<h2>$p</h2>"; 
//  } elseif ($p === 3) {
//     echo "<h3>$p</h3>"; 
//  } elseif ($p === 4) {
//     echo "<h4>$p</h4>"; 
//  } elseif ($p === 5) {
//     echo "<h5>$p</h5>"; 
//  } elseif ($p === 6) {
//     echo "<h6>$p</h6>"; 
//  } 


 /*
7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
 */

 echo '<br>';
 echo '--------7-----------';
 echo '<br>';

$first = rand(-10, 10);
$second = rand(-10, 10);
$third = rand(-10, 10);

$colorFirst = match($first <=> 0) {
    -1 => 'green',
    0 => 'red',
    1 => 'blue', 
};

$colorSecond = match($second <=> 0) {
    -1 => 'green',
    0 => 'red',
    1 => 'blue', 
};

$colorThird = match($third <=> 0) {
    -1 => 'green',
    0 => 'red',
    1 => 'blue', 
};


echo "<span style='color: $colorFirst'> $first </span>
    <span style='color: $colorSecond'> $second </span>
    <span style='color: $colorThird'> $third </span>";

/* 
8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
*/
echo '<br>';
echo '--------8-----------';
echo '<br>';

$kaina = 1;
$zvakes = rand(5, 3000);
echo $zvakes, ' zvakiu';
echo '<br>';
if($zvakes >= 1000 && $zvakes < 2000) {
    $SuNuolaida3 = ($kaina * $zvakes) / 100 * 3;
    $kaina3 = ($kaina * $zvakes) - $SuNuolaida3;
    echo $kaina3, '  ','EUR', ' - ',  "kaina su 3% nuolaida";
    

}

if($zvakes >= 2000) {
    $nuolaida4 = ($kaina * $zvakes) / 100 * 4;
    $kaina4 = ($kaina * $zvakes) - $nuolaida4;
    echo $kainsSuNuolaida4, '  ','EUR', ' - ',  "kaina su 4% nuolaida";
    
} 
if($zvakes < 1000){
    
    echo 'Nuolaidos nera';
}


/*
9. 
Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. 
Rezultatus apvalinkite iki sveiko skaičiaus.
*/
echo '<br>';
echo '--------9-----------';
echo '<br>';

$uno = rand(0, 100);
$dos = rand(0, 100);
$tres = rand(0, 100);
echo $uno, ' ',  $dos, ' ', $tres;
echo '<br>';

$sum1 = 0;
$numbers = 0;

if ($uno >= 10 && $uno <= 90) {
     $sum1 += $uno;
      $numbers = $numbers +1;
    
}
if ($dos >= 10 && $dos <= 90) {
     $sum1 += $dos;
     $numbers = $numbers +1;
    
}
if ($tres >= 10 && $tres <= 90) {
     $sum1 += $tres;
     $numbers = $numbers +1;
    
};

    $sum = $uno + $dos + $tres;
    $averageSum = $sum / 3;
    $averageSum2 = $sum1 / $numbers;

echo 'paprasta aritmetinį vidurkį: ', (int)($averageSum);
echo '<br>';
echo 'filtrouta aritmetinį vidurkį: ', (int)($averageSum2);



/*
10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. 
Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir 
po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/
echo '<br>';
echo '--------10-----------';
echo '<br>';

$hour = rand(0, 23);
$min = rand (0, 59);
$sec = rand (0, 59);

$extraSeconds = rand(0, 300);
echo 'Extra seconds are: ', $extraSeconds;

$clock = "$hour : $min : $sec";


     
    $sec1 = $extraSeconds % 60;  
    $extraSeconds = floor($extraSeconds / 60);
    $min1 = $extraSeconds % 60;
    $extraSeconds = floor($extraSeconds / 60);
 
    $clock1 = $extraSeconds+$hour . " : " . $min+$min1 . " : " . $sec+$sec1;


    echo '<br>';
    echo 'Clock before extra seconds: ' . $clock;
    echo '<br>';
    echo 'Clock after extra seconds: ' . $clock1;
    



/*
Papildomas.
11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų NEGALIMA.
*/
echo '<br>';
echo '--------11-----------';
echo '<br>';



$k1 = rand(1000, 9999);
$k2 = rand(1000, 9999);
$k3 = rand(1000, 9999);
$k4 = rand(1000, 9999);
$k5 = rand(1000, 9999);
$k6 = rand(1000, 9999);

 echo $k1;
 echo '<br>';
 echo $k2;

?>
</body> 
</html>
