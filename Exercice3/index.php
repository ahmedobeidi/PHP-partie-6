<?php 
    if (isset($_GET['startDate'], $_GET['endDate'])) {
        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <p>
        <?php
            if(isset($_GET['startDate'], $_GET['endDate'])) {
                echo "startDate = {$_GET['startDate']},  startDate = {$_GET['startDate']}";
            }
            else {
                echo "StartDate and endDate are not exists";
            }
        ?>
    </p>
</body>
</html>