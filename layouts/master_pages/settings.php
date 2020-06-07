<?php
    include __DIR__.'/../sub_pages/main_header.php';
    ?>
<div class="center">
<?php
    include __DIR__.'/../sub_pages/main_menu.php';
?><div id="div_main_info">
    <?php
        include __DIR__.'/../sub_pages/main_notify_header.php';
        
        $type_input = '<input type="hidden" name="type" value="add_admin"/>';
        $admin_name= "";
        $admin_phone= "";
        $admin_email= "";
        $admin_full_name= "";
        $admin_a_id= "";
        if(isset($arr_page_data['user']))
        {
            $type_input = '<input type="hidden" name="type" value="edit_user_admin"/>';
            $admin_name= $arr_page_data['user']['name'];
            $admin_phone=$arr_page_data['user']['phone'];
            $admin_email= $arr_page_data['user']['email'];
            $admin_full_name= $arr_page_data['user']['full_name'];
            $admin_a_id= $arr_page_data['user']['admin_id'];
        }
    ?>
    <form id="form_users_data">
        <?php echo $type_input ?>
        <div id="report_data_info">
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    المستخدم
                </div>
                <div class="divs_inputs_text">
                    <input type="text" value="<?php echo $admin_name ?>" id="u_name" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    هاتف المستخدم
                </div>
                <div class="divs_inputs_text">
                        <input type="text" value="<?php echo $admin_phone ?>" id="phone" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    البريد الالكتروني
                </div>
                <div class="divs_inputs_text">
                    <input type="text" value="<?php echo $admin_email ?>" id="u_email" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                    الاسم الكامل
                </div>
                <div class="divs_inputs_text">
                    <input type="text" value="<?php echo $admin_full_name ?>" id="full_name" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                     الرقم الوطني
                </div>
                <div class="divs_inputs_text">
                    <input type="text" value="<?php echo $admin_a_id ?>" id="user_number" disabled="disabled"/>
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                   كلمة السر الحالية
                </div>
                <div class="divs_inputs_text">
                    <input type="password" id="pass" />
                </div>
                <div class="divs_btns">
                    <input value="تعديل" id="update_user_data" class="btns_save" type="button">
                </div>
            </div>
            <div class="divs_titles">
                لتغيير كلمة السر
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                   كلمة السر الحالية
                </div>
                <div class="divs_inputs_text">
                    <input type="password" id="old_pass" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                   كلمة السر الجديدة
                </div>
                <div class="divs_inputs_text">
                    <input type="password" id="new_pass" />
                </div>
            </div>
            <div class="divs_inputs_data">
                <div class="divs_inputs_titles">
                   تأكيد كلمة السر
                </div>
                <div class="divs_inputs_text">
                    <input type="password" id="re_new_pass" />
                </div>
                <div class="divs_btns">
                    <input value="تغيير كلمة السر" id="update_new_pass" class="btns_save" type="button">
                </div>
            </div>
            
        </div>

       
    </form>
</div>
<div id="div_percent_status"></div>