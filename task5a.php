<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5a</title>
</head>
<body>
    <form action="" method="post">
        Input your age: <input type="text">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = $_POST["age"];
            $days_lived = $age * 365;

            echo "You have lived for ${days_lived} days.";
        }
    ?>
</body>
</html>
