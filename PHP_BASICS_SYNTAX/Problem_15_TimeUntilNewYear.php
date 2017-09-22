<?php
date_default_timezone_set('Europe/Sofia');

$now = new DateTime('now');
$new_year = new DateTime($now->format('Y').'-12-31 23:59:59');

$time_until = $new_year->getTimestamp()-$now->getTimestamp();

$days = floor($time_until / 86400);
$hours = floor($time_until / 3600);
$minutes = floor($time_until / 60);
$seconds = floor($time_until);


echo "Hours until new year : ".$hours."<br>";
echo "Minutes until new year : ".$minutes."<br>";
echo "Seconds until new year : ".$seconds."<br>";
echo "Days:Hours:Minutes:Seconds ".$days.":".$hours.":".$minutes.":".$seconds;