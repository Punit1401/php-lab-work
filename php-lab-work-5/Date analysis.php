<?php
function average_score($responses) {
    $sum = array_sum($responses);
    return $sum / count($responses);
}

$responses = [4, 5, 3, 4, 5];
echo "Average Score: " . average_score($responses);
?>
