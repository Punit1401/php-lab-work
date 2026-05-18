<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

     $max = max($num1,$num2);
    $min = min($num1,$num2);

    echo "Number 1 =".$num1."<br>";
    echo "Number 2 =".$num2."<br>";
    echo "Maximum number is: ".$max."<br>";
    echo "Minimum number is: ".$min;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Enter number 1</h1>
        <input type="text" name="num1">
        <h1>Enter number 2</h1>
        <input type="text" name="num2">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>