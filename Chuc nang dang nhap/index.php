<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style></style>
    <style type="text/css">
        .login {
            width:300px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px; margin:5px
        }
    </style>

</head>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="30"  placeholder="username" />
        </label>
        <label>
            Password:
            <input type="password" name="password" size="30" placeholder="password" />
        </label>
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}?>
</body>
</html>