<?php
$customerList = array(
    array("name"=> "Mai Văn Hoàn","birthday"=>"1983-08-20","address"=>"Hà Nội"),
    array("name"=> "Nguyễn Văn Nam","birthday"=>"1983-08-21","address"=>"Bắc Giang"),
    array("name"=> "Nguyễn Thái Hòa","birthday"=>"1983-08-22","address"=>"Nam Định"),
    array("name"=> "Trần Đăng Khoa","birthday"=>"1983-08-17","address"=>"Hà Tây"),
    array("name"=> "Nguyễn Đình Thi","birthday"=>"1983-08-19","address"=>"Hà Nội"),
)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach khach hang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($customerList as $key=>$customer):?>
    <tr>
        <td><?php echo $key?></td>
        <td><?php echo $customer["name"]?></td>
        <td><?php echo $customer["birthday"]?></td>
        <td><?php echo $customer["address"]?></td>
    </tr>

    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
