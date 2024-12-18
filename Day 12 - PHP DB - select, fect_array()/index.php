<?php

$con = new mysqli("localhost", "root", 'Bl123456789', 'test_db');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 12 - PHP DB - seclect, fect_array</title>
</head>

<body>
    <h1>Select Data</h1>
    <?php
    // $sql = "SELECT * FROM tbl_test";
    // $res = $con->query($sql);
    // $row = $res->fetch_array(); // fect array use for make data to array
    // echo $row[0];

    // first style
    // while($row = $res->fetch_array()) {
    //     echo $row[0] . " " . $row[1] . " " . $row[2] . "<br>";
    // }

    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbl_test";
            $res = $con->query($sql);
            while ($row = $res->fetch_array()) {
            ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    ?>
</body>

</html>