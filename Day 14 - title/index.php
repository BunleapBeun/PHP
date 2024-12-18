<?php

$cn = new mysqli("localhost", "root", "Bl123456789", "test_db");

if (isset($_POST['post'])) {
    $name = $_POST['txt-name'];
    $price = $_POST['txt-price'];
    $sql = "INSERT INTO tbl_test VALUES(null, '$name', $price)";
    $cn->query($sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 14 - PHP Database - </title>
    <link rel="stylesheet" href="./../plugin/bootstrap.min.css">
</head>

<body>

    <!-- ! Video 15 16 -->

    <div class="container p-5">
        <div class="row">
            <div class="col-4 m-auto">
                <div class="card p-4">
                    <h1 class="text-center pb-1 fw-medium">Form Post</h1>
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="txt-id" class="pb-1 fw-medium fs-5">ID</label>
                            <input type="text" name="txt-id" id="txt-id" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txt-name" class="pb-1 fw-medium fs-5">Name</label>
                            <input type="text" name="txt-name" id="txt-name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txt-price" class="pb-1 fw-medium fs-5">Price</label>
                            <input type="text" name="txt-price" id="txt-price" class="form-control">
                        </div>
                        <button class="btn btn-primary fw-medium fs-5 w-100" type="submit" name="post">Post</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <div class="card p-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbl_test ORDER BY id ASC";
                            $res = $cn->query($sql);
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
                </div>
            </div>
        </div>
    </div>

    <script src="./../plugin/bootstrap.bundle.min.js"></script>
</body>

</html>