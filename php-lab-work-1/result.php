<?php

$studentName = "Punit Nakum";
$rollNo = 101;
$subject1 = 78;  // Marks in subject 1
$subject2 = 85;  // Marks in subject 2
$subject3 = 90;  // Marks in subject 3

// Calculate total and percentage
$total = $subject1 + $subject2 + $subject3;
$percentage = $total / 3;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Semester Result</title>
</head>
<body>

    <p><b>Name:</b> <?php echo $studentName; ?></p>

    <h4>Marks:</h4>
    <p>Subject 1: <?php echo $subject1; ?></p>
    <p>Subject 2: <?php echo $subject2; ?></p>
    <p>Subject 3: <?php echo $subject3; ?></p>

    <h4>Total Marks: <?php echo $total; ?></h4>
    <h4>Percentage: <?php echo $percentage; ?>%</h4>
</body>
</html>
