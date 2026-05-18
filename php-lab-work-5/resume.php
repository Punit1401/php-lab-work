<?php
$resume = [
    "Name" => "Punit Nakum",
    "Education" => "BCA",
    "Skills" => "PHP, MySQL, HTML, CSS"
];

echo "<h2>Resume</h2>";
foreach ($resume as $key => $value) {
    echo "<b>$key:</b> $value<br>";
}
?>
