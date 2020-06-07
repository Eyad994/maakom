<?php
include __DIR__ . '/../sub_pages/main_header.php';
?>
<div class="center">
    <?php
    include __DIR__ . '/../sub_pages/main_menu.php';
    ?>
    <div id="div_main_info">
        <?php
        include __DIR__ . '/../sub_pages/main_notify_header.php';

        if ($_SESSION['user_type'] != '0') {
            include __DIR__ . '/../sub_pages/user_main_page.php';
        }
        else {
            include __DIR__ . '/../sub_pages/admin_main_page.php';
        }
        ?>
    </div>
</div>

