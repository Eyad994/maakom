<?php
include __DIR__ . '/../sub_pages/main_header.php';
?>
<div class="center">
    <?php
    include __DIR__ . '/../sub_pages/main_menu.php';
    ?>
    <div id="div_main_info">
        <?php
        include __DIR__ . '/../sub_pages/main_notify_header.php';
        ?>
        <div id="report_data_info">
            <div id="div_report_number" class="divs_reports_data">
                رقم البلاغ:
                <span>
                    <?php echo $arr_page_data['reports']['id'] ?>
                </span>
            </div>
            <div id="div_report_number"  class="divs_reports_data">
                تاريخ البلاغ:
                <span>
                    <?php echo $arr_page_data['reports']['date'] ?>
                </span>
            </div>
            <div id="div_report_user_name"  class="divs_reports_data">
                اسم مقدم البلاغ:
                <span>
                    <?php echo $arr_page_data['reports']['user_name'] ?>
                </span>
            </div>
            <div id="div_report_user_number"  class="divs_reports_data">
                رقم الهوية لصاحب البلاغ:
                <span>
                    <?php echo $arr_page_data['reports']['user_number'] ?>
                </span>
            </div>
            <div id="div_report_user_phone" class="divs_reports_data">
                رقم هاتف مقدم البلاغ:
                <span>
                    <?php echo $arr_page_data['reports']['user_phone'] ?>
                </span>
            </div>
            <div id="div_report_type"  class="divs_reports_data">
                نوع البلاغ:
                <span>
                    <?php echo $arr_page_data['reports']['type'] ?>
                </span>
            </div>
            <div id="div_report_type"  class="divs_reports_data">
                حالة البلاغ:
                <select class="select_in_report_status">
                    <?php
                    foreach ($arr_report_status as $keys => $values) {
                        $select = '';
                        if ($arr_page_data['reports']['status'] == $keys)
                            $select = 'selected';
                        echo '<option value="' . $keys . '" ' . $select . '>' . $values . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div id="div_report_mark" class="divs_reports_data">
                <?php
                if ($arr_page_data['reports']['mark'] == 0)
                    echo'لم يتم تقييم الخدمة';
                else {

                    echo'تقييم الخدمة:';
                    echo'<div id="div_customors_rate_content">';
                    $i = 0;
                    for ($i; $i < $arr_page_data['reports']['mark']; $i++) {
                        echo '<span class="fa fa-star"></span>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div id="div_report_text" >
                نص البلاغ:
                <div>
<?php echo $arr_page_data['reports']['text'] ?>
                </div>
            </div>
            <div id="div_reports_data">
                <div class="reports_data_title">
                    ملاحظات
                </div>
                <textarea id="txt_report_note"><?php echo $arr_page_data['reports']['note'] ?></textarea>

                <div class="divs_btns">
                    <input type="button" value="حفظ" id="change_report_note" class="btns_save" />
                </div>
            </div>
            <div id="div_report_locatin">
            <div class="divs_reports_titles">مكان البلاغ</div>

                <div id="div_map" lng="<?php echo $arr_page_data['reports']['lng'] ?>" lat="<?php echo $arr_page_data['reports']['lat'] ?>"></div>
                <input type="button" value="نسخ رابط الموقع" id="btn_copy_location" onclick="copy_link('<?php echo $arr_page_data['reports']['lat'].','.$arr_page_data['reports']['lng'] ?>')"/>
            </div>
            <div id="div_report_image">
<?php
if ($arr_page_data['reports']['img'] != '') {

    echo '<div class="divs_reports_titles">صورة البلاغ</div>'
    . '<img src="' . $dir_uploads . $arr_page_data['reports']['img'] . '" />';
}
?>

            </div>
            <div id="div_report_video">
<?php
if ($arr_page_data['reports']['video'] != '') {
    echo '
                            <div class="divs_reports_titles">فيديو البلاغ</div>
                    <video width="100%" height="240" controls>
                        <source src="' . $dir_uploads . $arr_page_data['reports']['video'] . '" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>';
}
?>
            </div>

        </div>

    </div>
</div>