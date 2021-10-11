<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="input">
    <input type="submit" value="Write">
</form>
</body>
</html>
<?php

function isPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function listPrime($num)
{
    $count = 0;
    $N = 2;

    while ($count < $num) {
        if (isPrimeNumber($N)) {
            echo $N . ' ';
            $count++;
        }
        $N++;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["input"];
    listPrime($num);
}
?>

