<?php
error_reporting(E_ALL);
session_start();
if(!isset($_SESSION['valid_u']))
{
    $_SESSION['valid_u'] = FALSE;
}
$get_layout = true;
include_once './config/urls.php';
include_once './config/lang.php';
include_once './config/main_pages.php';
include_once './config/date_time.php';
include_once './config/public_vars.php';

include_once './libs/link_reader.php';
include_once './config/lang_str.php';
include_once './libs/n_mysqli.php';

$sql= new N_MySqli();
$conn = $sql->db_conn();
include_once './libs/request_router.php';
if($get_layout)
{
    include_once './libs/router.php';
    if(!isset($ajax_tag))
        $ajax_tag = FALSE;

    if(isset($request_data['link'])||$ajax_tag)
    {
        include_once './layouts/body.php';
    }
    else
    {
        include_once './layouts/header.php';
        include_once './layouts/body.php';
        include_once './layouts/footer.php';
    }
}
unset($arr_page_data);
$sql->closeConn($conn);
if(!isset($_SESSION['first_time']))
{
    $_SESSION['first_time'] = TRUE;
}