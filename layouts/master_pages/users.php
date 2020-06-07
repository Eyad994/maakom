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

        <div id="div_new_reports">
            <div id="div_new_report_tilte">
                جدول المستخدمين
            </div>
            <table>
                <tr id="tr_last_report_titles">
                    <td class="tds_clicable" title="إضافة" url="<?php echo $root_link . $arr_main_pages[12] ?>"><span class="fa fa-plus spans_add spans_header_icons" id="add_news_icon"></span></td>
                    <td></td>
                    <td>
                        اسم المستخدم
                    </td>
                </tr>
                <?php
                foreach ($arr_page_data['users'] as $key => $value) {
                    echo '<tr title="حذف" class="tr_last_report_content" id="tr_' . $key . '">
                            <td class="tds_delete_admin tds_clicable" id="' . $key . '" url=""> 
                                <span class="spans_delete fa fa-times"></span>
                            </td>
                            <td title="التفاصيل" class="tds_edit_reports tds_clicable" 
                                url="' . $root_link . $arr_main_pages[12] . '/' . $key . '"> 
                                <span class="spans_edite fa fa-eye"></span>
                            </td>
                            <td>
                                ' . $value['name'] . '
                            </td>
                        </tr>
                    ';
                }
                ?>
            </table>
            <div id="div_pages">
                <?php
                if ($_SESSION['user_type'] > 0) {
                    if ($_SESSION['url_num']>0)
                        echo'<a href="' . $root_link . $arr_main_pages[9] . '/' . ($_SESSION['url_num'] - 1) . '"><div id="div_prev">السابق</div></a>';

                    for ($i = 0; $i < $arr_page_data['users_header_count']; $i += 10) {
                        echo '<a class="as_pages" href="' . $root_link . $arr_main_pages[9] . '/'
                        . ($i / 10) . '">' . (($i / 10) + 1) . '</a>';
                    }

                    if (($_SESSION['url_num'] + 1) < ($arr_page_data['users_header_count'] / 10))
                        echo'<a href="' . $root_link . $arr_main_pages[9] . '/' . ($_SESSION['url_num'] + 1) . '"><div id="div_next">التالي</div></a>';
                } else {
                    if ($_SESSION['url_num']>0)
                        echo'<a href="' . $root_link . $arr_main_pages[9] . '/' . ($_SESSION['url_num'] - 1) . '"><div id="div_prev">السابق</div></a>';
                    for ($i = 0; $i < $arr_page_data['admins_count']; $i += 10) {
                        echo '<a class="as_pages" href="' . $root_link . $arr_main_pages[9] . '/'
                        . ($i / 10) . '">' . (($i / 10) + 1) . '</a>';
                    }

                    if (($_SESSION['url_num'] + 1) < ($arr_page_data['admins_count'] / 10))
                        echo'<a href="' . $root_link . $arr_main_pages[9] . '/' . ($_SESSION['url_num'] + 1) . '"><div id="div_next">التالي</div></a>';
                }
                ?>
            </div>
        </div>

    </div>
