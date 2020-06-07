
<div id="report_statistics">
    <div id="div_report_statistics_title">
        احصائيات البلاغات
    </div>
    <div id="div_statistic_lines">
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['reports_count']['sum'] ?>/<?php echo $arr_page_data['reports_count']['sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    اجمالي الوارد
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_1" style="width:100%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['reports_count']['0'] ?>/<?php echo $arr_page_data['reports_count']['sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    <?php echo $arr_report_status[0] ?> 
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_2" style="width:<?php echo $arr_page_data['reports_count_val']['0'] ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['reports_count']['1'] ?>/<?php echo $arr_page_data['reports_count']['sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    <?php echo $arr_report_status[1] ?>
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_3" style="width:<?php echo $arr_page_data['reports_count_val']['1'] ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['reports_count']['2'] ?>/<?php echo $arr_page_data['reports_count']['sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    <?php echo $arr_report_status[2] ?>
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_3" style="width:<?php echo $arr_page_data['reports_count_val']['2'] ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
    </div>
    <div id="div_statistic_drow">
        <div class="box-body chart-responsive">
            <div class="chart" closed="<?php echo $arr_page_data['reports_count']['0'] ?>" 
                 in_procces="<?php echo $arr_page_data['reports_count']['1'] ?>" 
                 hang="<?php echo $arr_page_data['reports_count']['2'] ?>" id="sales-chart" style="height: 300px; position: relative;"></div>
        </div>
    </div>
</div>
