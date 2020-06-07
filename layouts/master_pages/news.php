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
            جدول الأخبار
        </div>
        <div class="divs_tables_search_options"><!--
        --><input type="text" id="date_news_search" placeholder="01-01-2018"/><!--
        --><input type="text" id="txt_news_search" placeholder="عنوان الخبر" /><!--
                --><input type="button" value="بحث" id="btn_news_search" />
            </div>
        <table id="table_news">
            <tr id="tr_last_report_titles">
                <td class="tds_clicable" title="إضافة" url="<?php echo $root_link.$arr_main_pages[4] ?>"><span class="fa fa-plus spans_add spans_header_icons" id="add_news_icon"></span></td>
                <td ></td>
                <td>
                   عنوان الخبر
                </td>
                <td>
                    تاريخ الخبر
                </td>
                <td>
                    شعار الخبر
                </td>
            </tr>
            <?php
                foreach ($arr_page_data['news'] as $key => $value) {
                    echo'
                    <tr class="tr_last_report_content" id="tr_'.$key.'">
                        <td title="حذف" class="tds_delete_news tds_clicable" id="'.$key.'" url=""> 
                            <span class="spans_delete fa fa-times"></span>
                        </td>
                        <td title="تفاصيل" class="tds_edit_reports tds_clicable" 
                            url="'.$root_link.$arr_main_pages[4].'/'.$key.'"> 
                            <span class="spans_edite fa fa-eye"></span>
                        </td>
                        <td>
                            '.$value['title'].'
                        </td>
                        <td>
                            '.$value['date'].'
                        </td>
                        <td>
                            <img class="img_news" src="'.$dir_uploads.$value['icon'].'"/>
                        </td>
                    </tr>';
                }
            ?>
            
        </table>
        <div id="div_pages">
            <?php
                if($_SESSION['url_num']>0)
                    echo'<a href="'.$root_link.$arr_main_pages[3].'/'.($_SESSION['url_num']-1).'"><div id="div_prev">السابق</div></a>';
                for($i=0;$i<$arr_page_data['news_header_count'];$i+=10)
                {
                    echo '<a class="as_pages" href="'.$root_link.$arr_main_pages[3].'/'
                            .($i/10).'">'.(($i/10)+1).'</a>';

                }
                if(($_SESSION['url_num']+1)<($arr_page_data['news_header_count']/10))
                    echo'<a href="'.$root_link.$arr_main_pages[3].'/'.($_SESSION['url_num']+1).'"><div id="div_next">التالي</div></a>';
            
            ?>
        </div>
    </div>
    
</div>
