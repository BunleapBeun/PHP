<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 05 - associative arr, multi arr, foreach, break, continue </title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>

    <h1 class="head-sub">Associative Array</h1>

    <?php

    // this array we call associative array
    $year = array(
        'PHP' => '1995',
        'ASP.Net' => '2002',
        'JSP' => '1999',
    );

    foreach ($year as $key => $val) {
    ?>
        <div class="box1">
            <h3><?php echo $key; ?></h3>
            <p><?php echo $val; ?></p>
        </div>
    <?php
    }

    ?>

    <h1 class="head-sub">Break</h1>
    <h2>
        <?php
            for ($i = 0; $i <= 5; $i++) {
                if ($i == 3) {
                    break;
                }
                echo $i. '<br>';
            }
        ?>
    </h2>

    <h1 class="head-sub">Continue</h1>
    <h2>
        <?php
            for ($i = 0; $i <= 5; $i++) {
                if ($i == 3) {
                    continue;
                }
                echo $i. '<br>';
            }
        ?>
    </h2>

    <h1 class="head-sub">Multidimensional Array</h1>
    


</body>

</html>