<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->addYear(); //1年後表記

echo '<br>';

echo $dt->subMonth(); //1ヶ月前表記

echo '<br>';

echo $dt->day;

echo $dt->hour;

echo $dt->minute;

echo $dt->second;