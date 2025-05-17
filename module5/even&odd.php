<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Check if a Number is Even or Odd</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        // Validate that the input is numeric
        if (!is_numeric($number)) {
            echo "<p style='color:red;'>Please enter a valid number.</p>";
        } else {
            // Check if the number is even or odd
            if ($number % 2 == 0) {
                echo "<p>$number is an even number.</p>";
            } else {
                echo "<p>$number is an odd number.</p>";
            }
        }
    }
    ?>
</body>
</html>
