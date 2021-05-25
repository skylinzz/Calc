<?php


include 'vendor/autoload.php';

$op = $_POST["op"];
$num1 = floatval($_POST["num1"]);
$num2 = floatval($_POST["num2"]);

try {
    $calc = new MyApp\OperationFactory($op);
    echo $calc->instantiate($num1,$num2)->calculate();
} catch (TypeError $e) {
    echo "Error!: " .$e->getMessage();
} catch (\InvalidArgumentException $e){
    echo "Wrong type given!" .$e->getMessage();
}

?>