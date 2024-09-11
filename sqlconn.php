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
