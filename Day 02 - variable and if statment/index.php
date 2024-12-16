<?php

$txt = ' variable';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2 - <?php echo $txt; ?></title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $txt = 'PHP';
    // $x = 10;
    // echo $txt;
    // echo "<br>";
    // echo $x;
    // echo "<br>";
    // $_x = 100;
    // echo $_x;
    if ($txt == 'PHP') {
    ?>
        <div class="box1">
            <?php
            echo $txt;
            ?>
        </div>
    <?php
    } else {
    ?>
        <div class="box2">
            <?php
            echo 'No';
            ?>
        </div>
    <?php
    }
    ?>

    <?php
    $i = 100;
    if ($i == 0) {
        echo $i;
    } else if ($i == 20) {
        echo $i;
    } else if ($i == 40) {
        echo $i;
    } else if ($i == 60) {
        echo $i;
    } else if ($i == 80) {
        echo $i;
    } else if ($i == 100) {
        echo '<p>Your are correct: </p>' . $i;
    }
    ?>
</body>

</html>