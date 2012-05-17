<?php  
$_ENV['APPLICATION_ENVIRONMENT'] = 'development';
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER['REQUEST_URI']))  
{
    return false; // serve the requested image  
}
require_once "index.php";
