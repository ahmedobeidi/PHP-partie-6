<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercic 4</title>
</head>
<body>
    <?php 
        if (isset($_GET['language'], $_GET['server'])) {
            var_dump($_GET['language'], $_GET['server']);
        }
    ?>
</body>
</html>