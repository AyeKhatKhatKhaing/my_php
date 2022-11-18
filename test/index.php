<?php
$name="car";
$hash=password_hash($name,PASSWORD_DEFAULT);
echo password_verify($name,$hash)?"yes":"no";
echo "<br>";
date_default_timezone_set("Asia/Yangon");
echo date("D-M-Y h:i");
echo "<br>";
$date=date_create(date('d-m-Y'));
date_sub($date,date_interval_create_from_date_string("100 days"));
echo date_format($date,"d-m-Y");
echo "<br>";
echo cal_days_in_month(CAL_GREGORIAN,2,2021);