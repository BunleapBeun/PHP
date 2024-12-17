<?php
include "layout/header.php";
?>

<?php
include "layout/left-menu.php";
?>

<?php

$imageList = "1.jpg 2.jpg 3.jpg";

$imageArray = explode(" ", $imageList);

// echo $imageArray[0];
// print_r($imageArray);

foreach ($imageArray as $image) {
    ?>
    <img src="<?php echo $image ?>" class="image-array">
    <?php
}

?>

<?php
include "layout/footer.php";
?>