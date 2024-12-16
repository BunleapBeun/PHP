<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 04 - while, for, array foreach</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>

    <h1 class="head-sub">While loop</h1><br>

    <?php

    $x = 10;

    while ($x <= 100) {
    ?>
        <h1>
            <?php echo "Number: $x"; ?>
        </h1>
    <?php
        $x += 10;
    }

    ?>

    <h1 class="head-sub">For loop</h1><br>
    <?php
    for ($i = 1; $i <= 10; $i++) {
    ?>
        <div class="box1">
            <?php
            echo $i;
            ?>
        </div>
        <br>
    <?php
    }
    ?>

    <h1 class="head-sub">Array and foreach</h1>

    <?php
    // this array we call index array
    $color = array('red', 'green', 'blue', 'yellow');

    // echo $color;// can not use with echo

    // print_r($color); // user for print value of array

    foreach ($color as $value) {
    ?>
        <div class="box" style="background-color: <?php echo $value; ?>;"></div><br>
    <?php
    }

    ?>
</body>

</html>