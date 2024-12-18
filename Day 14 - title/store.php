<?php
// echo 'Hello';
$cn = new mysqli("localhost", "root", "Bl123456789", "test_db");

if (isset($_POST['post'])) {
    $name = $_POST['txt-name'];
    $price = $_POST['txt-price'];
    $sql = "INSERT INTO tbl_test VALUES(null, '$name', $price)";
    $cn->query($sql);
} else {
    echo 'Have no data here.';
}
