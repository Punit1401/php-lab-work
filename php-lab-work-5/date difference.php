<?php
$date1 = new DateTime("2025-01-01");
$date2 = new DateTime("2025-10-29");
$diff = $date1->diff($date2);
echo "Difference: " . $diff->days . " days";
?>
