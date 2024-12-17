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
        <?php foreach ($leftMenu as $item) : ?>
            <li>
                <a href="">
                    <i class="<?php echo $item['icon']; ?>"></i>
                    <p><?php echo $item['title']; ?></p>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>