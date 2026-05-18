<?php
$inventory = [
    "Laptop" => 10,
    "Mouse" => 25,
    "Keyboard" => 15
];

function check_item($item, $inventory) {
    return isset($inventory[$item]) ? "Available: {$inventory[$item]}" : "Item not found.";
}

echo check_item("Laptop", $inventory);
?>
