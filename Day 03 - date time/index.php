<?php
date_default_timezone_set("Asia/Phnom_Penh");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3 - Date Time and While loop</title>
</head>

<body>
    <h1>
        <?php
        echo date("D, M, Y");
        echo '<br>';
        echo date('h:i:s A');
        ?>
    </h1>

    <?php
    $x = 1;
    while ($x < 5) {
    ?>
        <h1>
            <?php
            echo $x . '<br>';
            ?>
        </h1>
    <?php
        $x++;
    }
    ?>
</body>

</html>