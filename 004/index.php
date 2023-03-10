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
1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/

$arr = array_fill(0,29, 0);
foreach(range(0,29) as $i) {
    $arr[$i] = rand(5, 25);
};

foreach ($arr as $index => $value) {   
   echo 'Reikšmė: ' . $index . ' ' . $value . '<br>';
}
'<br>';

/*
3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
*/



// $d = [];

// for ($i=0; $i<=200; $i++) { 

//     $d=chr(rand(65,68)); 
//     echo $d;
//     '<br>';
   // $s = (array_keys($d, chr(65)));
   // echo $s;

    

// }

// $array = array(chr(rand(65,68)));
// $a = count(array_keys($array, 'A'));
// echo $a;


/*
5. masyv 2.
Sukurkite masyvą iš 30 elementų. 
Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
*/

function getUnique($to)
{
    static $ids = [];
    do {
        $id = rand(1, $to);
    } while(in_array($id, $ids));
    $ids[] =$id;
    return $id;
}

$users = array_map(fn($_) => ['user_id' => getUnique(30), 'place_in_row' => rand(1, 100)], range(1, 30));
echo '<pre>';
print_r($users);


/* 7
*/

function randString()
{
    $letters = range('a', 'z');
    $out = '';
    foreach(range(1, rand(5, 15)) as $_) {
        $out .= $letters[rand(0, count($letters) -1 )];
    }
    return $out;
}

usort($users, fn($a, $b) => $a['user_id'] <=> $b['user_id']);

$users = array_map(function($users) {
    $user['name'] = randString();
    $user['surname'] = randString();
    return $user;
}, $users);

echo '<pre>';
print_r($users);





?>
</body>

