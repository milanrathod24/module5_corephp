<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent XSS attacks
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Submitted Information:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
?>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
<?php
}
?>
