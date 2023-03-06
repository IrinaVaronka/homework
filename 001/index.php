<?php

/*
1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės 
kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/

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
$number1 = rand(0, 4);
$number2 = rand(0, 4);

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
$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);

echo 'Reikšmė: ' .$pirmas . ' ' . $antras . ' ' . $trecias . '<br>';

$suma = $pirmas + $antras + $trecias;
$vidur = $suma / 3;
'<br>';
echo round($vidur, 0);

/*
4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
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

$q = rand(0, 2);
$w = rand(0, 2);
$e = rand(0, 2);
$r = rand(0, 2);
echo 'Reikšmė: ' .$q . ' ' . $w . ' ' . $e . ' ' . $r .'<br>';
$all = $q .   $w .   $e .   $r;
foreach (count_chars($all, 1) as $i => $val) {
    echo "\"" , chr($i) , "\" occurs in the line $val time(s).\n";
 }

 








