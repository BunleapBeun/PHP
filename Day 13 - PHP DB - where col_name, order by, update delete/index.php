<?php

$con = new mysqli("localhost", "root", 'Bl123456789', 'test_db');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 13 - PHP DB - where col_name, order by, update delete</title>
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
    <h1>Update Data</h1>
    <?php
    
        $sql = "UPDATE tbl_test SET name = 'Facebook'";
        $sql = "UPDATE tbl_test SET name = 'Google', price = 20000 WHERE id = 2";
        $con->query($sql);

    ?>

    <h1>Delete Data</h1>
    <?php
    
        $sql = "DELETE FROM tbl_test WHERE id = 3";
        $con->query($sql);

    ?>
    <table style="width: 50%;" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
        </thead>
        <tbody>
            <?php
            // WHERE id = '1', name = 'Apple', price = '30' (text in sql var) | formulation: col_name = 'value'
            // ORDER BY id DESC : make desen like from large num to small num
            // $sql = "SELECT * FROM tbl_test WHERE name = 'Apple' ORDER BY id DESC";
            $sql = "SELECT * FROM tbl_test";
            $res = $con->query($sql);
            while ($row = $res->fetch_array()) {
            ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>