<?php
$event_date = strtotime("2025-12-31");
$today = time();
$diff = $event_date - $today;
$days_left = floor($diff / (60 * 60 * 24));

echo "Days remaining until New Year: $days_left days";
?>
