<?php
    include('./data/Movie.php');

    $lifeOfPi = new Movie('Life of pi', '2h 7m', 'Adventure / Drama',  2012,  'United States of America');

    $vacation = new Movie('Vacation', '1h 39m', 'Comedy / Adventure',  2015,  'United States of America');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie-OOP</title>
</head>
<body>
    <h1>MOVIE OOP</h1>
    <div>
        <?php 
            var_dump($lifeOfPi, $vacation);
        ?>
    </div>
</body>
</html>