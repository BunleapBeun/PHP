<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 06 - Practice foreach array as menu</title>
    <link rel="stylesheet" href="./../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
    <?php

    $leftMenu = array(
        array(
            'icon' => 'fa-solid fa-user-gear',
            'title' => 'System'
        ),
        array(
            'icon' => 'fa-solid fa-plus',
            'title' => 'Setup'
        ),
        array(
            'icon' => 'fa-solid fa-cubes',
            'title' => 'Products'
        )
    );

    ?>
    <div class="left-menu">
        <ul>
            <!-- <li>
                <a href="">
                    <i class="fa-solid fa-user-gear"></i>
                    <p>System</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-plus"></i>
                    <p>Setup</p>
                </a>
            </li> -->
            <?php foreach ($leftMenu as $item ) : ?>
                <li>
                    <a href="">
                        <i class="<?php echo $item['icon'];?>"></i>
                        <p><?php echo $item['title'];?></p>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</body>

</html>