Write a PHP script to limit the maximum number of concurrent sessions for a user to 3.
<?php
// Set the session save path
session_save_path('i:/custom/');
session_start();

$maxSessions = 3; // Maximum number of concurrent sessions allowed for a user

if (!isset($_SESSION['session_count'])) {
    $_SESSION['session_count'] = 1;
} else {
    $_SESSION['session_count']++;

    if ($_SESSION['session_count'] > $maxSessions) {
        session_unset();
        session_destroy();
        echo "Maximum session limit exceeded. Please log in again.";
        exit;
    }
}
echo "Session active. Session count: " . $_SESSION['session_count'];

?>


Write a PHP script to display the last time the session was accessed by the user.
<?php
// Set the session save path
session_save_path('i:/custom/');
session_start();

if (isset($_SESSION['last_access_time'])) {
    $lastAccessTime = $_SESSION['last_access_time'];
    echo "Last access time: " . date('Y-m-d H:i:s', $lastAccessTime);
    $_SESSION['last_access_time'] = time(); // Update the last access time
} else {
    $_SESSION['last_access_time'] = time();
    echo "Session started. First access.";
}

?>





Write a PHP script to set a cookie and a session variable with the same name. Display their values to compare.
<?php
// Set the session save path
session_save_path('i:/custom/');
$cookieName = "myCookie";
$value = "Cookie Value";

// Set the cookie
setcookie($cookieName, $value, time() + 3600, "/");

// Start the session
session_start();

// Set the session variable
$_SESSION[$cookieName] = $value;

// Display the cookie value
echo "Cookie value: " . $_COOKIE[$cookieName] . "";

// Display the session variable value
echo "Session variable value: " . $_SESSION[$cookieName];

?>

Write a PHP script to retrieve and display user preferences stored in the session variable.
<?php
session_save_path('i:/custom/');
session_start();

if (isset($_SESSION["preferences"]))
{
    $userPreferences = $_SESSION["preferences"];

    echo "User Preferences:</br>";
    foreach ($userPreferences as $key => $value) {
        echo $key . ": " . $value . "</br>";
    }
 }
else
{
    echo "No user preferences found.";
}

?>

Write a PHP script to set a session timeout after 30 minutes of inactivity.
<?php
session_save_path('i:/custom/');
session_start();

// Set the session timeout duration in seconds
$sessionTimeout = 1800; // 30 minutes

// Check if the session has already been started and calculate the time since the last activity
if (isset($_SESSION['LAST_ACTIVITY'])) {
    $lastActivity = $_SESSION['LAST_ACTIVITY'];
    $currentTime = time();
    $timeSinceLastActivity = $currentTime - $lastActivity;

    // Check if the session has exceeded the timeout duration
    if ($timeSinceLastActivity > $sessionTimeout) {
        // Session expired, destroy the session
        session_unset();
        session_destroy();
        echo "Session expired. Please log in again.";
    } else {
        // Update the last activity time
        $_SESSION['LAST_ACTIVITY'] = $currentTime;
        echo "Session active.";
    }
} else {
    // Set the last activity time for the session
    $_SESSION['LAST_ACTIVITY'] = time();
    echo "Session started.";
}
?>

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


Write a PHP class that sorts an ordered integer array with the help of sort() function.
Sample array : array(11, -2, 4, 35, 0, 8, -9)

<?php
// Define a class named array_sort
class array_sort
{
    // Declare a protected property named $_asort to store the array
    protected $_asort;
    
    // Define the constructor method which accepts an array $asort
    public function __construct(array $asort)
    {
        // Assign the provided array to the protected property $_asort
        $this->_asort = $asort;
    }
    
    // Define a method named alhsort to sort the array in ascending order
    public function alhsort()
    {
        // Create a copy of the original array
        $sorted = $this->_asort;
        // Sort the copied array in ascending order
        sort($sorted);
        // Return the sorted array
        return $sorted;
    }
}

// Create an instance of the array_sort class with an array argument
$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));

// Call the alhsort method of the $sortarray object and print the sorted array
print_r($sortarray->alhsort())."\n";
?>

Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter.
<?php
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(12, 9);
echo "Area: " . $rectangle->getArea() . "</br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "</br>";
?>

Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$triangle = new Triangle(5, 7);
echo "Triangle Area: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";

?>

Write a PHP interface called 'Resizable' with a method 'resize()'. Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.
<?php
interface Resizable {
    public function resize($percentage);
}

class Square implements Resizable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function resize($percentage) {
        $this->side = $this->side * ($percentage / 100);
    }

    public function getArea() {
        return pow($this->side, 2);
    }

    public function getSide() {
        return $this->side;
    }
}

$square = new Square(10);
echo "Initial Side Length: " . $square->getSide() . "</br>";

$square->resize(60); // Resize the square to 60% of its original size
echo "Resized Side Length: " . $square->getSide() . "</br>";

echo "Area: " . $square->getArea() . "</br>";
?>

