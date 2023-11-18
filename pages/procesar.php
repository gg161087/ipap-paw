<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

if (isset($num1, $num2, $operacion)) {
    echo "Número 1: $num1 <br>";
    echo "Número 2: $num2 <br>";
    echo "Operación: $operacion <br>";

    switch ($operacion) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                echo "No se puede dividir por cero";
                exit();
            }
            break;
        default:
            echo "Operación no válida";
            exit();
    }

    echo "Resultado: $resultado";
} else {
    echo "Por favor, proporcione los números y la operación.";
}
?>