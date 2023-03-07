<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>

<?php
/*
1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą.
*/

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

echo strtoupper($a) . ' ' . strtolower($b);

/*
3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti.
*/
echo '<br>';

$c = substr($a, 0, 1) . substr($b, 0, 1);
echo $c;





?>
</body>