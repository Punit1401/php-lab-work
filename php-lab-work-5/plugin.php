<?php
function plugin_hello() {
    echo "Plugin loaded successfully!";
}

if (function_exists('plugin_hello')) {
    plugin_hello();
} else {
    echo "Plugin not found!";
}
?>
