

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
                    البلاغات المغلقة 
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
                    تحت المعالجة
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
                    البلاغات العالقة
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_3" style="width:<?php echo $arr_page_data['reports_count_val']['2'] ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
    </div><div id="div_statistic_drow">
        <div class="box-body chart-responsive">
            <div class="chart" closed="<?php echo $arr_page_data['reports_count']['0'] ?>" 
                 in_procces="<?php echo $arr_page_data['reports_count']['1'] ?>" 
                 hang="<?php echo $arr_page_data['reports_count']['2'] ?>" id="sales-chart" style="height: 300px; position: relative;"></div>
        </div>
    </div>
</div>
<div id="div_new_reports">
    <div id="div_new_report_tilte">
        أحدث البلاغات
    </div>
    <table cellspacing="0" cellpadding="0">
        <tr id="tr_last_report_titles">
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
            <td>
                الموقع
            </td>
        </tr>
        <?php
        foreach ($arr_page_data['reports'] as $key => $value) {
            echo '<tr class="tds_clicable" url="' . $root_link . $arr_main_pages[2] . '/' . $key . '"  id="tr_last_report_content">
                            <td>
                                ' . $key . '
                            </td>
                            <td>
                                ' . $value['type'] . '
                            </td>
                            <td>
                                ' . $value['date'] . '
                            </td>
                            <td>
                                ' . $value['phone'] . '
                            </td>
                            <td>
                                ' . $arr_report_status[$value['status']] . '
                            </td>
                            <td>
                                الموقع
                            </td>
                        </tr>';
        }
        ?>

    </table>
    <a href="<?php echo $root_link . $arr_main_pages[1] ?>">
        <div id="div_see_all_reports">
            عرض جميع البلاغات
        </div>
    </a>
</div>
<div id="div_customors_rate">
    <div id="div_customors_rate_title">
        مستوى رضى المواطنين عن الخدمات
    </div>
    <div id="div_customors_rate_content">
        <div class="divs_customors_rate_txt">
            <?php echo $arr_page_data['marks_count_val']['5'] ?>
        </div>
        <div>
            <span class="fa fa-star">
            </span><span class="fa fa-star">
            </span><span class="fa fa-star">
            </span><span class="fa fa-star">
            </span><span class="fa fa-star">
            </span>
        </div>
    </div>
    <div id="div_customors_rate_content">
        <div class="divs_customors_rate_txt">
            <?php echo $arr_page_data['marks_count_val']['4'] ?>
        </div>
        <div>
            <span class="fa fa-star">
            </span><span class="fa fa-star">
            </span><span class="fa fa-star">
            </span><span class="fa fa-star">
            </span>
        </div>
    </div>
    <div id="div_customors_rate_content">
        <div class="divs_customors_rate_txt">
            <?php echo $arr_page_data['marks_count_val']['3'] ?>
        </div>
        <div>
            <span class="fa fa-star">
            </span><span class="fa fa-star">
            </span><span class="fa fa-star">
            </span>
        </div>
    </div>
    <div id="div_customors_rate_content">
        <div class="divs_customors_rate_txt">
            <?php echo $arr_page_data['marks_count_val']['2'] ?>
        </div>
        <div>
            <span class="fa fa-star">
            </span><span class="fa fa-star">
            </span>
        </div>
    </div>
    <div id="div_customors_rate_content">
        <div class="divs_customors_rate_txt">
            <?php echo $arr_page_data['marks_count_val']['1'] ?>
        </div>
        <div>
            <span class="fa fa-star">
            </span>
        </div>
    </div>
</div>