<?php
date_default_timezone_set ("Asia/Amman");
include_once __DIR__.'/../libs/get_date_time.php';
$date_time = new TimeDate();

$days = $date_time->get_days();
$months = $date_time->get_months();
$years = $date_time->get_years();

$hours = $date_time->get_hours();
$mins = $date_time->get_mins();
$seconds = $date_time->get_sec();
$pm_am = $date_time->get_am_pm();

$str_date_time = $date_time->get_date_time();
$a=1;
$c=5;
$b = 'xyz';

