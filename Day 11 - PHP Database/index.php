<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 11 - PHP Database</title>
</head>

<body>
    <h1>Insert Data</h1>
    <!-- php connect to database with mysql workbench -->
    <?php
    $servername = "localhost"; // or the IP address of the server
    $username = "root";      // MySQL username
    $password = "Bl123456789";  // MySQL password
    $dbname = "test_db";    // Database name

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>

</body>

</html>