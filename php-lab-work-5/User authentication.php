<?php
function authenticate($username, $password) {
    $valid_user = "admin";
    $valid_pass = "1234";

    if ($username === $valid_user && $password === $valid_pass) {
        return true;
    }
    return false;
}

$user = "admin";
$pass = "1234";

if (authenticate($user, $pass)) {
    echo "Login Successful!";
} else {
    echo "Invalid Credentials!";
}
?>
