<?php
include_once __DIR__.'/../libs/lang.php';
$language = new Lang();
$lang = $language->setlang($lang_array[0]);
$lang = $language->getlang($lang_array[0]);
$lang_rtl_array[0] = FALSE;//left to right
$lang_rtl_array[1] = TRUE;//right to left
$str_arr_cities = array();
$str_arr_regions = array();
if($lang=='ar')
{
    $arr_report_status[0]= 'قيد المعالجة';
    $arr_report_status[1]= 'عالقة';
    $arr_report_status[2]= 'مغلقة';
}
//ckeditor ما بطلع الوان الخط واحجام
/*
    والنوتفكيشن ومستخدمو التطبيق
 */