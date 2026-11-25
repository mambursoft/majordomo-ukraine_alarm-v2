<?php
$dictionary=array(
'UKRAINE_ALARM_ENDPOINT'=>'Адрес API',
'UKRAINE_ALARM_METHOD'=>'HTTP-метод',
'UKRAINE_ALARM_TOKEN'=>'Токен доступа',
'UKRAINE_ALARM_REGION'=>'Регион / маршрут',
'UKRAINE_ALARM_TRACKING'=>'Номер отправления',
'UKRAINE_ALARM_PAYLOAD'=>'Шаблон POST-запроса',
'UKRAINE_ALARM_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'UKRAINE_ALARM_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}