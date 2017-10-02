
<?php

$currentDir = __DIR__ . DIRECTORY_SEPARATOR;

echo "START: Laravel fix\n";

echo "1. Repair storage directory\n";
$cmd = 'chown -R www-data:www-data ' . $currentDir . 'storage/';
echo cmd($cmd) . "\n";
$cmd = 'chmod -R 775 ' . $currentDir . 'storage/';
echo cmd($cmd) . "\n";

echo "2. Repair bootstrap/cache directory\n";
$cmd = 'chown -R www-data:www-data ' . $currentDir . 'bootstrap/cache/';
echo cmd($cmd) . "\n";
$cmd = 'chmod -R 775 ' . $currentDir . 'bootstrap/cache/';
echo cmd($cmd) . "\n";

echo "3. Repair public directory\n";
$cmd = 'chown -R www-data:www-data ' . $currentDir . 'public/';
$output = cmd($cmd);
echo $output . "\n";

$cmd = 'chmod -R 770 ' . $currentDir . 'public/';
echo cmd($cmd) . "\n";

echo "END: Laravel fix\n";

/* Required functions */

function cmd($cmd) {
    echo "Executing command: $cmd\n";
    $output = shell_exec($cmd);
    return $output;
}
