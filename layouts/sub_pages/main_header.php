<div id="div_main_header">
    <div id="div_slogen" class="">
        <img id="img_slogen" src="<?php echo $dir_files_images ?>tawasol_logo.png">
        <div id="div_slogen_text">
            
             نظام معكم
             - 
             نظام للتواصل بين البلديات والمواطنين
        </div>
        
    </div>
    <?php
    if ($_SESSION['user_type'] != '0') {
            ?>
    <a id="a_notify" href="<?php echo $root_link.$arr_main_pages[1] ?>"><div id="div_notification">
        <span class="fa fa-bell">
            
        </span>
        <span class="span_not_count">
            <?php echo $arr_page_data['notify_count'] ?>
        </span>
        <span></span>
    </div></a><?php }?><div id="div_admin">
        <span class="fa fa-user">
            
        </span>
    <span id="span_header_user_name"><?php echo $_SESSION['user_name'] ?></span>
        <div id="div_admin_list" class="hide_list">
        <ul>
            <a href="<?php echo $root_link.$arr_main_pages[11] ?>"><li>
                <span class="fa fa-cog" aria-hidden="true"></span>
                الإعدادات
                </li></a>
            <a><li id="li_logout">
                <span  class="fa fa-sign-out" aria-hidden="true"></span>
                تسجيل خروج
            </li></a>
        </ul>
    </div>
    </div>
    
</div>