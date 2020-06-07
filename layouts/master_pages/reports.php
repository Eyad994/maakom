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
            جدول البلاغات
        </div>
        <div class="divs_tables_search_options"><!--
            --><input type="text" placeholder="01-01-2018" id="date_reports_search"><!--
                --><select id="select_report_type">
                    <option value="0">كل الأنواع</option>
                    <?php
                        foreach ($arr_report_types['reportTypes'] as $key => $value) {
                           echo'<option value="'.$key.'">'.$value['name'].'</option>';
                        }
                    ?>
                </select><!--
                --><select id="select_report_status">
                    <option value="-1">كل الحالات</option>
                    <?php 
                        foreach ($arr_report_status as $key => $value) {
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        }
                    ?>
                </select><!--
                --><input type="button" value="بحث" id="btn_report_search" />
            </div>
        <table id="table_reports" width="98%">
            
            <tr id="tr_last_report_titles">
                <td id="td_print_reports" class="tds_clicable" title="طباعة" url=""><span class="fa fa-print spans_print spans_header_icons" id="print_reports_icon"></span></td>
                <td>
                    رقم البلاغ
                </td>
                <td>
                    نوع البلاغ
                </td>
                <td>
                    تاريخ البلاغ
                </td>
                <td>
                    رقم المبلغ
                </td>
                <td>
                    حالة البلاغ
                </td>
            </tr>
            <?php
                foreach ($arr_page_data['reports'] as $key => $value) {
                    $tr_class='';
                    if($value['seen']=='0')
                    {
                        $tr_class='new_tr';
                    }
                    echo '<tr class="'.$tr_class.'">
                           
                            <td title="تفاصيل" class="tds_edit_reports tds_clicable" 
                                url="'.$root_link.$arr_main_pages[2].'/'.$key.'"> 
                                <span class="spans_edite fa fa-eye"></span>
                            </td>
                            <td>
                                '.$key.'
                            </td>
                            <td>
                                '.$value['type'].'
                            </td>
                            <td>
                                '.$value['date'].'
                            </td>
                            <td>
                                '.$value['phone'].'
                            </td>
                            <td>
                            '.$arr_report_status[$value['status']].'
                                
                            </td>
                        </tr>';
                }
            ?>
            
        </table>
        <div id="div_pages">
            
            <?php
            
            if($_SESSION['url_num']>0)
                echo'<a href="'.$root_link.$arr_main_pages[1].'/'.($_SESSION['url_num']-1).'"><div id="div_prev">السابق</div></a>';
                for($i=0;$i<$arr_page_data['reports_header_count'];$i+=10)
                {
                    echo '<a class="as_pages" href="'.$root_link.$arr_main_pages[1].'/'
                            .($i/10).'">'.(($i/10)+1).'</a>';

                }
                if(($_SESSION['url_num']+1)<($arr_page_data['reports_header_count']/10))
                    echo'<a href="'.$root_link.$arr_main_pages[1].'/'.($_SESSION['url_num']+1).'"><div id="div_next">التالي</div></a>';
            ?>
            
            
        </div>
    </div>
    
</div>
