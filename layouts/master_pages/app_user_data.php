<?php
    include __DIR__.'/../sub_pages/main_header.php';
    ?>
<div class="center">
<?php
    include __DIR__.'/../sub_pages/main_menu.php';
?>
<div id="div_main_info">
    <?php
        include __DIR__.'/../sub_pages/main_notify_header.php';
    ?>
    
    <div id="div_new_reports">
        <div id="div_new_report_tilte">
            جدول المستخدمين
        </div>
        <table>
            <tr id="tr_last_report_titles">
                <td>
                   اسم المستخدم
                </td>
                <td>
                   رقم الهاتف
                </td>
                <td>
                   رقم الهوية
                </td>
            </tr>
            <?php
                foreach ($arr_page_data['app_users'] as $key => $value) {
                    echo '<tr class="tr_last_report_content" id="tr_'.$key.'">
                            <td>
                                '.$value['name'].'
                            </td>
                            <td>
                                '.$value['number'].'
                            </td>
                            <td>
                                '.$value['user_id_number'].'
                            </td>
                        </tr>
                    ';
                }
            ?>
        </table>
        <div id="div_pages">
            <?php
                if($_SESSION['url_num']>0)
                    echo'<a href="'.$root_link.$arr_main_pages[13].'/'.($_SESSION['url_num']-1).'"><div id="div_prev">السابق</div></a>';
            
                for($i=0;$i<$arr_page_data['all_users_count'];$i+=10)
                {
                    echo '<a class="as_pages" href="'.$root_link.$arr_main_pages[13].'/'
                            .($i/10).'">'.(($i/10)+1).'</a>';

                }
                if(($_SESSION['url_num']+1)<($arr_page_data['all_users_count']/10))
                    echo'<a href="'.$root_link.$arr_main_pages[13].'/'.($_SESSION['url_num']+1).'"><div id="div_next">التالي</div></a>';
            
            ?>
        </div>
    </div>
    
</div>
