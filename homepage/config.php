<?php
    define('APP_HOST_ADDRESS', getDomian());
    define('APP_DB_HOST', 'localhost');
    define('APP_DB_NAME', 'smartbot');
    define('APP_DB_USERNAME', 'root');
    define('APP_DB_PASSWORD', 'Aon007123##');
    define('APP_URL_IMG', APP_HOST_ADDRESS.'application/files/img/');
    define('APP_URL_JS', APP_HOST_ADDRESS.'application/views/js/');
    define('APP_PATH', APP_HOST_ADDRESS.'application/');

    
function getDomian()
{
    $domin_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . '/';
    $sub_dir = explode('/', $_SERVER['PHP_SELF']);
    $sub_dir = array_filter($sub_dir);

    $sub_dir = current($sub_dir);
    if(!empty($sub_dir) && $sub_dir != 'index.php') {
        $subName = $sub_dir . '/';
    } else {
        $subName = '/';
    }
    $domin_link = $domin_link . $subName;
    return $domin_link;
}