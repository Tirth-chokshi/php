<?php

function calculateAge($birthdate) {
    $birthDate = new DateTime($birthdate);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;

    return $age;
}
$birthdate = readline("Enter your birthdate (YYYY-MM-DD): ");
$age = calculateAge($birthdate);
echo "Your age is: $age years old";
?>
