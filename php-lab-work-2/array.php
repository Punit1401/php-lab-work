<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr1 = explode(",", $_POST['array1']);
    $arr2 = explode(",", $_POST['array2']);

    echo "Array 1: ";
    print_r($arr1);

    echo "<br>Reverse of Array 1: ";
    print_r(array_reverse($arr1));

    echo "<br>Merged & Sorted Array: ";
    $merged = array_merge($arr1, $arr2);
    sort($merged);
    print_r($merged);

    echo "<br>Sum of Array 1 = " . array_sum($arr1);
}
?>

<form method="post">
    Enter Array 1 (comma separated): 
    <input type="text" name="array1"><br><br>
    Enter Array 2 (comma separated): 
    <input type="text" name="array2" ><br><br>
    <input type="submit" value="Submit">
</form>
