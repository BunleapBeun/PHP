<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 11 - PHP DB - insert</title>
</head>

<body>
    <h1>Insert Data</h1>
    <!-- php connect to database with mysql workbench -->
    <?php
    $servername = "localhost"; // or the IP address of the server
    $username = "root";      // MySQL username
    $password = "Bl123456789";  // MySQL password
    $dbname = "test_db";    // Database name

    // connect with first method
    $con = new mysqli("localhost", "root", 'Bl123456789', 'test_db');

    // connect use mysqli, the second method
    // $con = new mysqli($servername, $username, $password, $dbname);

    // need fill all column for make it work to put data in the table
    // $sql = "INSERT INTO tbl_test VALUES(null, 'Apple', 20)";
    
    // no need to fill all column but u need to call name of the row correct
    $sql = "INSERT INTO tbl_test(name, price) VALUES('Mango', 30)";
    
    $con->query($sql);
    // echo $sql;

    // connect to DB use PDO
    // try {
    //     // Create connection
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //     // Set PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully";
    // } catch (PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }
    ?>

</body>

</html>