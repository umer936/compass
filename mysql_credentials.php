<?php

// Compass database configuration.
// Keep secrets out of git; supply them through environment variables.

function compass_env(string $key, string $default = ''): string
{
    $value = getenv($key);
    return $value === false ? $default : $value;
}

$compass_mysql_host = compass_env('COMPASS_MYSQL_HOST', 'localhost');
$compass_mysql_database = compass_env('COMPASS_MYSQL_DATABASE');
$compass_mysql_user = compass_env('COMPASS_MYSQL_USER');
$compass_mysql_password = compass_env('COMPASS_MYSQL_PASSWORD');
$compass_password_salt = compass_env('COMPASS_PASSWORD_SALT');
$compass_auth_encrypt_key = compass_env('COMPASS_AUTH_ENCRYPT_KEY');

$compass_online_mysql_host = compass_env('COMPASS_ONLINE_MYSQL_HOST', $compass_mysql_host);
$compass_online_mysql_database = compass_env('COMPASS_ONLINE_MYSQL_DATABASE', $compass_mysql_database);
$compass_online_mysql_user = compass_env('COMPASS_ONLINE_MYSQL_USER', $compass_mysql_user);
$compass_online_mysql_password = compass_env('COMPASS_ONLINE_MYSQL_PASSWORD', $compass_mysql_password);

$compass_mobile_mysql_host = compass_env('COMPASS_MOBILE_MYSQL_HOST', $compass_mysql_host);
$compass_mobile_mysql_database = compass_env('COMPASS_MOBILE_MYSQL_DATABASE', $compass_mysql_database);
$compass_mobile_mysql_user = compass_env('COMPASS_MOBILE_MYSQL_USER', $compass_mysql_user);
$compass_mobile_mysql_password = compass_env('COMPASS_MOBILE_MYSQL_PASSWORD', $compass_mysql_password);
