<?php
$dictionary=array(
'UKRAINE_ALARM_ENDPOINT'=>'Адреса API',
'UKRAINE_ALARM_METHOD'=>'HTTP-метод',
'UKRAINE_ALARM_TOKEN'=>'Токен доступу',
'UKRAINE_ALARM_REGION'=>'Регіон / маршрут',
'UKRAINE_ALARM_TRACKING'=>'Номер відправлення',
'UKRAINE_ALARM_PAYLOAD'=>'Шаблон POST-запиту',
'UKRAINE_ALARM_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'UKRAINE_ALARM_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}