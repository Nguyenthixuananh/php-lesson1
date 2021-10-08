<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read numbers into letters </title>
</head>
<body>
<h2>Read numbers</h2>
<form>
    <input type="text" name="search" placeholder="Enter number"/>
    <input type="submit" id="submit" value="Read"/>
</form>
<?php
$num = $_REQUEST["search"];
if ($num < 20 && $num >= 0){
    switch ($num < 10 && $num >= 0) {
        case $num==0:echo "Zero"; break;
        case $num==1:echo "One"; break;
        case $num==2: echo "Two"; break;
        case $num==3:echo "Three"; break;
        case $num==4: echo "Four"; break;
        case $num==5:echo "Five"; break;
        case $num==6:echo "Six"; break;
        case $num==7:echo "Seven"; break;
        case $num==8:echo "Eight"; break;
        case $num==9:echo "Nine"; break;
    }
    switch ($num < 20 && $num >= 10) {
        case $num==10: echo "Ten"; break;
        case $num==11: echo "Eleven"; break;
        case $num==12: echo "Twelve"; break;
        case $num==13: echo "Thirteen"; break;
        case $num==14: echo "Fourteen"; break;
        case $num==15: echo "Fifteen"; break;
        case $num==16: echo "Sixteen"; break;
        case $num==17: echo "Seventeen"; break;
        case $num==18: echo "Eighteen"; break;
        case $num==19: echo "Nineteen"; break;
    }
}
if ($num >= 20 && $num <100) {
    $a = $num % 10;
    $b = ($num/10) % 10;
    switch ($b) {
        case 2; echo "Twenty "; break;
        case 3; echo "Thirty "; break;
        case 4; echo "Forty "; break;
        case 5; echo "Fifty "; break;
        case 6; echo "Sixty "; break;
        case 7; echo "Seventy "; break;
        case 8; echo "Eighty "; break;
        case 9; echo "Ninety "; break;
    }
    switch ($a) {
        case 1:echo " One"; break;
        case 2: echo " Two"; break;
        case 3:echo " Three"; break;
        case 4: echo " Four"; break;
        case 5:echo " Five"; break;
        case 6:echo " Six"; break;
        case 7:echo " Seven"; break;
        case 8:echo " Eight"; break;
        case 9:echo " Nine"; break;
    }
}
if ($num>+100 && $num<=999) {
    $a = $num % 10;
    $b = ($num/10) % 10;
    $c = ($num/100) % 10;
    if ($b%10!=1) {
        switch ($c) {
            case 1: echo "One hundreds "; break;
            case 2: echo "Two hundreds "; break;
            case 3: echo "Three hundreds "; break;
            case 4: echo "Four hundreds "; break;
            case 5: echo "Five hundreds "; break;
            case 6: echo "Six hundreds "; break;
            case 7: echo "Seven hundreds "; break;
            case 8: echo "Eight hundreds "; break;
            case 9: echo "Nine hundreds "; break;
        }
        if ($b%10==0 && $a !=0) {
            echo("and ");
        }
        switch ($b) {
            case 2; echo "Twenty "; break;
            case 3; echo "Thirty "; break;
            case 4; echo "Forty "; break;
            case 5; echo "Fifty "; break;
            case 6; echo "Sixty "; break;
            case 7; echo "Seventy "; break;
            case 8; echo "Eighty "; break;
            case 9; echo "Ninety "; break;
        }
        switch ($a) {
            case 1:echo "One"; break;
            case 2: echo "Two"; break;
            case 3:echo "Three"; break;
            case 4: echo "Four"; break;
            case 5:echo "Five"; break;
            case 6:echo "Six"; break;
            case 7:echo "Seven"; break;
            case 8:echo "Eight"; break;
            case 9:echo "Nine"; break;
        }
    }
    if ($b%10==1) {
        switch ($c) {
            case 1: echo "One hundreds "; break;
            case 2: echo "Two hundreds "; break;
            case 3: echo "Three hundreds "; break;
            case 4: echo "Four hundreds "; break;
            case 5: echo "Five hundreds "; break;
            case 6: echo "Six hundreds "; break;
            case 7: echo "Seven hundreds "; break;
            case 8: echo "Eight hundreds "; break;
            case 9: echo "Nine hundreds "; break;
        }

        switch ($a) {
            case 0; echo "Ten"; break;
            case 1; echo "Eleven"; break;
            case 2; echo "Twelve"; break;
            case 3; echo "Thirteen"; break;
            case 4; echo "Fourteen"; break;
            case 5; echo "Fiveteen"; break;
            case 6; echo "Sixteen"; break;
            case 7; echo "Seventeen"; break;
            case 8; echo "Eighteen"; break;
            case 9; echo "Nineteen"; break;
        }

    }
}
?>
</body>
</html>
