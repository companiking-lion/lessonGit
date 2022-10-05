<?php
declare(strict_types=1);
$lineBreak = "<br>";
echo time();
echo "<br>";
const SECONDS_IN_YEAR = 60*60*24*365;
$currentYear = intval(floor(time()/SECONDS_IN_YEAR)+1970 )."<br>";
echo $currentYear;
echo date("D").$lineBreak;
echo mktime(1,0,0,10,05,2022)."<br>";
echo date_default_timezone_get(	)."<br>";
$timezoneId = ("Asia/Yekaterinburg");
echo date_default_timezone_set($timezoneId).$lineBreak;
echo date_default_timezone_get(	).$lineBreak;
