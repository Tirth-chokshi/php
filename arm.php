<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Check Armstrong Number">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    
    function isArmstrong($number) {
        
        $digits = str_split($number);
        $sum = 0;
        $length = strlen($number);
       
        foreach ($digits as $digit) {
            $sum += pow($digit, $length);
        }
        
        if ($sum == $number) {
            return "$number is an Armstrong number.";
        } else {
            return "$number is not an Armstrong number.";
        }
    }

    echo isArmstrong($number);
}
?>

</body>
</html>
