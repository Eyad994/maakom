<div id="div_main_menu">
    <img id="img_main_menu_log" src="<?php echo $dir_files_images ?>tawasol_logo.png" />
    <ul id="ul_main_menu_list">
        <a href="<?php echo $root_link.$arr_main_pages[0] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['main'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_home.png"/>
            </span>
            <span class="spans_main_menu_text">
                الرئيسية
            </span>
            </li>
        </a>
        <?php
        if($_SESSION['user_type']!='0')
        {
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[1] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['reports'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_reports.png"/>
            </span>
            <span class="spans_main_menu_text">
                البلاغات
            </span>
        </li></a>
        <a href="<?php echo $root_link.$arr_main_pages[3] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['news'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_news.png"/>
            </span>
            <span class="spans_main_menu_text">
                الأخبار
            </span>
        </li></a>
        <a href="<?php echo $root_link.$arr_main_pages[5] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['tenders'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_tenders.png"/>
            </span>
            <span class="spans_main_menu_text">
                العطاءات
            </span>
        </li></a>
        <a href="<?php echo $root_link.$arr_main_pages[7] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['survey'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_survey.png"/>
            </span>
            <span class="spans_main_menu_text">
                استطلاع الرأي
            </span>
        </li></a>
        
        <?php
        }
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[10] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['rates'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gary_statistics.png"/>
            </span>
            <span class="spans_main_menu_text">
                التقييمات
            </span>
        </li></a> 
        <?php
         if($_SESSION['user_type']=='0')
        {
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[14] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['municipality'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_bulding.png"/>
            </span>
            <span class="spans_main_menu_text">
                البلديات
            </span>
            </li></a>
        <?php
        }
        if($_SESSION['user_type']=='0'||$_SESSION['privileges']=='1')
        {
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[9] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['users'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_users.png"/>
            </span>
            <span class="spans_main_menu_text">
                المستخدمون
            </span>
        </li></a>
         <?php
         }
         if($_SESSION['user_type']>'0'||$_SESSION['privileges']=='1')
        {
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[15] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['municipality_data'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_users.png"/>
            </span>
            <span class="spans_main_menu_text">
                البلدية
            </span>
        </li></a>
         <?php
         }
         if($_SESSION['user_type']=='0')
        {
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[13] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['app_users'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_app_users.png"/>
            </span>
            <span class="spans_main_menu_text">
                المواطنون
            </span>
            </li></a>
         <?php
        }
        ?>
        <a href="<?php echo $root_link.$arr_main_pages[11] ?>">
            <li class="lis_main_menu <?php echo $selected_menu['settings'] ?>">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_settings.png"/>
            </span>
            <span class="spans_main_menu_text">
                الاعدادات
            </span>
            </li></a>
       
        <li class="lis_main_menu">
            <span>
                <img src="<?php echo $dir_files_images ?>/ic_gray_logout.png"/>
            </span>
            <span id="span_logout" class="spans_main_menu_text">
                تسجيل خروج
            </span>
        </li>
        
    </div>