<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php 
       if (!isset($_GET['lastname'], $_GET['firstname'])) {
            echo "Are not exist";
       }
       else {
            echo $_GET['lastname'], $_GET['firstname'];
       }
    ?>
</body>
</html>