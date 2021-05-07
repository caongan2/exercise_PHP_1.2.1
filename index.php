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
    <input type="number" name="firtmoney" placeholder="firtmoney">
    <input type="number" name="yearlyrate" placeholder="yearlyrate">
    <input type="number" name="year" placeholder="year">
    <input type="submit" value="Caculator">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firtmoney = $_POST["firtmoney"];
    $yearlyrate = $_POST["yearlyrate"];
    $year = $_POST["year"];

    $value = $firtmoney;
    for ($i = 1; $i < $year; $i++) {
        $firtmoney = $firtmoney + $firtmoney * ($yearlyrate/100);
    }        echo $firtmoney;

}