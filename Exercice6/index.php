<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <?php
        if (isset($_GET['building'], $_GET['room'])) {
            var_dump($_GET['building'], $_GET['room']);
        }
        else {
            echo "Not found";
        }
    ?>
</body>
</html>