<?php
$daysOfWeek=require('days.php');

$date=new DateTime;
$dayOfWeek=$date->format('D');
echo $daysOfWeek[$dayOfWeek];