<?php   

require("vendor/autoload.php");

use \Slim\Slim;
use \Main\Page;
use \Main\PageAdmin;
use \Rain\Tpl;
use \Main\Model\User;

$app = new Slim();

$app->get('/admin', function() 
{
    $page = new Page();

    $page->setTpl("index");

});


$app->get('/', function() 
{
    $page = new Page();

    $page->setTpl("index");

});

$app->run();

?>