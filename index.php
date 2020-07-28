<?php
date_default_timezone_set("Europe/Kiev");
setlocale(LC_ALL, 'ru_RU');

// получаем текущий timestamp
$ts = time();
var_dump($ts);

// в одном дне 86400 секунд
$secs_in_day = 86400;

// переводим конечную строковую дату в timestamp
$ts_end = strtotime('2020-06-29 11:04:17'); // прошллое время
var_dump($ts_end);

// Вычитаем из конечного текущий timestamp
$ts_diff = $ts_end - $ts;
var_dump($ts_diff);

// узнаем количество оставшихся дней
$days_until_end = floor($ts_diff / 86400);
var_dump($days_until_end);

// узнаем количество оставшихся часов
$hours_until_end = date('H', $ts_diff);
var_dump($hours_until_end);

// узнаем количество оставшихся минут
$minutes_until_end = date('i', $ts_diff);
var_dump($minutes_until_end);

$days_and_hours_and_minutes_until_end = [
'days' => $days_until_end,
'hours' => $hours_until_end,
'minutes' => $minutes_until_end,
];


print("<H2>Вторая версия</H2>");


date_default_timezone_set("Europe/Kiev");
setlocale(LC_ALL, 'ru_RU');

$cur_date = date_create("now"); // создает экземпляр даты на основе формата
$next_mon = date_create("2020-06-29 11:04:17"); // прошллое время
var_dump($cur_date);
var_dump($next_mon);

// получает экземпляр временного промежутка на основе разницы между двумя датами
$diff1 = date_diff($cur_date, $next_mon);
var_dump($diff1);

// Приводит временной интервал к нужному формату
$days_count = date_interval_format($diff1, "%D");
$hours_count = date_interval_format($diff1, "%H");
$days_seconds = date_interval_format($diff1, "%S");


print("До начала следующего месяца осталось $days_count дней <br>");
print("До начала следующего месяца осталось $hours_count часов <br>");
print("До начала следующего месяца осталось $days_seconds секунд");

?>