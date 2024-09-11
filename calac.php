<?php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Cannot divide by zero";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Invalid operator";
    }
}
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$operator = readline("Enter the operator (+, -, *, /): ");

$result = calculate($num1, $num2, $operator);
echo "Result: $result\n";
?>
