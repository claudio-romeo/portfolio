<?php 
$directory = basename(dirname(dirname(__FILE__)));
$url = explode($directory, $_SERVER['REQUEST_URI']);

define('WEBROOT', $url[0] . 'portfolio/');
    if(count($url) == 1)
    {
        define('WEBROOT', '/');
    }else
    {
        define('WEBROOT', $url[0] . 'portfolio/');
    }


?>
