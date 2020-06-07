<?php

$lang_array[0] = 'ar';

include_once __DIR__.'/../libs/lang.php';
$language = new Lang();
$lang = $language->getlang($lang_array[0]);
$lang_rtl_array[0] = TRUE;//right to left

$dir_share_image = $dir_files_images.'logo.png';
