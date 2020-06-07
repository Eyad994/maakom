<div id="div_new_reports">
    <div id="div_knot_content">
        <div id="div_statistic_lines">
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['municipalities_sum']['status_sum'].'/'.$arr_page_data['municipalities_sum']['status_sum'] ?>
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
                    <?php echo $arr_page_data['municipalities_sum']['status_sum1'] ?>/<?php echo $arr_page_data['municipalities_sum']['status_sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    <?php echo $arr_report_status[0] ?> 
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_2" style="width:<?php echo ($arr_page_data['municipalities_sum']['status_sum1']/$arr_page_data['municipalities_sum']['status_sum'])*100 ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['municipalities_sum']['status_sum2'] ?>/<?php echo $arr_page_data['municipalities_sum']['status_sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    <?php echo $arr_report_status[1] ?>
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_3" style="width:<?php echo ($arr_page_data['municipalities_sum']['status_sum2']/$arr_page_data['municipalities_sum']['status_sum'])*100 ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
        <div class="divs_report_statistics_info">
            <div class="divs_statistic_text">
                <div class="divs_statistic_count">
                    <?php echo $arr_page_data['municipalities_sum']['status_sum3'] ?>/<?php echo $arr_page_data['municipalities_sum']['status_sum'] ?>
                </div>
                <div class="divs_statistic_count_name">
                    <?php echo $arr_report_status[2] ?>
                </div>
            </div>
            <div class="divs_statistic_full">
                <div id="div_statistic_rate_3" style="width:<?php echo ($arr_page_data['municipalities_sum']['status_sum3']/$arr_page_data['municipalities_sum']['status_sum'])*100 ?>%" class="divs_statistic_rate">
                </div>
            </div>
        </div>
    </div>
        <div class="text-center" >
            <div class="divs_knob">
                <input type="text" class="knob" value="<?php echo intval(($arr_page_data['municipalities_sum']['status_sum3']/$arr_page_data['municipalities_sum']['status_sum'])*100)  ?>" data-width="200" data-height="212" 
                       data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" 
                       style="width: 49px; height: 250px; position: absolute; vertical-align: middle;
                       margin-top: 50px; margin-left: -69px; border: 0px; background: none; 
                       font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; 
                       -webkit-appearance: none;    left: 45px;
                       right: 45px;">
            </div>
            <div class="divs_graphec_titles">نسبة الانجاز الكلي  (%)</div> 
        </div>
        <div class="text-center" >
            <div class="divs_knob">
                <input type="text" class="knob" value="<?php echo $arr_page_data['municipalities_sum']['sum'] ?>" data-width="200" data-height="212" 
                       data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" 
                       style="width: 49px; height: 250px; position: absolute; vertical-align: middle;
                       margin-top: 50px; margin-left: -69px; border: 0px; background: none; 
                       font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; 
                       -webkit-appearance: none;    left: 45px;
                       right: 45px;">
            </div>
            <div class="divs_graphec_titles">نسبة البلديات الفعالة  (%)</div> 
        </div>
    </div>
</div>
<div id="div_new_reports">
    <div id="div_new_report_tilte">
        تقارير البلديات
    </div>

    <div id="municpality_reports">
        <table>
            <tr id="trs_haeders">
                <td>البلدية</td>
                <td>مجموع البلاغات</td>
                <td>البلاغات المغلقة</td>
                <td>نسبة الانجاز</td>
            </tr>
            <?php
            foreach ($arr_page_data['municipalities'] as $key => $value) {
                $persent = $value['status_1'] / $value['status_sum'];
                echo '<tr><td>' . $value['name'] . '</td>
                <td>' . $value['status_sum'] . '</td>
                <td>' . $value['status_1'] . '</td>
                <td>
                <div class="divs_parsent_content">
                <div class="divs_parsent" style="width:' . intval($persent * 100) . '%"></div>
                </div>' . intval($persent * 100) . '%</td></tr>';
            }
            ?>
        </table>
    </div>
</div>
<div id="div_new_reports">
    <div id="div_new_report_tilte">
        البلدية
    </div>
    <div id="div_municipality" class="divs_padding">
        <select id="select_municipalities" class="select_admins_type" onchange="change_municipality_reports()">
            <option value="0"></option>
            <?php
            foreach ($arr_page_data['municipalities'] as $key => $value) {
                $selected = '';
                if ($admin_type == $key)
                    $selected = 'selected';
                echo '<option value="' . $key . '" ' . $selected . '>' . $value['name'] . '</option>';
            }
            ?>
        </select>
    </div>
</div>
<div id="div_main_municipality_reports"></div>
