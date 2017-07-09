
<?php

$currentDir = __DIR__ . DIRECTORY_SEPARATOR;

echo "START: Laravel fix\n";

$cmd = 'chown -R www-data:www-data ' . $currentDir . 'storage/';
echo cmd($cmd) . "\n";
$cmd = 'chmod -R 775 ' . $currentDir . 'storage/';
echo cmd($cmd) . "\n";
$cmd = 'chown -R www-data:www-data ' . $currentDir . 'bootstrap/cache/';
echo cmd($cmd) . "\n";
$cmd = 'chmod -R 775 ' . $currentDir . 'bootstrap/cache/';
echo cmd($cmd) . "\n";

echo "END: Laravel fix\n";

/* Required functions */

function cmd($cmd) {
    echo "Executing command: $cmd\n";
    $output = shell_exec($cmd);
    return $output;
}
