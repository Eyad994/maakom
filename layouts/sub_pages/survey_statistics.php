<div id="div_all_survey_statistic">
<div id="div_report_statistics_title">
            نتائج استطلاع رأي
        </div>
        <div id="div_report_statistics_title">
            السؤال:<?php echo $arr_page_data['last_surveys']['question'] ?>
        </div>
        <div id="div_statistic_lines">
            <div class="divs_report_statistics_info">
                <div class="divs_statistic_text">
                    <div class="divs_statistic_count">
                        <?php echo $arr_page_data['answer_1_count'].'/'.$arr_page_data['results_count'] ?>
                    </div>
                    <div id="div_answer1_txt" class="divs_statistic_count_name">
                        <?php echo $arr_page_data['last_surveys']['answer1'] ?> 
                    </div>
                </div>
                <div class="divs_statistic_full">
                    <div id="div_statistic_rate_1" style="width:<?php echo $arr_page_data['answer_persent_1']; ?>%" class="divs_statistic_rate">
                    </div>
                </div>
            </div>
            <div class="divs_report_statistics_info">
                <div class="divs_statistic_text">
                    <div class="divs_statistic_count">
                        <?php echo $arr_page_data['answer_2_count'].'/'.$arr_page_data['results_count'] ?>
                    </div>
                    <div id="div_answer2_txt" class="divs_statistic_count_name">
                        <?php echo $arr_page_data['last_surveys']['answer2'] ?> 
                    </div>
                </div>
                <div class="divs_statistic_full">
                    <div id="div_statistic_rate_2" style="width:<?php echo $arr_page_data['answer_persent_2']; ?>%" class="divs_statistic_rate">
                    </div>
                </div>
            </div>
            <div class="divs_report_statistics_info">
                <div class="divs_statistic_text">
                    <div class="divs_statistic_count">
                        <?php echo $arr_page_data['answer_4_count'].'/'.$arr_page_data['results_count'] ?>
                    </div>
                    <div id="div_answer3_txt" class="divs_statistic_count_name">
                        <?php echo $arr_page_data['last_surveys']['answer4'] ?> 
                    </div>
                </div>
                <div class="divs_statistic_full">
                    <div id="div_statistic_rate_3" style="width:<?php echo $arr_page_data['answer_persent_4']; ?>%" class="divs_statistic_rate">
                    </div>
                </div>
            </div>
            <div class="divs_report_statistics_info">
                <div class="divs_statistic_text">
                    <div class="divs_statistic_count">
                        <?php echo $arr_page_data['answer_3_count'].'/'.$arr_page_data['results_count'] ?>
                    </div>
                    <div id="div_answer4_txt" class="divs_statistic_count_name">
                        <?php echo $arr_page_data['last_surveys']['answer3'] ?> 
                    </div>
                </div>
                <div class="divs_statistic_full">
                    <div id="div_statistic_rate_4" style="width:<?php echo $arr_page_data['answer_persent_3']; ?>%" class="divs_statistic_rate">
                    </div>
                </div>
            </div>
        </div>
    <div id="div_statistic_drow" class="statistic_drow">
        
         </div>
</div>
<div id="print_survey_result">
    <input type="button" value="طباعة النتائج" id="btn_print_survey" />
</div>