<?php
include_once './config/urls.php';
include_once './config/lang.php';
include_once './config/main_pages.php';
include_once './config/date_time.php';
include_once './config/public_vars.php';

include_once './libs/n_mysqli.php';
$sql= new N_MySqli();
$conn = $sql->db_conn();
include_once './libs/mobile_request_router.php';
$sql->closeConn($conn);