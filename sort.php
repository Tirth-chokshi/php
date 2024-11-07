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
