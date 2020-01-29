<?php 
/* set default timezone 
date_default_timezone_set('America/Indiana/Vincennes');
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

$current_date = "$date/$month/$year $hour:$min:$sec";
echo $current_date;
*/

date_default_timezone_set('America/Indiana/Vincennes');
echo date('M d Y H:i');
?>