<?php

$date = new DateTime;
$futurDate = new DateTime;
$outputFormat = 'F 0j Y g:i a ';
$futurDate->add(new DateInterval('PT2H'));

var_dump($date);

echo "present time : " . $date->format($outputFormat); 
echo "destination time : " . $futurDate->format($outputFormat);