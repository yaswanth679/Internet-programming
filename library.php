<!-- registration.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $phoneNumber = $_POST["phoneNumber"];

    // Validate and process the registration data (e.g., store it in a database)
    // Add your validation and database handling code here

    // After processing, you can redirect the user to another page
    header("Location: registration_success.php");
    exit();
}
?>

<!-- login.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    // Validate and process the login data (e.g., check against a database)
    // Add your validation and authentication code here

    // After processing, you can redirect the user to another page
    header("Location: login_success.php");
    exit();
}
?>

<!-- Use the modified HTML with PHP included -->

<!-- Replace the form action with the PHP file for registration -->
<section id="register">
    <div class="container">
        <h1>Register Me</h1>
        <form action="registration.php" method="post">
            <!-- Your form fields here -->
            <center><button type="submit">Submit</button></center>
        </form>
    </div>
</section>

<!-- Replace the form action with the PHP file for login -->
<section id="login">
    <div class="container">
        <h1>Login Me</h1>
        <form action="login.php" method="post">
            <!-- Your form fields here -->
            <center><button type="submit">Submit</button></center>
        </form>
    </div>
</section>
