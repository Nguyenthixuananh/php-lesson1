<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="get">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính"];
//Ký hiệu => được sử dụng để xác định key ứng với từng value.
// Mỗi một cặp key, value được phân cách nhau bởi dấu phẩy.

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $searchWord = $_GET["search"];
    $flag = 0; //Tạo biến $flag gán mặc định bằng 0, tức là không tìm thấy từ.
//    foreach, as là các từ khóa tạo thành cú pháp duyệt mảng
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1; //Gán biến $flag = 1 (từ đã tìm thấy).
        }
    }

    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
}
?>
</body>
</html>