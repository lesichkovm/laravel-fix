# Laravel Fix

When Laravel 5 Fails With The White Screen Of Death (aka WSOD) This Script Will Make It Right

## How to Use

Add this script to your root Laravel directory and run the following command:

<pre>
php laravel-fix.php
</pre>

## What it does?
1. Removes vendor directry
2. Composer updates all packages and created vendor directory
3. Change overall ownership to the web user www-date
4. Fixes access for storage directory
4. Fixes access for boot directory
4. Fixes access for public directory
