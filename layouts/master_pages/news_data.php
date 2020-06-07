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
        
        $type_input = '<input type="hidden" name="type" value="add_news"/>';
        $news_title = "";
        $news_text= "";
        if(isset($arr_page_data['news']))
        {
            $type_input = '<input type="hidden" name="type" value="edit_news"/>';
            $news_title = $arr_page_data['news']['title'];
            $news_text= $arr_page_data['news']['text'];
        }
    ?>
    <form id="form_news_data">
    <div id="report_data_info"><div class="divs_inputs_titles">
                عنوان الخبر
            </div>
        <?php echo $type_input ?>
        <div class="divs_inputs_data">
            <div class="divs_inputs_titles">
                عنوان الخبر
            </div>
            <div class="divs_inputs_text">
                <input type="text" validation="empty" value="<?php echo $news_title ?>" name="title" />
            </div>
        </div>
        <div class="divs_inputs_data">
             <div class="divs_inputs_titles">
                ايقونة الخبر
             </div><br>
             <?php 
             $news_files = '';
                if(isset($arr_page_data['news']))
                {
                   echo '
                            <input type="hidden" name="old_icon" value="'.$arr_page_data['news']['icon'].'" />
                            <img src="'.$dir_uploads.$arr_page_data['news']['icon'].'" class="imgs_news" />
                        ';
                   $news_files = 'news_files';
                }
            ?>
           
            <div class="divs_inputs_text">
                <input class="<?php echo $news_files?>" type="file"  name="icon" />
            </div>
        </div>
        <div class="divs_inputs_data">
             <div class="divs_inputs_titles">
                صورة الخبر
             </div><br>
            <?php 
            $news_files = '';
                if(isset($arr_page_data['news']))
                {
                   echo '
                            <input type="hidden" name="old_img" value="'.$arr_page_data['news']['img'].'" />
                            <img src="'.$dir_uploads.$arr_page_data['news']['img'].'" class="imgs_news" />
                        ';
                    $news_files = 'news_files_big';
                }
            ?>
           
            
            <div class="divs_inputs_text">
                <input class="<?php echo $news_files?>" type="file" name="img" />
            </div>
            
        </div>
        <div class="divs_inputs_data">
            <div class="divs_inputs_titles">
                نص الخبر
            </div>
            <div>
                <textarea name="news_txt" validation="empty"  id="txt_editor"><?php echo $news_text?></textarea>
            </div>
        </div>
        <div class="divs_btns">
                <input type="button" value="حفظ" id="save_news" class="btns_save" />
        </div>
    </div>
    </form>
</div>
    <div id="div_percent_status"></div>