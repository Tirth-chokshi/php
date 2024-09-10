HTML FILENAME: Greet.html
<!DOCTYPE html>
<html>
<head>
    <title>Greeting Form</title>
</head>
<body>
    <h2>Enter your name</h2>
    <form action="gre.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

PHP FILENAME: Gre.php
<?php
if($_POST){
$name=$_POST['name'];
echo "Hello".$name ;
}
?>

STRING/Number PALINDROME
AIM:
To write a program for find the given string is palindrome or not.
PROGRAM:
<?php
if(isset($_POST['str'])){
	$n=$_POST['str'];
	$rev=strrev($n);
	
	if($n==$rev){
		echo "$n Palindrome";
	}
	else{
		echo "$n not a palindrome";
	}
}
?>
<form method="POST" action="">
<input type="textbox" name="str" required>
<input type="submit" value="submit">
</form>




For armstrong

// takes value from user
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


NESTING OF MEMBER FUNCTION
AIM:
To write a program for find the large value using nesting of member function.

<?php

function findLargest($a, $b) {
    return max($a, $b);
}


$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");


$largest = findLargest($a, $b);
echo "The largest number is: $largest\n";






MATHEMATICAL CALCULATOR

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

AGE CALCULATOR
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

To create a php page for login without using SQL connection.
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "your_username" && $password === "your_password") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <?php
}
?>


To write a php program to manipulate arrays.


To write a program for display our personal information using various tags.
// filename index.html
<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>
    <h1>Personal Information</h1>
    <?php include 'personal_info.php'; ?>
</body>
</html>

// filename personal_info.php
<?php
$name = "John Doe";
$age = 30;
$occupation = "Software Engineer";
$hobbies = "Reading, Hiking, Playing Guitar";
$email = "johndoe@example.com";
$phone = "123-456-7890";
$address = "123 Main Street, City, State, ZIP";

echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Age:</strong> $age</p>";
echo "<p><strong>Occupation:</strong> $occupation</p>";
echo "<p><strong>Hobbies:</strong> $hobbies</p>";
echo "<p><strong>Contact Information:</strong></p>";
echo "<ul>";
echo "<li><strong>Email:</strong> $email</li>";
echo "<li><strong>Phone:</strong> $phone</li>";
echo "<li><strong>Address:</strong> $address</li>";
echo "</ul>";
?>



To create a php program for login page with SQL connection.
<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password match a user in the database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
}

// Close the database connection
$conn->close();
?>

To write a program for display the date and time.
<?php
$currentTime = date("Y-m-d H:i:s");
echo "Current date and time: " . $currentTime;
?>

To write a program for displaying our curriculum vitae.

<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae</title>
</head>
<body>
    <h1>Curriculum Vitae</h1>

    <?php
    $name = "Your Name";
    $email = "your_email@example.com";
    $phone = "123-456-7890";
    $linkedin = "https://www.linkedin.com/in/your-linkedin-profile";

    $education = [
        "degree" => "Bachelor of Science in Computer Science",
        "university" => "University Name",
        "graduationYear" => "2024"
    ];

    $skills = [
        "programmingLanguages" => "Python, Java, C++",
        "frameworks" => "Django, Flask, React",
        "databases" => "MySQL, PostgreSQL",
        "tools" => "Git, GitHub, Visual Studio Code"
    ];

    $experience = [
        "position" => "Software Developer",
        "company" => "Company Name",
        "dates" => "2023 - Present",
        "responsibilities" => [
            "Developed web applications using Python and Django",
            "Worked with MySQL databases",
            "Collaborated with a team of developers"
        ]
    ];

    $projects = [
        "projectName" => "Project Name",
        "technologies" => "Python, Django, MySQL",
        "link" => "https://github.com/your-username/project-repo"
    ];
    ?>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>LinkedIn:</strong> <?php echo $linkedin; ?></p>

    <h3>Education</h3>
    <p><?php echo $education["degree"] . " from " . $education["university"] . " in " . $education["graduationYear"]; ?></p>

    <h3>Skills</h3>
    <p><?php echo implode(", ", $skills["programmingLanguages"]); ?></p>
    <p><?php echo implode(", ", $skills["frameworks"]); ?></p>
    <p><?php echo implode(", ", $skills["databases"]); ?></p>
    <p><?php echo implode(", ", $skills["tools"]); ?></p>

    <h3>Experience</h3>
    <p><strong>Position:</strong> <?php echo $experience["position"]; ?></p>
    <p><strong>Company:</strong> <?php echo $experience["company"]; ?></p>
    <p><strong>Dates:</strong> <?php echo $experience["dates"]; ?></p>
    <p><strong>Responsibilities:</strong></p>
    <ul>
        <?php foreach ($experience["responsibilities"] as $responsibility) { ?>
            <li><?php echo $responsibility; ?></li>
        <?php } ?>
    </ul>

    <h3>Projects</h3>
    <p><strong>Project Name:</strong> <?php echo $projects["projectName"]; ?></p>
    <p><strong>Technologies:</strong> <?php echo $projects["technologies"]; ?></p>
    <p><strong>Link:</strong> <?php echo $projects["link"]; ?></p>
</body>
</html>








