<?php
$root_folder = "";
$dir = str_replace('\\', '/', realpath(__DIR__));

if(!empty($_SERVER['CONTEXT_PREFIX'])) {
    $root_folder .= $_SERVER['CONTEXT_PREFIX'];
    $root_folder .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
} else {
    $root_folder .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
}
$root_folder = ltrim($root_folder, '/');
$root_folder .= '/';
$root_folder = str_replace('/config', '', $root_folder);
$root_link = "http://$_SERVER[HTTP_HOST]/".$root_folder;
$access_files = "http://$_SERVER[HTTP_HOST]/"
                    .$root_folder.'access_files';
$dir_cms = $access_files.'/cms/';

$dir_css = $access_files.'/css/';
$dir_css_global_url= $dir_css.'main.css';
$dir_css_rtl_global_url= $dir_css.'main.css';

$dir_js = $access_files.'/js/';
$dir_js_global_url = $dir_js.'footer_global.js';
$dir_js_jquery_url = $dir_js.'jquery.min.js';
$dir_js_x_small_style = $dir_js.'x_small_style.js';
$dir_js_small_style = $dir_js.'small_style.js';
$dir_js_medium_style= $dir_js.'medium_style.js';
$dir_js_large_style= $dir_js.'large_style.js';
$dir_js_x_large_style= $dir_js.'x_large_style.js';

$dir_files = $access_files."/";
$dir_files_images = $access_files."/imgs/";
$dir_uploads= $access_files."/upload_center/";
$dir_files_fonts= $access_files."/fonts/";

$dir_layous= "layouts/";
$dir_libs= "libs/";
$dir_admin= "cms/";

$dir_icon_logo = $dir_files_images."favicon.ico";
