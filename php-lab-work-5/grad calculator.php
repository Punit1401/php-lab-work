<?php
$total_marks = 500;

function calculate_grade($marks) {
    global $total_marks;
    $percentage = ($marks / $total_marks) * 100;
    return $percentage >= 50 ? "Pass" : "Fail";
}

echo "Result: " . calculate_grade(350);
?>
