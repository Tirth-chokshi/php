Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.
For example :
 $mycalc = new MyCalculator( 12, 6);
 echo $mycalc- > add(); // Displays 18
 echo $mycalc- > multiply(); // Displays 72
<?php
// Define a class named MyCalculator
class MyCalculator {
    // Private properties to hold the first and second values
    private $_fval, $_sval;
    
    // Constructor to initialize the object with two values
    public function __construct($fval, $sval) {
        $this->_fval = $fval; // Assign the first value to the property _fval
        $this->_sval = $sval; // Assign the second value to the property _sval
    }
    
    // Method to add the two values
    public function add() {
        return $this->_fval + $this->_sval; // Return the sum of _fval and _sval
    }
    
    // Method to subtract the second value from the first value
    public function subtract() {
        return $this->_fval - $this->_sval; // Return the difference of _fval and _sval
    }
    
    // Method to multiply the two values
    public function multiply() {
        return $this->_fval * $this->_sval; // Return the product of _fval and _sval
    }
    
    // Method to divide the first value by the second value
    public function divide() {
        return $this->_fval / $this->_sval; // Return the quotient of _fval and _sval
    }
}

// Create an instance of the MyCalculator class with initial values 12 and 6
$mycalc = new MyCalculator(12, 6); 

// Output the result of addition
echo $mycalc->add() . "\n"; // Displays 18 

// Output the result of multiplication
echo $mycalc->multiply() . "\n"; // Displays 72

// Output the result of subtraction
echo $mycalc->subtract() . "\n"; // Displays 6

// Output the result of division
echo $mycalc->divide() . "\n"; // Displays 2
?>
