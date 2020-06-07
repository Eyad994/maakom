<?php
    include __DIR__.'/../sub_pages/main_header.php';
    ?>
<div class="center">
<?php
    include __DIR__.'/../sub_pages/main_menu.php';
?><div id="div_main_info">
    <?php
        include __DIR__.'/../sub_pages/main_notify_header.php';
        
        $type_input = '<input type="hidden" name="type" value="add_tender"/>';
        $tender_title = "";
        $tender_text= "";
        $tender_date= $years.'-'.$months.'-'.$days;
        
        if(isset($arr_page_data['tender']))
        {
            $type_input = '<input type="hidden" name="type" value="edit_tender"/>';
            $tender_title = $arr_page_data['tender']['title'];
            $tender_text= $arr_page_data['tender']['text'];
            $tender_date= $arr_page_data['tender']['date'];
        }
    ?>
    <form id="form_tender_data">
        <?php echo $type_input ?>
        <div id="report_data_info">
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    عنوان العطاء
                </div>
                <div class="divs_inputs_text">
                    <input type="text" validation="empty" value="<?php echo $tender_title ?>" name="title" />
                </div>
            </div>
            
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    تاريخ العطاء
                </div>
                <div class="divs_inputs_text">
                    <input disabled="disabled" type="text" value="<?php echo $tender_date ?>" />
                    <input type="hidden" value="<?php echo $tender_date ?>" name="date" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    نص  العطاء
                </div>
                <div>
                    <textarea name="tender_txt" id="txt_editor"><?php echo $tender_text?></textarea>
                </div>
            </div>
            <div class="divs_btns">
                    <input type="button" value="حفظ" id="save_tender" class="btns_save" />
            </div>
        </div>
    </form>

</div>
<div id="div_percent_status"></div>