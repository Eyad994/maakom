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
            جدول استطلاعات الرأي السابقة
        </div>
        <table>
            <tr id="tr_last_report_titles">
                 <td id="add_survey" title="اضافة" colspan="2" class="tds_edit_reports tds_clicable" 
                    url=""> 
                    <span  class="spans_edite fa fa-plus"></span>
                </td>
                <td>
                    السؤال
                </td>
                <td>
                    الاجابة الاولى
                </td>
                <td>
                    الاجابة الثانية
                </td>
                <td>
                    الاجابة الثالثة
                </td>
                <td>
                    الاجابة الرابعة
                </td>
            </tr>
            <tr id="tr_last_survey_titles" class="tr_hide">
                <td  title="حفظ" colspan="2" class="tds_edit_reports tds_clicable" 
                    url=""> 
                    <span id="save_survey" class="spans_edite fa fa-save"></span>
                </td>
                <td>
                    <input type="text" validation="empty" class="txts_tds_q" id="txt_question" />
                </td>
                <td>
                    <input type="text" validation="empty" class="txts_tds" id="txt_answer_1" />
                </td>
                <td>
                    <input type="text" validation="empty" class="txts_tds" id="txt_answer_2" />
                </td>
                <td>
                    <input type="text" validation="empty" class="txts_tds" id="txt_answer_3" />
                </td>
                <td>
                    <input type="text" validation="empty" class="txts_tds" id="txt_answer_4" />
                </td>
                
            </tr>
            <?php 
                $i=1;
                foreach ($arr_page_data['surveys'] as $key => $value) {
                    echo'
                        <tr  id="tr_'.$key.'" class="tr_surveys">
                            <td class="tds_delete_survey tds_clicable" 
                                url="" id="'.$key.'"> 
                                <span class="spans_delete fa fa-times"></span>
                            </td>
                            <td id="'.$key.'" class="tds_show_surveys tds_clicable" 
                                url=""> 
                                <span class="spans_edite fa fa-eye"></span>
                            </td>
                            <td id="question_'.$key.'">
                                '.$value['question'].'
                            </td>
                            <td id="answer_1_'.$key.'" class="csa_1_'.$i.'">
                                '.$value['answer1'].'
                            </td>
                            <td id="answer_2_'.$key.'" class="csa_2_'.$i.'">
                                '.$value['answer2'].'
                            </td>
                            <td id="answer_3_'.$key.'" class="csa_3_'.$i.'">
                                '.$value['answer3'].'
                            </td>
                            <td id="answer_4_'.$key.'" class="csa_4_'.$i.'">
                                '.$value['answer4'].'
                            </td>
                        </tr>';
                    $i++;
                }
            ?>
        </table>
        <div id="div_pages">
            <?php
                if($_SESSION['url_num']>0)
                    echo'<a href="'.$root_link.$arr_main_pages[7].'/'.($_SESSION['url_num']-1).'"><div id="div_prev">السابق</div></a>';
                for($i=0;$i<$arr_page_data['survey_header_count'];$i+=10)
                {
                    echo '<a class="as_pages" href="'.$root_link.$arr_main_pages[7].'/'
                            .($i/10).'">'.(($i/10)+1).'</a>';

                }
                if(($_SESSION['url_num']+1)<($arr_page_data['survey_header_count']/10))
                    echo'<a href="'.$root_link.$arr_main_pages[7].'/'.($_SESSION['url_num']+1).'"><div id="div_next">التالي</div></a>';
            
            ?>
        </div>
    </div>
    
    <div id="report_statistics">
        <?php include __DIR__.'/../sub_pages/survey_statistics.php'; ?>
    </div>
    </div>
</div>
