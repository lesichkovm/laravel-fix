# Laravel Fix

When Laravel 5 Fails With The White Screen Of Death (aka WSOD) This Script Will Make It Right

## How to Use

Add this script to your root Laravel directory and run the following command:

<pre>
php laravel-fix.php
</pre>

Note. This script is for the www-data:www-data user (the standard Apache user:group). If your user:group is defferent you may want to change it

## What it does?

1. Removes the vendor directory
2. Composer updates all packages and creates the vendor directory
3. Changes the overall ownership to the web user www-date
4. Fixes access for storage directory
4. Fixes access for boot directory
4. Fixes access for public directory
