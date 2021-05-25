<?php

    require __DIR__ . '/vendor/autoload.php';
    
    //include 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" >
    <title>Eduardo Ribeiro</title>
</head>
<body>

<form action="/calc.php" method="post">

    <p>PHP OOP Calculator</p>

    <input type= "text" name="num1" placeholder="First number">
    <select name="op" >
      <option value="sum">Addition</option>
      <option value="sub">Subtraction</option>
      <option value="multiply">Multiplication</option>
      <option value="division">Division</option>
    </select>
    <input type="text" name="num2" placeholder="Second number">
    <button type="submit" name="submit">  Calculate</button>

</form>

</body>
</html>