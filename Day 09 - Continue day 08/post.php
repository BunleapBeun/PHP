<?php

// echo "<h1>Hello</h1>";
// echo "<br>";

// ! for form input name
// $name = $_POST["name"];

// echo '<h1>'.$name.'</h1>';

// if there is no input or value for get

// if (isset($_POST["name"])) {
//     $name = $_POST["name"];
//     echo "Your name is: $name";
// } else {
//     echo "Kom tver plov kat.";
// }

// ! for form input file

$fileImages = $_FILES['image'];

$tmp = $fileImages['tmp_name'];
// $img_name = $fileImages['name'];
$ext = pathinfo($fileImages['name'], PATHINFO_EXTENSION);
$t = time();
$newName = $t.mt_rand(100000, 999999);
// echo $ext;
// echo $img_name;

move_uploaded_file($tmp,'img/'. $newName .'.'. $ext);
echo 'Image Uploaded';
