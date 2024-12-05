<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php 
        if (isset($_GET['age'])) {
            echo "age is {$_GET['age']}";
        }
        else {
            echo "Enter an age";
        }
    ?>
</body>
</html>