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
