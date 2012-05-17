<?php
require_once "bootstrap.php";
use Slim\Slim;
$app = new Slim();
$app->get("/",function(){ echo "Welcome";});
$app->get("/envvar",function(){ echo "<pre>";var_dump($_ENV); });
$app->run();
