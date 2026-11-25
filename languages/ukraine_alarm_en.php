<?php
$dictionary=array(
'UKRAINE_ALARM_ENDPOINT'=>'API endpoint',
'UKRAINE_ALARM_METHOD'=>'HTTP method',
'UKRAINE_ALARM_TOKEN'=>'Access token',
'UKRAINE_ALARM_REGION'=>'Region / route',
'UKRAINE_ALARM_TRACKING'=>'Tracking number',
'UKRAINE_ALARM_PAYLOAD'=>'POST payload template',
'UKRAINE_ALARM_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'UKRAINE_ALARM_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}