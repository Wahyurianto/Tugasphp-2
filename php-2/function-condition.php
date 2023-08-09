<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";

    function greetings($name) {
        $message = "Halo " . ($name) . ", Selamat Datang di Garuda Cyber Institute!";
        echo $message;
    }

    greetings("Wahyu");
    echo "<br><br>";

echo "<h3>Soal No 2 Reverse String</h3>";
function reverseString($string) {
    $reversed = '';

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

$input = "abdul";
$output = reverseString($input);

echo "Input: $input<br>";
echo "Output: $output";

echo"<br><br>";

echo "<h3>Soal No 3 Palindrome </h3>";
function palindrome($string) {
    $reversed = reverseString($string);
    
    if ($string === $reversed) {
        return "true";
    } else {
        return "false";
    }
}



echo "palindrome(\"katak\") => " . palindrome("katak") . "<br>";
echo "palindrome(\"jambu\") => " . palindrome("jambu") . "<br>";

echo"<br><br>";
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}


echo tentukan_nilai(98); 
echo "<br>";
echo tentukan_nilai(76); 
echo "<br>";
echo tentukan_nilai(67); 
echo "<br>";
echo tentukan_nilai(43);
?>


</body>
</html>
