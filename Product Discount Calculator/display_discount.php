<?php
$price = $_POST["price"];
$percent = $_POST["percent"];
$discountAmount = $price * $percent * 0.1;
$discountPrice = $price - $discountAmount;
echo "Discount Amount ".$discountAmount."<br>"."Discount Price: ".$discountPrice;
