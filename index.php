<?php   
session_start();
require("vendor/autoload.php");

use \Slim\Slim;
use \Rain\Tpl;
use \Main\Model\User;

$app = new Slim();

$app->config('debug', true);
// functions.php tem que ficar primeiro na lista de rotas
require_once("functions.php");

require_once("admin-login.php");
require_once("admin.php");

require_once("dashboard.php");

require_once("site-login.php");
require_once("site.php");



$app->run();

?>