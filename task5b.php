<!DOCTYPE html>
<html>
<head>
    <title>Task 5b</title>
</head>
<body>

<form method="POST">
    Enter marks for Math: <input type="number" name="math" max="100" required><br>
    Enter marks for English: <input type="number" name="english" max="100" required><br>
    Enter marks for Kiswahili: <input type="number" name="kiswahili" max="100" required><br>
    Enter marks for Chemistry: <input type="number" name="chemistry" max="100" required><br>
    <input type="submit" value="Calculate Percentage">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $math = $_POST["math"];
    $english = $_POST["english"];
    $kiswahili = $_POST["kiswahili"];
    $chemistry = $_POST["chemistry"];

    $total_marks = 400;

    $obtained_marks = $math + $english  + $kiswahili + $chemistry;
    $percentage = ($obtained_marks * 100) / $total_marks;

    // Output the result
    echo "Your percentage is: " . $percentage . "%";
}
?>

</body>
</html>