
<!DOCTYPE html>
<html>
<head>
    <title>Convert Celsius to Fahrenheit</title>
</head>
<body>

<form method="POST">
    Enter temperature in Celsius: <input type="number" name="celsius" required>
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST["celsius"];
    
    $fahrenheit = ($celsius * 9/5) + 32;

    echo "Temperature in Fahrenheit: ${fahrenheit} °F";
}
?>

</body>
</html>
