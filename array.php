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
