    <?php
include __DIR__ . '/../sub_pages/main_header.php';
?>
<div class="center">
    <?php
    include __DIR__ . '/../sub_pages/main_menu.php';
    ?><div id="div_main_info">
    <?php
    include __DIR__ . '/../sub_pages/main_notify_header.php';

    if (isset($arr_page_data['municipality'])) {
        $type_input = '<input type="hidden" name="type" value="edit_municipality_data"/>';
        $name = $arr_page_data['municipality']['name'];
        $logo = $arr_page_data['municipality']['logo'];
        $main_phone = $arr_page_data['municipality']['main_phone'];
        $reports_phone= $arr_page_data['municipality']['reports_phone'];
        $tenders_phone = $arr_page_data['municipality']['tenders_phone'];
        $email = $arr_page_data['municipality']['email'];
        $lat = $arr_page_data['municipality']['lat'];
        $lng = $arr_page_data['municipality']['lng'];
    }
    ?>
        <form id="form_users_data">
            <?php echo $type_input ?>
            <div id="report_data_info">
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                         البلدية
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty" value="<?php echo $name ?>" name="municipality_name" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                         المقسم
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,number" value="<?php echo $main_phone ?>" name="main_phone" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        رقم العطاءات
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,number" value="<?php echo $tenders_phone ?>" name="tender_phone" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        اقتراحات وشكاوي
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,number" value="<?php echo $reports_phone ?>" name="report_phone" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                         البريد الالكتروني
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,email" value="<?php echo $email ?>" name="email" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        الموقع
                    </div>
                    <div class="divs_inputs_text">
                        <div>
                            <input type="text" id="txt_map_search" placeholder="بحث عن موقع"/>
                        </div>
                        <div id="div_map"  lng="<?php echo $lng?>" saerch="enable" lat="<?php echo $lat?>"></div>v
                        <input type="hidden" id="hdn_edit_municipality_lat" name="lat" value="<?php echo $lat ?>"/>
                        <input type="hidden" id="hdn_edit_municipality_lng" name="lng" value="<?php echo $lng ?>"/>
                    </div>
                </div>
            <div class="divs_btns">
                <input type="button" value="حفظ" id="save_municipality_data" class="btns_save" />
            </div>
        </form>
    </div>
    <div id="div_percent_status"></div>