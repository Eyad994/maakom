<?php
include __DIR__ . '/../sub_pages/main_header.php';
?>
<div class="center">
    <?php
    include __DIR__ . '/../sub_pages/main_menu.php';
    ?><div id="div_main_info">
    <?php
    include __DIR__ . '/../sub_pages/main_notify_header.php';
    $type_input = '<input type="hidden" name="type" value="add_admin"/>';
    $admin_name = "";
    $admin_phone = "";
    $admin_email = "";
    $admin_full_name = "";
    $admin_a_id = "";
    $admin_password = "";
    $admin_type = "0";
    $edit_flag = false;
    if (isset($arr_page_data['user'])) {
        $edit_flag=true;
        $type_input = '<input type="hidden" name="type" value="edit_admin"/>';
        $admin_name = $arr_page_data['user']['name'];
        $admin_phone = $arr_page_data['user']['phone'];
        $admin_email = $arr_page_data['user']['email'];
        $admin_full_name = $arr_page_data['user']['full_name'];
        $admin_a_id = $arr_page_data['user']['admin_id'];
        $admin_password = $arr_page_data['user']['password'];
        $admin_type = $arr_page_data['user']['type'];
        $user_privileges=$arr_page_data['user']['user_privileges'];
    }
    ?>
        <form id="form_users_data">
            <?php echo $type_input ?>
            <div id="report_data_info">
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        اسم المستخدم
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty" value="<?php echo $admin_name ?>" name="u_name" />
                    </div>
                </div>
                <?php
                if(!$edit_flag)
                {
                    ?>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        كلمة المرور 
                    </div>
                    <div class="divs_inputs_text">
                        <input type="password" validation="empty" value="<?php echo $admin_password ?>" id="txt_password" name="password" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        تأكيد كلمة المرور 
                    </div>
                    <div class="divs_inputs_text">
                        <input type="password" validation="empty" value="<?php echo $admin_password ?>" id="txt_re_password" name="re_password" />
                    </div>
                </div>
                <?php
                }?>
                
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        هاتف المستخدم
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,number" value="<?php echo $admin_phone ?>" name="phone" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        البريد الالكتروني
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,email" value="<?php echo $admin_email ?>" name="u_email" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        الاسم الكامل
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty" value="<?php echo $admin_full_name ?>" name="full_name" />
                    </div>
                </div>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        رقم الهوية
                    </div>
                    <div class="divs_inputs_text">
                        <input type="text" validation="empty,number" value="<?php echo $admin_a_id ?>" name="user_number" />
                    </div>
                </div>
                <?php
                if($_SESSION['user_type']==0)
                {
                    ?>
                <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        نوع المستخدم
                    </div>
                    <div class="divs_inputs_text">
                        <select id="select_municipalities" class="select_admins_type" onchange="change_municipality_id()">
                            <option value="0">مستخدم وزارة</option>
                            <?php
                            foreach ($arr_page_data['municipalities'] as $key => $value) {
                                $selected = '';
                                if ($admin_type == $key)
                                    $selected = 'selected';
                                    echo '<option value="' . $key . '" '.$selected.'>' . $value['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <input type="hidden" name="user_type" value="<?php echo $admin_type ?>" id="hdn_municipality_id"/>
                    </div>
                </div>
                <?php
                }
                else
                {
                    $selected1='';
                    $selected2='';
                    if($user_privileges=='0')
                    {
                        $selected1='selected';
                    }
                    if($user_privileges=='1')
                    {
                        $selected2='selected';
                    }
                    echo '
                    <div class="divs_inputs_data">
                    <div class="divs_inputs_titles">
                        نوع المستخدم
                    </div>
                    <div class="divs_inputs_text">
                        <select id="select_user_privileges" class="select_admins_type" onchange="change_user_privileges()">
                            <option value="0" '.$selected1.'>محرر</option>
                            <option value="1" '.$selected2.'>مدير</option>
                        </select>
                            <input type="hidden" name="user_privileges" value="'.$user_privileges.'" id="hdn_user_privileges"/>
                    </div>
                </div>';
                }
                ?>
            </div>

            <div class="divs_btns">
                <input type="button" value="حفظ" id="save_user" class="btns_save" />
            </div>
        </form>
    </div>
    <div id="div_percent_status"></div>