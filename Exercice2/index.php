<?php 
    
   if (isset($_GET['age'])) {
        $age = $_GET['age'];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <p>
        <?php 
            if (isset($_GET['age'])) {
                echo "age is {$_GET['age']}";
            }
            else {
                echo "age is not exist";
            }
        ?>
    </p>
</body>
</html>