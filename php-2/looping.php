<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Looping</title>
</head>
<body>
<h1>Berlatih Looping</h1>
<?php
echo "<h3>Soal No 1 Looping I Love PHP</h3>";

// Looping Pertama (Ascending)
echo "LOOPING PERTAMA<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I Love PHP<br>";
}

// Looping Kedua (Descending)
echo "LOOPING KEDUA<br>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I Love PHP<br>";
}

echo "<h3>Soal No 2 Looping Array Modulo </h3>";

// Array angka yang akan dihitung sisa bagi dengan 5
$numbers = [18, 45, 29, 61, 47, 34];

// Menampilkan array angka
echo "Array numbers: ";
print_r($numbers);

// Inisialisasi array untuk menampung hasil sisa bagi
$rest = array();

// Looping untuk menghitung sisa bagi dengan angka 5
foreach ($numbers as $number) {
    $moduloResult = $number % 5;
    array_push($rest, $moduloResult);
}

// Menampilkan hasil sisa bagi
echo "<br>";
echo "Array sisa baginya adalah: ";
foreach ($rest as $result) {
    echo $result . " ";
}

echo "<br><br>";
echo "<h3>Soal No 3 Looping Associative Array </h3>";
$items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

foreach ($items as $item) {
    echo "<tr>";
    echo "<td> Id :" . $item["0"] . "</td> =>";
    echo "<td> Name :" . $item["1"] . "</td> =>";
    echo "<td> Price :" . $item["2"] . "</td> =>";
    echo "<td> Description :" . $item["3"] . "</td><br>";
    echo "</tr>";
}

echo "<br><br>";
echo "<h3>Soal No 4 Asterix </h3>";

echo "Asterix: <br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>






</body>
</html>
