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
            جدول البلديات
        </div>
        <table>
            <tr id="tr_last_report_titles">
                 <td id="add_survey" title="اضافة" colspan="2" class="tds_edit_reports tds_clicable" 
                    url=""> 
                    <span  class="spans_edite fa fa-plus"></span>
                </td>
                <td>
                    اسم البلدية
                </td>
                <td>
                    مجموع البلاغات
                </td>
                <td>
                    البلاغات المغلقة
                </td>
                <td>
                    البلاغات العالقة
                </td>
                <td>
                    قيد المعالجة
                </td>
            </tr>
            <tr id="tr_last_survey_titles" class="tr_hide">
                <td  title="حفظ" colspan="2" class="tds_edit_reports tds_clicable" 
                    url="" id="save_municipality"> 
                    <span class="spans_edite fa fa-save"></span>
                </td>
                <td>
                    <input type="text" validation="empty" class="txts_tds_q" id="txt_municipality_name" />
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                
            </tr>
            <?php 
                $i=1;
                foreach ($arr_page_data['municipalities'] as $key => $value) {
                    echo'
                        <tr  id="tr_'.$key.'" class="tr_municipality">
                            <td class="tds_delete_municipality tds_clicable" 
                                url="" id="'.$key.'"> 
                                <span class="spans_delete fa fa-times"></span>
                            </td>
                            <td id="'.$key.'" class="tds_edit_municipality tds_clicable" 
                                url=""> 
                                <span class="spans_edite fa fa-edit"></span>
                            </td>
                            <td id="municipality_name_'.$key.'">
                                <div id="div_name'.$key.'"> '.$value['name'].'</div>
                                <div id="div_edit_name_'.$key.'" class="divs_edit_municipality hide">
                                    <input type="text" validation="empty" value="'.$value['name'].'" id="txt_name'.$key.'" class="txt_municipality_names txt_hide" /><!-- 
                                        --><span id="'.$key.'" class="spans_save_name spans_edite fa fa-save"></span>
                                </div>
                            </td>
                            <td id="answer_1_'.$key.'" class="csa_1_'.$i.'">
                                '.$value['status_sum'].'
                            </td>
                            <td id="answer_2_'.$key.'" class="csa_2_'.$i.'">
                                '.$value['status_1'].'
                            </td>
                            <td id="answer_3_'.$key.'" class="csa_3_'.$i.'">
                                '.$value['status_3'].'
                            </td>
                            <td id="answer_4_'.$key.'" class="csa_4_'.$i.'">
                                '.$value['status_3'].'
                            </td>
                        </tr>';
                    $i++;
                }
            ?>
        </table>
        
    </div>
    
    </div>
</div>
